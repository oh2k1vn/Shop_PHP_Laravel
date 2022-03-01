@extends('auth', ['pageId' => 'signup'])

@section('title', 'Đăng ký')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection
@section('content')
    <div class="singup">
        <form action="{{ URL::to('/admin-dashboard') }}" method="post">
            <h3> <span>god</span>breaker</h3>
            <input type="text" placeholder="Nhập email" required="" name="email">
            <input type="password" placeholder="Nhập mật khẩu" required="" name="password">
            <input type="password" placeholder="Nhập lại mật khẩu" required="" name="password">
            <button>Đăng ký</button>
            <p>Đã có tài khoản? <a href="{{ route('loginPage') }}">Đăng nhập</a></p>
        </form>
    </div>
@endsection
