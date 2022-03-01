@extends('home' , ['pageId' => 'home'])

@section('title', 'Trang chủ')

@section('css')
    <link rel="stylesheet" href="css/main.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

@endsection

@section('content')
    <section id="hero">
        <button>Mua ngay</button>
    </section>

    <section id="product1" class="product">
        <h2>sản phẩm đặc trưng</h2>
        <p>Những sản phẩm hot thịnh hàng</p>
        <div class="product_container">

            <div class="product_container_item">
                <div class="product_container_item_img">
                    <img src="{{ asset('asset/home/ao.jpg') }}" alt="">
                    <div class="middle">
                        <a href="#">Mua ngay</a>
                    </div>
                </div>
                <div class="product_container_item_title">
                    <h4>Áo thun GB spance tee</h4>
                    <div class="product_container_item_title_bottom">
                        <h4>400.000</h4>
                        <a href="#"><i class='bx bx-cart'></i></a>
                    </div>
                </div>
            </div>
            <div class="product_container_item">
                <div class="product_container_item_img">
                    <img src="{{ asset('asset/home/ao.jpg') }}" alt="">
                    <div class="middle">
                        <a href="#">Mua ngay</a>
                    </div>
                </div>
                <div class="product_container_item_title">
                    <h4>Áo thun GB spance tee</h4>
                    <div class="product_container_item_title_bottom">
                        <h4>400.000</h4>
                        <a href="#"><i class='bx bx-cart'></i></a>
                    </div>
                </div>
            </div>
            <div class="product_container_item">
                <div class="product_container_item_img">
                    <img src="{{ asset('asset/home/ao.jpg') }}" alt="">
                    <div class="middle">
                        <a href="#">Mua ngay</a>
                    </div>
                </div>
                <div class="product_container_item_title">
                    <h4>Áo thun GB spance tee</h4>
                    <div class="product_container_item_title_bottom">
                        <h4>400.000</h4>
                        <a href="#"><i class='bx bx-cart'></i></a>
                    </div>
                </div>
            </div>
            <div class="product_container_item">
                <div class="product_container_item_img">
                    <img src="{{ asset('asset/home/ao.jpg') }}" alt="">
                    <div class="middle">
                        <a href="#">Mua ngay</a>
                    </div>
                </div>
                <div class="product_container_item_title">
                    <h4>Áo thun GB spance tee</h4>
                    <div class="product_container_item_title_bottom">
                        <h4>400.000</h4>
                        <a href="#"><i class='bx bx-cart'></i></a>
                    </div>
                </div>
            </div>
            <div class="product_container_item">
                <div class="product_container_item_img">
                    <img src="{{ asset('asset/home/ao.jpg') }}" alt="">
                    <div class="middle">
                        <a href="#">Mua ngay</a>
                    </div>
                </div>
                <div class="product_container_item_title">
                    <h4>Áo thun GB spance tee</h4>
                    <div class="product_container_item_title_bottom">
                        <h4>400.000</h4>
                        <a href="#"><i class='bx bx-cart'></i></a>
                    </div>
                </div>
            </div>
            <div class="product_container_item">
                <div class="product_container_item_img">
                    <img src="{{ asset('asset/home/ao.jpg') }}" alt="">
                    <div class="middle">
                        <a href="#">Mua ngay</a>
                    </div>
                </div>
                <div class="product_container_item_title">
                    <h4>Áo thun GB spance tee</h4>
                    <div class="product_container_item_title_bottom">
                        <h4>400.000</h4>
                        <a href="#"><i class='bx bx-cart'></i></a>
                    </div>
                </div>
            </div>
            <div class="product_container_item">
                <div class="product_container_item_img">
                    <img src="{{ asset('asset/home/ao.jpg') }}" alt="">
                    <div class="middle">
                        <a href="#">Mua ngay</a>
                    </div>
                </div>
                <div class="product_container_item_title">
                    <h4>Áo thun GB spance tee</h4>
                    <div class="product_container_item_title_bottom">
                        <h4>400.000</h4>
                        <a href="#"><i class='bx bx-cart'></i></a>
                    </div>
                </div>
            </div>
            <div class="product_container_item">
                <div class="product_container_item_img">
                    <img src="{{ asset('asset/home/ao.jpg') }}" alt="">
                    <div class="middle">
                        <a href="#">Mua ngay</a>
                    </div>
                </div>
                <div class="product_container_item_title">
                    <h4>Áo thun GB spance tee</h4>
                    <div class="product_container_item_title_bottom">
                        <h4>400.000</h4>
                        <a href="#"><i class='bx bx-cart'></i></a>
                    </div>
                </div>
            </div>
           

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
