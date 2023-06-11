<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminSignup(){
        return view('Admin.admin_signup');
    }

    public function AdminRegistrationConfirm(Request $request){
        $validation = $request->validate([
            'name' => 'required|regex:/^[a-zA-Z ]*$/',
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $admin = new Admin;

        $admin->username = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);

        $admin->save();

        return back()->with('success','Registrated Successfully. Login to continue');
    }

    public function adminLogin(){
        return view('Admin.admin_login');
    }

    public function adminAuthenticate(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::guard('admin')->attempt($credentials)){
            $admin = Auth::guard('admin')->user();
            
            $request->session()->put('admin',$admin->username);
            $request->session()->get('admin');
            return redirect()->intended('dashboard');
        }else{
            return back()->with('error','Email or Password Invalid');
        }
    }

    public function adminLogout(Request $request){
        Auth::guard('admin')->logout();
        $request->session()->forget('admin');
        return redirect()->route('adminLoginPage');
    }
}
