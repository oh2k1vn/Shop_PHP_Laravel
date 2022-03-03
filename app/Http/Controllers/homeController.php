<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function index() {

        $cate_product = DB::table('category')->orderBy('id','asc')->get();
        $brand_product = DB::table('brand')->orderBy('id','asc')->get();
        
        $product = DB::table('product')->orderBy('id','asc')->limit(8)->get();

        return view('template.home')->with('cate_product',$cate_product)->with('brand_product',$brand_product)->with('product',$product);

        // echo '<pre>';
        // print_r($product);
        // echo '</pre>';

    }

    public function product() {

        $cate_product = DB::table('category')->orderBy('id','asc')->get();
        $brand_product = DB::table('brand')->orderBy('id','asc')->get();
        
        $category = DB::table('product')->orderBy('id','asc')->limit(8)->get();

        return view('template.product')->with('cate_product',$cate_product)->with('brand_product',$brand_product)->with('category',$category);

        // echo '<pre>';
        // print_r($product);
        // echo '</pre>';

    }

    public function login() {
        return view('template.login');
    }
    
    public function singup() {
        return view('template.signup');
    }

    public function show_category($id) {

        $cate_product = DB::table('category')->orderBy('id','asc')->get();
        $brand_product = DB::table('brand')->orderBy('id','asc')->get();

        $category_by_id = DB::table('product')->join('category','product.category_id','=','category.id')->where('product.category_id',$id)->get();
        $category_name = DB::table('category')->where('category.id',$id)->limit(1)->get();

        return view('template.category')->with('cate_product',$cate_product)->with('brand_product',$brand_product)->with('category_by_id',$category_by_id)->with('category_name',$category_name);
    }

    public function show_brand($id) {

        $cate_product = DB::table('category')->orderBy('id','asc')->get();
        $brand_product = DB::table('brand')->orderBy('id','asc')->get();

        $brand_by_id = DB::table('product')->join('brand','product.brand_id','=','brand.id')->where('product.brand_id',$id)->get();
        $category_name = DB::table('brand')->where('brand.id',$id)->limit(1)->get();

        return view('template.brand')->with('cate_product',$cate_product)->with('brand_product',$brand_product)->with('brand_by_id',$brand_by_id)->with( 'category_name',$category_name);
    }
}
