@extends('adminPage')

@section('title', 'Trang chủ admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="admin_home">

        <div class="alert alert-warning admin_home_title" role="alert">
            Danh sách User
          </div>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Tên user</th>
                    <th>Email</th>
                    <th>password</th>
                    <th>Author</th>
                    <th>Admin</th>
                    <th>User</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>admin</td>
                    <td>admil@gmail.com</td>
                    <td>admin</td>
                    <td> <input class="form-check-input" type="radio" value="" name="flexRadioDefault" id="flexRadioDefault1"></td>
                    <td> <input class="form-check-input" type="radio" value="" name="flexRadioDefault" id="flexRadioDefault1"></td>
                    <td> <input class="form-check-input" type="radio" value="" name="flexRadioDefault" id="flexRadioDefault1"></td>
                    <td>
                        <button type="button" class="btn btn-outline-primary"><a href="#">Xóa</a></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection