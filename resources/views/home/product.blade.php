@extends('homePage')

@section('title', 'sản phẩm')

@section('content')
<!-- products content -->
<div class="bg-main">
    <div class="container">
        <div class="box">
            <div class="breadcumb">
                <a href="{{ route('homePage') }}">Trang chủ</a>
                <span><i class='bx bxs-chevrons-right'></i></span>
                <a href="{{ route('productPage') }}">Tất cả sản phẩm</a>
            </div>
        </div>
        <div class="box">
            <div id="myBtnContainer">
                <button class="btn active" onclick="filterSelection('all')">
                    Tất cả
                </button>
                @foreach ($brand_product as $item)
                <button class="btn" onclick="filterSelection('{{$item->id}}')">{{$item->brand_name}}</button>
                @endforeach

            </div>
            <div class="row">
                @foreach ($products as $item)
                <div class="filterDiv col-3 col-md-6 col-sm-12 {{$item->brand_id  }}">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="{{ asset('images/' . $item->image) }}" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <a href="{{ URL::to('chi-tiet-san-pham/' . $item->id) }}"
                                    class="btn-flat btn-hover btn-shop-now">Mua ngay</a>

                            </div>
                            <div class="product-card-name">
                                {{ $item->title }}
                            </div>
                            <div class="product-card-price">
                                {{-- <span><del>$300</del></span> --}}
                                <span class="curr-price">{{ number_format($item->price) . '.000 ' . 'VNĐ' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- end products content -->
@endsection

@section('js')
<script src="{{ asset('js/product.js') }} "></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
filterSelection("all");

function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("product_item");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
}

function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}

function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}
</script>

@endsection