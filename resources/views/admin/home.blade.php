@extends('admin', ['pageId' => 'homeadmin'])

@section('title', 'Trang chủ admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
