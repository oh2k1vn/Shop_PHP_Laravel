<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use LDAP\Result;

session_start();

class adminController extends Controller
{
    public function authlogin()
    {
        $id = Session::get('id');
        if ($id) {
            return Redirect::to('dashboard');
        } else {
            return Redirect::to('login')->send();
        }
    }

    public function show_dashboard()
    {
        $this->authlogin();
        return view('admin.home');
    }

    public function dashboard(Request $request)
    {
        $this->authlogin();
        $email = $request->email;
        $password = md5($request->password);

        $demo = DB::table('users')->where('email', $email)->where('password', $password)->first();

        if ($demo) {
            session::put('name', $demo->name);
            session::put('id', $demo->id);
            return Redirect::to('/dashboard');
        } else {
            Session::put('message', 'Tài khoản hoặc mật khẩu sai. Bạn hãy thử lại!');
            return Redirect::to('/login');
        }
    }

    public function logout(Request $request)
    {
        $this->authlogin();

        session::put('name', null);
        session::put('id', null);
        return Redirect::to('/login');
    }

    public function product()
    {
        $this->authlogin();
        return view('admin.product');
    }

    public function addProduct()
    {
        $this->authlogin();

        return view('admin.addproduct');
    }

    public function allProduct()
    {
        $this->authlogin();

        $allproduct = DB::table('product')->get();
        $managerCategoryProduct = view('admin.allproduct')->with('allproduct', $allproduct);
        return view('admin')->with('admin.allproduct', $managerCategoryProduct);
    }

    public function saveProduct(Request $request)
    {
        $this->authlogin();

        $data = array();


        $data['category_id'] = $request->category_id;
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['content'] = $request->content;
        $data['price'] = $request->price;
        $data['image'] = $request->image;

        $get_image = $request->file('image');

        if ($get_image) {
            $get_image_name = $get_image->getClientOriginalExtension();
            $image_name = current(explode('.', $get_image_name));
            $new_image = $image_name . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/asset/product', $new_image);
            $data['image'] = $new_image;

            DB::table('product')->insert($data);
            Session::put('message', 'Thêm Sản phẩm thành công');
            return Redirect::to('all-product');
        }
        // $data['status'] = $request->status;
        $data['image'] = '';

        DB::table('product')->insert($data);
        Session::put('message', 'Thêm Sản phẩm thành công');
        return Redirect::to('all-product');
    }

    public function editProduct($id)
    {
        $this->authlogin();

        $editproduct = DB::table('product')->where('id', $id)->get();
        $managerCategoryProduct = view('admin.editproduct')->with('editproduct', $editproduct);
        return view('admin')->with('admin.editproduct', $managerCategoryProduct);
    }

    public function deleteProduct($id)
    {
        $this->authlogin();


        DB::table('product')->where('id', $id)->delete();
        Session::put('message', 'Xóa Sản phẩm thành công');
        return Redirect::to('all-product');
    }

    public function updateProduct(Request $request, $id)
    {

        $this->authlogin();

        $data = array();

        $data['category_id'] = $request->category_id;
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['content'] = $request->content;
        $data['price'] = $request->price;
        $data['status'] = $request->status;

        $get_image = $request->file('image');
        if ($get_image) {
            $get_image_name = $get_image->getClientOriginalExtension();
            $image_name = current(explode('.', $get_image_name));
            $new_image = $image_name . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/asset/product', $new_image);
            $data['image'] = $new_image;

            DB::table('product')->where('id', $id)->update($data);
            Session::put('message', 'Thêm Sản phẩm thành công');
            return Redirect::to('all-product');
        }


        DB::table('product')->where('id', $id)->update($data);
        Session::put('message', 'Cập nhật Sản phẩm thành công');
        return Redirect::to('all-product');
    }
}
