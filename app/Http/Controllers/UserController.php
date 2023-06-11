<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Delivery;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registrationConfirm(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|regex:/^[a-zA-Z ]*$/',
            'email' => 'required',
            'password' => 'required|min:8'
        ]);

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Registrated Successfully. Login to continue');
    }

    public function loginPageView()
    {
        return view('login');
    }

    public function authentication(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8'
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            // $request->session()->put('name',$user->name);
            // $request->session()->get('name');

            $cartSum = Cart::where('user_id', $user->id)->sum('quantity');
            $request->session()->put('quantity', $cartSum);
            $request->session()->get('quantity');

            // return redirect()->route('home');
            return view('home')->with('currentUser', [User::all()]);
        }
        return back()->with('error', 'Email or Password Invalid');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect()->route('home');
    }




    public function myprofile(string $id)
    {
        $Currentuser = User::where('id', $id)->get();

        return view('myProfile', ['Currentuser' => $Currentuser]);
    }

    public function editprofile(Request $request, string $id)
    {
        DB::table('users')
            ->updateOrInsert(
                ['email' => 'nitish@gmail.com'],
                [
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'gender' => $request->gender,
                    'dob' => $request->dob,
                    'default_address' => $request->default_address,
                    'pin' => $request->pin,
                    'alt_phone' => $request->alt_phone,
                ]
            );

        return redirect()->route('profile', ['id' => $id]);
    }


    public function checkout()
    {
        $user = Auth::user();
        $Currentuser = User::find($user->id);

        $cartProductJoin = Cart::where('user_id', $user->id)
            ->leftJoin('products', 'carts.product_id', '=', 'products.id')
            ->select(
                'carts.id',
                'carts.user_id',
                'carts.product_id',
                'carts.quantity',
                'products.selling_price',
                'products.mrp',
            )
            ->get();

        foreach ($cartProductJoin as $row) {
            $row->mrp = $row->quantity * $row->mrp;
            $row->selling_price = $row->quantity * $row->selling_price;
        }

        $sumMRP = $cartProductJoin->sum('mrp');
        $sumSP = $cartProductJoin->sum('selling_price');
        $sumDiscount = $sumMRP - $sumSP;
        if ($sumSP) {
            $delivery = 100;
        } else {
            $delivery = 0;
        }
        $totalPayable = $sumSP + $delivery;

        return view('checkout', compact('cartProductJoin', 'sumMRP', 'sumDiscount', 'totalPayable', 'delivery', 'Currentuser'));
    }

    public function checkoutDefaultAddress(Request $request)
    {
        $user = Auth::user();

        DB::table('users')
            ->updateOrInsert(
                ['email' => $user->email],
                [
                    'phone' => $request->phone,
                    'default_address' => $request->default_address,
                    'pin' => $request->pin
                ]
            );

        return redirect('checkout');
    }

    public function checkoutDeliveryAddress(Request $request)
    {
        $user = Auth::user();

        DB::table('users')
            ->updateOrInsert(
                ['email' => $user->email],
                [
                    'name2'    => $request->name2,
                    'phone2'   => $request->phone2,
                    'second_address' => $request->second_address,
                    'pin2'     => $request->pin2
                ]
            );

        return response()->json(["message" => "Information Updated successfully"]);
    }

    public function showcheckoutDeliveryAddress(Request $request)
    {
        $user = Auth::user();

        $secondAddress = User::where('id',$user->id)->get();

        return response()->json($secondAddress);
    }
}
