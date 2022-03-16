<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\brand;
use App\Models\category;
// use App\Models\User;
use Session;
use App\cart;

class homeController extends Controller
{
    public function index(){

        $banner = DB::table('banner')->orderBy('id', 'asc')->get();
        $promotion= DB::table('promotion')->orderBy('id', 'asc')->get();

        $cate_product = category::orderBy('id', 'desc')->get();
        $brand_product = brand::orderBy('id', 'desc')->get();

        $products =  product::orderBy('id', 'desc')->limit(8)->get();

        // dd($products);


        return view('home.index', compact('banner','promotion','cate_product','brand_product','products'));

    }

    public function product(){

        $cate_product = category::orderBy('id', 'desc')->get();
        $brand_product = brand::orderBy('id', 'desc')->get();

        $products = product::orderBy('id', 'desc')->get();


        return view('home.product')->with('products',$products)->with('cate_product',$cate_product)->with('brand_product',$brand_product);
    }
    
    public function productDetail($id){
        $cate_product = category::orderBy('id', 'desc')->get();
        $brand_product = brand::orderBy('id', 'desc')->get();

        $productDetail = DB::table('product')
        ->join('category', 'category.id', '=', 'product.category_id')
        ->join('brand', 'brand.id', '=', 'product.brand_id')
        ->select('product.*', 'category.category_name', 'brand.brand_name')
        ->where('product.id',$id)
        ->get();

      

        return view('home.productDetail', compact('cate_product','brand_product','productDetail'));

        
    }

    public function saveCart(Request $request){
      
        $cate_product = category::orderBy('id', 'desc')->get();
        $brand_product = brand::orderBy('id', 'desc')->get();

        $productID = $request->product_hidden;
        $qty = $request->qty;
 
        $data =  product::where('id',$productID)->get();

        return view('home.checkout',compact('cate_product','brand_product'));
        
    }


    public function sigon(){
      

        return view('home.sigon');
    }

    public function about(){
        $cate_product = category::orderBy('id', 'desc')->get();
        $brand_product = brand::orderBy('id', 'desc')->get();

        return view('home.about',compact('cate_product','brand_product'));
    }

    public function show_category($id) {

        $cate_product = category::orderBy('id', 'desc')->get();
        $brand_product = brand::orderBy('id', 'desc')->get();

        $category_by_id = DB::table('product')
        ->join('category','product.category_id','=','category.id')
        ->select('product.*', 'category.category_name')
        ->where('product.category_id',$id)
        ->get();

        $category_name = DB::table('category')
        ->where('category.id',$id)
        ->limit(1)
        ->get();


        return view('home.category')->with('cate_product',$cate_product)->with('brand_product',$brand_product)->with('category_by_id',$category_by_id)->with('category_name',$category_name);
    }

    public function show_brand($id) {

        $cate_product = category::orderBy('id', 'desc')->get();
        $brand_product = brand::orderBy('id', 'desc')
        ->get();

        $brand_by_id = DB::table('product')
        ->join('brand','product.brand_id','=','brand.id')
        ->select('product.*', 'brand.brand_name')
        ->where('product.brand_id',$id)
        ->get();

        $brand_name = DB::table('brand')->where('brand.id',$id)->limit(1)->get();

        return view('home.brand')->with('cate_product',$cate_product)->with('brand_product',$brand_product)->with('brand_by_id',$brand_by_id)->with( 'brand_name',$brand_name);
    }
}
