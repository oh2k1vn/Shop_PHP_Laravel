@extends('login')


@section('title', 'Đăng nhập')


@section('content')
    <div class="login">

        <div class="center">
            <h1>Đăng nhập</h1>
            <form method="post" action="{{ URL::to('/admin-dashboard') }}">
                {{ csrf_field() }}
                @include('include.note')
                <div class="txt_field">
                    <input type="email" name="email" required>
                    <span></span>
                    <label>Tài khoản</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="password" required>
                    <span></span>
                    <label>Mật khẩu</label>
                </div>
                <div class="pass">Quên mật khẩu?</div>
                <input type="submit" value="Đăng nhập">
                <div class="signup_link">
                    Chưa có tài khoản? <a href="#">Đăng ký</a>
                </div>
            </form>
        </div>
    </div>
@endsection
