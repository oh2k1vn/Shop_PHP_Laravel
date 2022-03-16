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
}
