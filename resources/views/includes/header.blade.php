<div class="header">
    <a href="{{ route('homePage') }}"><img
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/25/Logo_MB_new.png/1200px-Logo_MB_new.png?20191226070646"
            alt="" /></a>
    <div class="header_menu">
        <li class="header_menu_item"><a href="#">Shop<i class='bx bx-chevron-down'></i></a>
            <ul class="header_menu_item_a">
                <li class="header_menu_item_a_li"><a href="#">Áo</a></li>
                <li class="header_menu_item_a_li"><a href="#">Quần</a></a></li>
                <li class="header_menu_item_a_li"><a href="#">Áo khoác</a></li>
                <li class="header_menu_item_a_li"><a href="#">Bao lô</a></li>
                <li class="header_menu_item_a_li"><a href="#">Linh kiện</a></li>
            </ul>
        </li>
        <li class="header_menu_item"><a href="#">Sale</a></li>
        <li class="header_menu_item"><a href="#">New</a></li>
        <li class="header_menu_item"><a href="#">Contact</a></li>
        <li class="header_menu_item"><a href="#">about</a></li>
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
