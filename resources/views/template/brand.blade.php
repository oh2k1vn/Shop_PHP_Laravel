@extends('home' , ['pageId' => 'brand'])

@section('title', 'Thương hiệu')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

@endsection

@section('content')

    <section class="product">
        <h2>Thương hiệu sản phẩm</h2>
        <div class="product_row">
            @foreach ($brand_by_id as $item)
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



@endsection
