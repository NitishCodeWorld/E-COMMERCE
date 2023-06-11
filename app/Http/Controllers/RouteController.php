<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class RouteController extends Controller
{
    public function homePage()
    {
        return view('home');
    }


    // public function testJoin()
    // {
    //     $cartProductJoin = DB::table('carts')
    //         ->leftJoin('products', 'carts.product_id', '=', 'products.id')
    //         ->select(
    //             'carts.id',
    //             'carts.user_id',
    //             'carts.product_id',
    //             'carts.quantity',
    //             'products.brand',
    //             'products.image',
    //             'products.selling_price',
    //             'products.mrp',
    //             'products.description'
    //         )
    //         ->get();

    //     $sumQuantity = $cartProductJoin->sum('quantity');
    //     $sumMRP = $cartProductJoin->sum('mrp');
    //     return view('testPage', ['cartProductJoin' => $cartProductJoin]);
    // }
}
