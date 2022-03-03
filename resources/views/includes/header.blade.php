<div class="header">
    <a href="{{ route('homePage') }}"><img
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/25/Logo_MB_new.png/1200px-Logo_MB_new.png?20191226070646"
            alt="" /></a>
    <div class="header_menu">
        <li class="header_menu_item"><a href="#">Shop<i class='bx bx-chevron-down'></i></a>
            <ul class="header_menu_item_a">
                @foreach ($cate_product as $item)
                    <li class="header_menu_item_a_li"><a href="{{ URL::to('danh-muc-san-pham/'.$item->id) }}">{{ $item->category_name }}</a></li>
                @endforeach
            </ul>
        </li>
        {{-- <li class="header_menu_item"><a href="{{ route('productPage') }}">Sản phẩm mới</a></li> --}}
        <li class="header_menu_item"><a href="#">Liên hệ</a></li>
        <li class="header_menu_item"><a href="{{ route('aboutPage') }}">about</a></li>
    </div>
    <div class="header_block">
        <div class="header_block_search">
            <input type="input" placeholder="Tìm kiếm sản phẩm ...">
            <span class="bottom"></span>
            <span class="right"></span>
            <span class="top"></span>
            <span class="left"></span>
        </div>
        <a href="{{ route('loginPage') }}">
            <i class='bx bxs-user'></i>
        </a>
        <a href="#">
            <i class='bx bxs-cart'></i>
        </a>
    </div>
</div>
