@extends('homePage')

@section('title', 'chi tiết sản phẩm')

@section('css')
@endsection

@section('content')
    <!-- product-detail content -->
    <div class="bg-main">
        <div class="container">
            <div class="box">
                <div class="breadcumb">
                    <a href="{{ route('homePage') }}">Trang chủ</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="{{ route('productPage') }}">Tất cả sản phẩm</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="./product-detail.html">JBL Tune 750TNC</a>
                </div>
            </div>

            <div class="row product-row">
                @foreach ($productDetail as $item)
                    <div class="col-5 col-md-12">
                        <div class="product-img" id="product-img">
                            <img src="{{ asset('images/' . $item->image) }}" alt="">
                        </div>
                        {{-- <div class="box">
                            <div class="product-img-list">
                                <div class="product-img-item">
                                    <img src="{{ asset('images/' . $item->image) }}" alt="">
                                </div>
                                <div class="product-img-item">
                                    <img src="{{ asset('images/' . $item->image) }}" alt="">
                                </div>
                                <div class="product-img-item">
                                    <img src="{{ asset('images/' . $item->image) }}" alt="">
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-7 col-md-12">
                        <div class="product-info">
                            <h1>
                                {{ $item->title }}
                            </h1>
                            <div class="product-info-detail">
                                <span class="product-info-detail-title">Thương hiệu:</span>
                                <a href="#"> {{ $item->category_name }}</a>
                            </div>
                            <div class="product-info-detail">
                                <span class="product-info-detail-title">Danh mục:</span>
                                <a href="{{ $item->brand_id }}">{{ $item->brand_name }}</a>
                            </div>
                            <p class="product-description">
                                {{-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo libero alias officiis dolore
                                doloremque eveniet culpa dignissimos, itaque, cum animi excepturi sed veritatis asperiores
                                soluta, nisi atque quae illum. Ipsum. --}}
                            </p>
                            <div class="product-info-price">{{ number_format($item->price) . '.000 ' . 'VNĐ' }}</div>

                            <form action="{{ URL::to('/save-cart') }}" method="post">
                                {{ csrf_field() }}
                                <input type="number" name="qty" min="1" value="1">
                                <input type="hidden" name="product_hidden" id="" value="{{ $item->id }}">
                                <button type="submit" class="btn-flat btn-hover">Thêm vào giỏ hàng</button>
                            </form>


                        </div>
                    </div>

            </div>
            <div class="box">
                <div class="box-header">
                    Miêu tả sản phẩm
                </div>
                <div class="product-detail-description">
                    {{-- <button class="btn-flat btn-hover btn-view-description" id="view-all-description">
                        view all
                    </button> --}}
                    <div class="product-detail-description-content">
                        <p>
                            {{ $item->content }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="box">
                <div class="box-header">
                    review
                </div>
                <div>
                    <div class="user-rate">
                        <div class="user-info">
                            <div class="user-avt">
                                <img src="./images/tuat.jpg" alt="">
                            </div>
                            <div class="user-name">
                                <span class="name">tuat tran anh</span>
                                <span class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </span>
                            </div>
                        </div>
                        <div class="user-rate-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ea iste, veritatis nobis
                            amet illum, cum alias magni dolores odio, eius quo excepturi veniam ipsa voluptatibus natus
                            voluptas vero? Aspernatur!
                        </div>
                    </div>
                    <div class="user-rate">
                        <div class="user-info">
                            <div class="user-avt">
                                <img src="./images/tuat.jpg" alt="">
                            </div>
                            <div class="user-name">
                                <span class="name">tuat tran anh</span>
                                <span class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </span>
                            </div>
                        </div>
                        <div class="user-rate-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ea iste, veritatis nobis
                            amet illum, cum alias magni dolores odio, eius quo excepturi veniam ipsa voluptatibus natus
                            voluptas vero? Aspernatur!
                        </div>
                    </div>
                    <div class="user-rate">
                        <div class="user-info">
                            <div class="user-avt">
                                <img src="./images/tuat.jpg" alt="">
                            </div>
                            <div class="user-name">
                                <span class="name">tuat tran anh</span>
                                <span class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </span>
                            </div>
                        </div>
                        <div class="user-rate-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ea iste, veritatis nobis
                            amet illum, cum alias magni dolores odio, eius quo excepturi veniam ipsa voluptatibus natus
                            voluptas vero? Aspernatur!
                        </div>
                    </div>
                    <div class="user-rate">
                        <div class="user-info">
                            <div class="user-avt">
                                <img src="./images/tuat.jpg" alt="">
                            </div>
                            <div class="user-name">
                                <span class="name">tuat tran anh</span>
                                <span class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </span>
                            </div>
                        </div>
                        <div class="user-rate-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ea iste, veritatis nobis
                            amet illum, cum alias magni dolores odio, eius quo excepturi veniam ipsa voluptatibus natus
                            voluptas vero? Aspernatur!
                        </div>
                    </div>
                    <div class="user-rate">
                        <div class="user-info">
                            <div class="user-avt">
                                <img src="./images/tuat.jpg" alt="">
                            </div>
                            <div class="user-name">
                                <span class="name">tuat tran anh</span>
                                <span class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </span>
                            </div>
                        </div>
                        <div class="user-rate-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ea iste, veritatis nobis
                            amet illum, cum alias magni dolores odio, eius quo excepturi veniam ipsa voluptatibus natus
                            voluptas vero? Aspernatur!
                        </div>
                    </div>
                    <div class="box">
                        <ul class="pagination">
                            <li><a href="#"><i class='bx bxs-chevron-left'></i></a></li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class='bx bxs-chevron-right'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="box">
                <div class="box-header">
                    related products
                </div>
                <div class="row" id="related-products"></div>
            </div> --}}
        </div>
    </div>
    <!-- end product-detail content -->
@endsection

@section('js')
    <script src="{{ asset('js/product-detail.js') }} "></script>

@endsection
