<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\brand;
use App\Models\category;
use App\Models\product;
use Cart;

// use App\Models\User;

class checkoutController extends Controller
{

    public function login_checkout() {

        $cate_product = category::orderBy('id', 'desc')->get();
        $brand_product = brand::orderBy('id', 'desc')->get();


        return view('home.login_checkout', compact('cate_product','brand_product'));
    }
    
    public function checkout() {

       


        // return echo 'Trang chechout';
    }
    
    public function add_customer(Request $request) {

        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['phone'] = $request->phone;

        $insert = DB::table('customer')->insertGetId($data);


        Session::put('id',$insert->id);
        Session::put('name',$request->name);

        return Redirect::to('/checkout');
    }


}
