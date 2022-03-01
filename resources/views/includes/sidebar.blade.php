<div class="sidebar">
    <img src="{{ asset('asset/logo.png') }}" alt="">
    <hr class="sidebar_boder">

    <ul class="sidebar_menu">
        <li class="active"><a href="{{ route('showdashboardPage') }}"><i class='bx bxs-dashboard' style='color:#ffffff'  ></i>Dashboard</a>
        </li>
        <li><a href="{{ route('addProductPage')}}"><i class='bx bx-store-alt'></i>Thêm sản phẩm</a>
        </li>
        <li><a href="{{ route('allProductPage')}}"><i class='bx bx-book-open'></i>Chi tiết sản phẩm</a>
        </li>
        <li><a href="{{ route('productPage') }}"><i class='bx bx-cart-alt'></i>Đơn hàng</a>
        </li>
        <li><a href="#"><i class='bx bx-help-circle'></i>Phản hồi</a>
        </li>
    </ul>
    <a href="{{ URL::to('/logout') }}" class="sidebar_btn"><i class='bx bx-log-out'></i><span>Đăng xuất</span></a>
</div>
