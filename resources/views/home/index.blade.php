@extends('homePage')

@section('title', 'Trang chủ')


@section('content')


    @include('include.hero')

    @include('include.promotion')


    <!-- product list -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>Sản phẩm mới</h2>
            </div>
            <div class="row">

                @foreach ($products as $item)
                    <div class="col-3 col-md-6 col-sm-12">
                        <div class="product-card">
                            <div class="product-card-img">
                                <img src="{{ asset('images/'.$item->image) }}" alt="">
                            </div>
                            <div class="product-card-info">
                                <div class="product-btn">
                                    <a href="{{URL::to('chi-tiet-san-pham/'.$item->id)}}" class="btn-flat btn-hover btn-shop-now">Mua ngay</a>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-cart-add'></i>
                                    </button>
                                </div>
                                <div class="product-card-name">
                                    {{$item->title}}
                                </div>
                                <div class="product-card-price">
                                    {{-- <span><del>$300</del></span> --}}
                                    <span class="curr-price">{{number_format($item->price).' '.'VNĐ'}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="section-footer">
                <a href="#" class="btn-flat btn-hover">Xem thêm</a>
            </div>
        </div>
    </div>



@endsection

@section('js')
    <!-- app js -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
@endsection
