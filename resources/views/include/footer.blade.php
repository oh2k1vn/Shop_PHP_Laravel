<!-- footer -->
<footer class="bg-second">
    <div class="container">
        <div class="row">
            <div class="col-3 col-md-6">
                <h3 class="footer-head">thương hiệu</h3>
                <ul class="menu">
                    @foreach ($brand_product as $brand)
                        <li><a href="{{ URL::to('thuong-hieu-san-pham/' . $brand->id) }}">{{ $brand->brand_name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-3 col-md-6">
                <h3 class="footer-head">danh mục</h3>
                <ul class="menu">
                    @foreach ($cate_product as $cate)
                        <li><a href="{{ URL::to('danh-muc-san-pham/' . $cate->id) }}">{{ $cate->category_name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-3 col-md-6">
                <h3 class="footer-head">Hỗ trợ</h3>
                <ul class="menu">
                    <li><a href="#">about</a></li>
                </ul>
            </div>
            <div class="col-3 col-md-6 col-sm-12">
                <div class="contact">
                    <h3 class="contact-header">
                        GOB BREAKER
                    </h3>
                    <ul class="contact-socials">
                        <li><a href="#">
                                <i class='bx bxl-facebook-circle'></i>
                            </a></li>
                        <li><a href="#">
                                <i class='bx bxl-instagram-alt'></i>
                            </a></li>
                        <li><a href="#">
                                <i class='bx bxl-youtube'></i>
                            </a></li>
                        <li><a href="#">
                                <i class='bx bxl-twitter'></i>
                            </a></li>
                    </ul>
                </div>
                <div class="subscribe">
                    <input type="email" placeholder="Email của bạn">
                    <button>subscribe</button>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
