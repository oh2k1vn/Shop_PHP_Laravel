@extends('auth', ['pageId' => 'login'])

@section('title', 'Đăng nhập')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection
@section('content')
    <div class="login">
        <form action="{{ URL::to('/admin-dashboard') }}" method="post">
            <h3> <span>god</span>breaker</h3>
            <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="message_login">',$message,'</span>';
                    Session::put('message',null);
                };
            ?>
            <input class="form_input" type="text" placeholder="Nhập email" required="" name="email">
            <input class="form_input" type="password" placeholder="Nhập email" required="" name="password">
           
            <button>Đăng nhập</button>
            <p>Chưa có tài khoản? <a href="{{ route('singupPage')}}">Đăng ký</a></p>
            {{ csrf_field() }}
        </form>
    </div>
@endsection
