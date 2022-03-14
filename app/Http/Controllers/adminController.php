<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\brand;
use App\Models\category;
use App\Models\product;
// use App\Models\User;

class adminController extends Controller
{
    public function index()
    {

        return view('admin.index');
    }

    public function dashboard(Request $request)
    {
        $email = $request->email;
        $password = md5($request->password);

        $demo = DB::table('users')->where('email', $email)->where('password', $password)->first();

        if ($demo) {
            session::put('name', $demo->name);
            session::put('id', $demo->id);
            return Redirect::to('/admin');
        } else {
            Session::put('message', 'Tài khoản hoặc mật khẩu sai. Bạn hãy thử lại!');
            return Redirect::to('/login');
        }
    }

    public function logout(Request $request)
    {

        session::put('name', null);
        session::put('id', null);
        return Redirect::to('/login');
    }


    public function addProduct()
    {

        $cate_product = category::orderBy('id', 'desc')->get();
        $brand_product = brand::orderBy('id', 'desc')->get();


        return view('admin.addproduct')->with('cate_product', $cate_product)->with('brand_product', $brand_product);
    }

    public function allProduct()
    {
        // $product = product::orderBy('id', 'desc')->get();

        $allproduct = DB::table('product')
            ->join('category', 'category.id', '=', 'product.category_id')
            ->join('brand', 'brand.id', '=', 'product.brand_id')
            // ->orderBy('product.id', 'desc')
            ->select('product.*', 'category.category_name', 'brand.brand_name')
            ->get();

        // dd($allproduct);

        $managerCategoryProduct = view('admin.allproduct')->with('allproduct', $allproduct);
        return view('adminPage')->with('admin.allproduct', $managerCategoryProduct);

    }

    public function saveProduct(Request $request)
    {

        $data = array();

        $data['title'] = $request->title;
        $data['category_id'] = $request->category_id;
        $data['brand_id'] = $request->brand_id;
        $data['desc'] = $request->desc;
        $data['content'] = $request->content;
        $data['price'] = $request->price;
        $data['image'] = $request->image;

        $get_image = $request->file('image');

        if ($get_image) {
            $get_image_name = $get_image->getClientOriginalExtension();
            $image_name = current(explode('.', $get_image_name));
            $new_image = $image_name . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('images/', $new_image);
            $data['image'] = $new_image;
            DB::table('product')->insert($data);
            return Redirect::to('all-product');
        }
        $data['image'] = '';



        DB::table('product')->insert($data);
        return Redirect::to('all-product');


        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
    }

    public function editProduct($id)
    {

        $cate_product = DB::table('category')->orderBy('id', 'desc')->get();
        $brand_product = DB::table('brand')->orderBy('id', 'desc')->get();

        $editproduct = DB::table('product')->where('id', $id)->get();
        $managerCategoryProduct = view('admin.editproduct')->with('editproduct', $editproduct)->with('cate_product', $cate_product)->with('brand_product', $brand_product);
        return view('adminPage')->with('admin.editproduct', $managerCategoryProduct);

        // echo '<pre>';
        // print_r($editproduct);
        // echo '</pre>';
    }

    public function deleteProduct($id)
    {

        $product = DB::table('product')->where('id', $id);
        $product->delete();


        return Redirect::to('all-product');
    }

    public function updateProduct(Request $request, $id)
    {


        $data = array();

        $data['category_id'] = $request->category_id;
        $data['brand_id'] = $request->brand_id;
        $data['title'] = $request->title;
        $data['desc'] = $request->desc;
        $data['content'] = $request->content;
        $data['price'] = $request->price;
        $data['status'] = $request->status;

        $get_image = $request->file('image');
        if ($get_image) {
            $get_image_name = $get_image->getClientOriginalExtension();
            $image_name = current(explode('.', $get_image_name));
            $new_image = $image_name . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('images/', $new_image);
            $data['image'] = $new_image;

            DB::table('product')->where('id', $id)->update($data);
            return Redirect::to('all-product');
        }


        DB::table('product')->where('id', $id)->update($data);
        return Redirect::to('all-product');
    }
}
