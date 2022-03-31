@extends('login')


@section('title', 'Đăng ký')


@section('content')
    <div class="login">

        <div class="center">
            <h1>Đăng Ký</h1>
            <form method="post" action="{{ URL::to('/add-customer') }}">
                {{ csrf_field() }}
                @include('include.note')
                <div class="txt_field">
                    <input type="text" name="name" required>
                    <span></span>
                    <label>Họ và tên</label>
                </div>
                <div class="txt_field">
                    <input type="email" name="email" required>
                    <span></span>
                    <label>Email</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="password" required>
                    <span></span>
                    <label>Mật khẩu</label>
                </div>
                <div class="txt_field">
                    <input type="text" name="phone" required>
                    <span></span>
                    <label>Số điện thoại</label>
                </div>
                <input type="submit" value="Đăng nhập">
                <div class="signup_link">
                    Chưa có tài khoản? <a href="{{ route('loginPage') }}">Đăng Nhập</a>
                </div>
            </form>
        </div>
    </div>
@endsection
