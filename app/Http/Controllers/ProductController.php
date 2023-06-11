<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function addProduct(Request $request)
    {

        $product = new Product();

        $product->entry_date = $request->input('entry_date');
        $product->category_name = $request->input('category_name');
        $product->subCategory_name = $request->input('subCategory_name');
        $product->brand = $request->input('brand');
        $product->selling_price = $request->input('sellingPrice');
        $product->mrp = $request->input('mrp');
        $product->discountPer = $request->input('discountPer');
        $product->description = $request->input('description');

        //image upload start
        $file = $request->file('image');
        $extention = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extention;
        $file->move('product_images/', $filename);
        $product->image = $filename;
        //image upload end

        $product->save();

        return back()->with('status', 'Product Added Successfully');
    }

    public function viewMensShirt()
    {
        $collection = Product::where('category_name', "Men's Top Wear")
            ->where('subCategory_name', 'Shirt')
            ->get();

        return view('mens_shirt', compact('collection'));
    }

    public function viewMensTshirt()
    {
        $collection = Product::where('category_name', "Men's Top Wear")
            ->where('subCategory_name', 'T-shirt')
            ->get();

        return view('mens_tshirt', compact('collection'));
    }

    public function viewSarees()
    {
        $collection = Product::where('category_name', "Women's Indian Wear")
            ->where('subCategory_name', 'Sarees')
            ->get();

        return view('sarees', compact('collection'));
    }

    public function viewProduct(string $id)
    {
        $collection = Product::find($id);

        return view('productViewPage', compact('collection'));
    }

    public function addToCart(Request $request, string $id)
    {
        $user = Auth::user();
        $product = Product::find($id);
        $cart = new Cart();

        if(($cart->where('product_id',$id)->exists()) && ($cart->where('user_id', $user->id)->exists())){
            $cart->quantity = $cart->where('product_id',$id)->where('user_id',$user->id)->increment('quantity',1);
        }else{
            $cart->user_id = $user->id;
            $cart->product_id = $product->id;
            $cart->quantity = 1;

            $cart->save();
        }

        $cartSum = Cart::where('user_id', $user->id)->sum('quantity');
        $request->session()->put('quantity', $cartSum);
        $request->session()->get('quantity');

        return redirect()->route('viewProduct', ['id' => $product->id]);
    }

    public function addToCart1(string $id)
    {
        $user = Auth::user();
        $cart = new Cart();

        $cart->quantity = $cart->where('product_id',$id)->where('user_id',$user->id)->increment('quantity',1);

        return redirect('cart');
    }

    public function decreaseQuantity(Request $request, string $id){
        $user = Auth::user();
        $cart = new Cart();
        

        $currentProductQuantity = $cart->where('user_id',$user->id)->where('product_id',$id)->value('quantity');
        
            
            if($currentProductQuantity == 1){
                return redirect()->route('deleteItem', ['id' => $id]);
            }else{
            $cart->quantity = $cart->where('product_id',$id)->where('user_id',$user->id)->decrement('quantity',1);
        }
        
        return redirect('cart');
    }

    public function cartView(Request $request)
    {
        $user = Auth::user();

        $cartSum = Cart::where('user_id', $user->id)->sum('quantity');
        $request->session()->put('quantity', $cartSum);
        $request->session()->get('quantity');

        
            $cartProductJoin = Cart::where('user_id', $user->id)
                ->leftJoin('products', 'carts.product_id', '=', 'products.id')
                ->select(
                    'carts.id',
                    'carts.user_id',
                    'carts.product_id',
                    'carts.quantity',
                    'products.brand',
                    'products.image',
                    'products.selling_price',
                    'products.discountPer',
                    'products.mrp',
                    'products.description'
                )
                ->get();
  
            foreach($cartProductJoin as $row){
                    $row->mrp = $row->quantity * $row->mrp;
                    $row->selling_price = $row->quantity * $row->selling_price;
                }
            
            $sumMRP = $cartProductJoin->sum('mrp'); 
            $sumSP = $cartProductJoin->sum('selling_price');
            $sumDiscount = $sumMRP - $sumSP;
            if($sumSP){
                $delivery = 100;
            }else{
                $delivery = 0;
            }
            $totalPayable = $sumSP + $delivery;
        
        return view('cart', compact('cartProductJoin','sumMRP','sumDiscount','totalPayable','delivery'));
    }

    public function deleteCartItem(string $id){
        $user = Auth::user();
        Cart::where('user_id',$user->id)->where('product_id',$id)->delete();

        return redirect('cart');
    }
}
