<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\brand;
use App\Models\category;
use Illuminate\Support\Facades\Redirect;
// use App\Models\User;
use Session;
use Cart;

class cartController extends Controller
{
    public function save_cart(Request $request) {
        

        $productId = $request->product_hidden;
        $qty = $request->qty;

        $product_info = product::where('id',$productId)
        // ->select('product.*', 'category.category_name', 'brand.brand_name')
        ->first();

        $data['id'] = $product_info->id;
        $data['qty'] = $qty;
        $data['name'] = $product_info->title;
        $data['price'] = $product_info->price;
        $data['weight'] = '123';
        $data['options']['image'] = $product_info->image;

        Cart::add($data);
        Cart::setGlobalTax(10);

        // Cart::destroy();
        return Redirect::to('show-cart');
    }

    public function show_cart() {
        $cate_product = category::orderBy('id', 'desc')->get();
        $brand_product = brand::orderBy('id', 'desc')->get();

        return view('home.checkout',compact('cate_product','brand_product'));

    }

    public function delete_cart($rowId) {
        Cart::update($rowId,0);

        return Redirect::to('show-cart');
    }

    public function update_cart(Request $request) {
       $rowId = $request->rowId;
       $qty = $request->qty;

       Cart::update($rowId,$qty);

       return Redirect::to('show-cart');
    }
}
