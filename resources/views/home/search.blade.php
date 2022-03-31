@extends('homePage')

@section('title', 'Tìm kiếm')


@section('content')

    <!-- product list -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2 style="text-transform: initial">Tìm kiếm từ khóa <span style="color: #111">{{$keyword}}</span></h2>
            </div>
            <div class="row">

                @foreach ($search_product as $item)
                    <div class="col-3 col-md-6 col-sm-12">
                        <div class="product-card">
                            <div class="product-card-img">
                                <img src="{{ asset('images/'.$item->image) }}" alt="">
                            </div>
                            <div class="product-card-info">
                                <div class="product-btn">
                                    <a href="{{URL::to('chi-tiet-san-pham/'.$item->id)}}" class="btn-flat btn-hover btn-shop-now">Mua ngay</a>
                                </div>
                                <div class="product-card-name">
                                    {{$item->title}}
                                </div>
                                <div class="product-card-price">
                                    {{-- <span><del>$300</del></span> --}}
                                    <span class="curr-price">{{number_format($item->price).'.000 '.'VNĐ'}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



@endsection

@section('js')
    <!-- app js -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
@endsection
