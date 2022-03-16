@extends('homePage')

@section('title', 'sản phẩm')

@section('content')
    <!-- products content -->
    <div class="bg-main">
        <div class="container">
            <div class="box">
                <div class="breadcumb">
                    <a href="{{ route('homePage') }}">Trang chủ</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="{{ route('productPage') }}">Tất cả sản phẩm</a>
                </div>
            </div>
            <div class="box">
                <div class="row">
                    @foreach ($products as $item)
                        <div class="col-3 col-md-6 col-sm-12">
                            <div class="product-card">
                                <div class="product-card-img">
                                    <img src="{{ asset('images/' . $item->image) }}" alt="">
                                </div>
                                <div class="product-card-info">
                                    <div class="product-btn">
                                        <a href="{{ URL::to('chi-tiet-san-pham/' . $item->id) }}"
                                            class="btn-flat btn-hover btn-shop-now">Mua ngay</a>

                                    </div>
                                    <div class="product-card-name">
                                        {{ $item->title }}
                                    </div>
                                    <div class="product-card-price">
                                        {{-- <span><del>$300</del></span> --}}
                                        <span
                                            class="curr-price">{{ number_format($item->price) . '.000 ' . 'VNĐ' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- end products content -->
@endsection

@section('js')
    <script src="{{ asset('js/product.js') }} "></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
@endsection
