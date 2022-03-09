<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function index(){
        
       
        $cate_product = DB::table('category')->orderBy('id', 'desc')->get();
        $brand_product = DB::table('brand')->orderBy('id', 'desc')->get();

        $products =  DB::table('product')->orderBy('id', 'desc')->limit(8)->get();

        return view('home.index')->with('cate_product',$cate_product)->with('brand_product',$brand_product)->with('products',$products);

        // dd($product);
    }

    public function product(){
        return view('home.product');
    }
    
    public function productDetail($id){
        $cate_product = DB::table('category')->orderBy('id','desc')->get();
        $brand_product = DB::table('brand')->orderBy('id','desc')->get();

        $productDetail = DB::table('product')
        ->join('category', 'category.id', '=', 'product.category_id')
        ->join('brand', 'brand.id', '=', 'product.brand_id')->orderBy('product.id', 'desc')->where('product',$id)->get();


        return view('home.productDetail')->with('cate_product',$cate_product)->with('brand_product',$brand_product)->with('productDetail',$productDetail);
    }

    public function sigon(){
        return view('home.sigon');
    }

    public function show_category($id) {

        $cate_product = DB::table('category')->orderBy('id','desc')->get();
        $brand_product = DB::table('brand')->orderBy('id','desc')->get();

        $category_by_id = DB::table('product')->join('category','product.category_id','=','category.id')->where('product.category_id',$id)->get();
        $category_name = DB::table('category')->where('category.id',$id)->limit(1)->get();

        return view('home.category')->with('cate_product',$cate_product)->with('brand_product',$brand_product)->with('category_by_id',$category_by_id)->with('category_name',$category_name);
    }

    public function show_brand($id) {

        $cate_product = DB::table('category')->orderBy('id','desc')->get();
        $brand_product = DB::table('brand')->orderBy('id','desc')->get();

        $brand_by_id = DB::table('product')->join('brand','product.brand_id','=','brand.id')->where('product.brand_id',$id)->get();
        $brand_name = DB::table('brand')->where('brand.id',$id)->limit(1)->get();

        return view('home.brand')->with('cate_product',$cate_product)->with('brand_product',$brand_product)->with('brand_by_id',$brand_by_id)->with( 'brand_name',$brand_name);
    }
}
