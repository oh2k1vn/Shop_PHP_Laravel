<!-- header -->
<header>
    <!-- mobile menu -->
    <div class="mobile-menu bg-second">
        <a href="{{ route('homePage') }}" class="mb-logo">GOB BREAKER</a>
        <span class="mb-menu-toggle" id="mb-menu-toggle">
            <i class='bx bx-menu'></i>
        </span>
    </div>
    <!-- end mobile menu -->
    <!-- main header -->
    <div class="header-wrapper" id="header-wrapper">
        <span class="mb-menu-toggle mb-menu-close" id="mb-menu-close">
            <i class='bx bx-x'></i>
        </span>
        <div class="bg-main">
            <div class="mid-header container">
                <a href="{{ route('homePage') }}" class="logo">GOB BREAKER</a>
                <div class="search">
                    <input type="text" placeholder="Tìm kiếm sản phẩm ...">
                    <i class='bx bx-search-alt'></i>
                </div>
                <ul class="user-menu">
                    <li><a href="#"><i class='bx bx-bell'></i></a></li>
                    <li><a href="{{ route('loginPage') }}"><i class='bx bx-user-circle'></i></a></li>
                    <li><a href="{{ route('checkoutPage') }}"><i class='bx bx-cart'></i></a></li>
                </ul>
            </div>
        </div>
        <!-- bottom header -->
        <div class="bg-second">
            <div class="bottom-header container">
                <ul class="main-menu">
                    <li><a href="{{ route('homePage') }}">home</a></li>
                    <!-- mega menu -->
                    <li class="mega-dropdown">
                        <a href="#">sản phẩm<i class='bx bxs-chevron-down'></i></a>
                        <div class="mega-content">
                            <div class="row">
                                <div class="col-5 col-md-12">
                                    <div class="box">
                                        <h3>Danh mục sản phẩm</h3>
                                        <ul>
                                            @foreach ($cate_product as $cate)
                                                <li><a href="{{URL::to('danh-muc-san-pham/'.$cate->id)}}">{{ $cate->category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-5 col-md-12">
                                    <div class="box">
                                        <h3>Thương hiệu sản phẩm</h3>
                                        <ul>
                                            @foreach ($brand_product as $brand)
                                                <li><a href="{{URL::to('thuong-hieu-san-pham/'.$brand->id)}}">{{ $brand->brand_name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row img-row">
                                <div class="col-3">
                                    <div class="box">
                                        <img src="./images/kisspng-beats-electronics-headphones-apple-beats-studio-red-headphones.png" alt="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="box">
                                        <img src="./images/JBL_TUNE220TWS_ProductImage_Pink_ChargingCaseOpen.png" alt="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="box">
                                        <img src="./images/JBL_JR 310BT_Product Image_Hero_Skyblue.png" alt="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="box">
                                        <img src="./images/JBLHorizon_001_dvHAMaster.png" alt="">
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </li>
                    <!-- end mega menu -->
                    <li><a href="#">blog</a></li>
                    <li><a href="#">about</a></li>
                </ul>
            </div>
        </div>
        <!-- end bottom header -->
    </div>
    <!-- end main header -->
</header>
<!-- end header -->
