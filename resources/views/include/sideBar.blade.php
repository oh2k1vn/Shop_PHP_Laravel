<div class="sidebar">
    <img src="{{ asset('images/logo/logo.png') }}" style="width: 50%; border-radius: 20px" alt="">
    <hr class="sidebar_boder">

    <ul class="sidebar_menu" id="navi">
        <li class="menu active"><a href="{{ route('dashboardPage') }}"><i class='bx bxs-dashboard' style='color:#ffffff'  ></i>Dashboard</a>
        </li>
        <li class="menu"><a href="{{ route('addProductPage') }}"><i class='bx bx-store-alt'></i>Thêm sản phẩm</a>
        </li>
        <li class="menu"><a href="{{ route('allProductPage') }}"><i class='bx bx-book-open'></i>Chi tiết sản phẩm</a>
        </li>
        <li class="menu"><a href="{{ route('oderPage') }}"><i class='bx bx-cart-alt'></i>Đơn hàng</a>
        </li>
        <li class="menu"><a href="#"><i class='bx bx-help-circle'></i>Phản hồi</a>
        </li>
    </ul>
    <a href="{{ route('logout') }}" class="sidebar_btn" ><i class='bx bx-log-out'></i><span>Đăng xuất</span></a>
</div>


<script>
   $(document).ready(function(){
  $('ul li a').click(function(){
    $('li a').removeClass("active");
    $(this).addClass("active");
});
});
    </script>