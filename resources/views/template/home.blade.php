@extends('home' , ['pageId' => 'home'])

@section('title', 'Trang chủ')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

@endsection

@section('content')
    <section id="hero">
        <button>Mua ngay</button>
    </section>


    <section class="product">
        <h2>sản phẩm mới nhất</h2>
        <div class="product_row">
            @foreach ($product as $item)
                <div class="product_row_col-4">
                    <img src="{{ URL::to('asset/product/' . $item->image) }}" alt="">
                    <div class="bottom">
                        <a href="#" class="bottom_title">
                            {{ $item->title }}
                        </a>
                        <div class="bottom_buy">
                            <h4>{{ number_format($item->price) . ' ' . 'VNĐ' }}</h4>
                            <a href="#"><i class='bx bx-cart'></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>




    <section class="banner">
        <img src="{{ asset('asset/home/logo.png') }}" alt="">
        <div class="banner_text">
            <h3><span>God </span>Breaker</h3>
            <p>Các anh hay than thở là đồ nữ thì nhiều kiểu mà đồ nam thì quanh đi quẩn lại, nhưng không phải đâu ạ, đồ nam
                cũng nhiều kiểu lắm và chỉ cần biến tấu một chút là mình đã có ngay bộ đồ thật CHẤT đấy ạ!</p>
            <button>Xem ngay</button>
        </div>
    </section>
@endsection
