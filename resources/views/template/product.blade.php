@extends('home' , ['pageId' => 'product'])

@section('title', 'Danh sách sản phẩm')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection

@section('content')
    <div class="image-container">
        <div class="text">Product</div>
    </div>


    <div class="container">
        <div id="myBtnContainer" class="product_search">
            <button class="btn active" onclick="filterSelection('all')">
                Tất cả
            </button>
            <button class="btn" onclick="filterSelection('Vasity')">Vasity</button>
            <button class="btn" onclick="filterSelection('Jacket')">Jacket</button>
            <button class="btn" onclick="filterSelection('hat')">Mũ</button>
        </div>

        <div class="product_row">

            @foreach ($category as $item)
                <div class="product_row_col-4 {{ $item->category_name }}">
                    <img src="{{ URL::to('asset/product/' . $item->image) }}" alt="">
                    <div class="bottom">
                        <a href="#" class="bottom_title">
                            {{ $item->title }}
                        </a>
                        <div class="bottom_buy">
                            <h4>{{ number_format($item->price) . ' ' . 'VNĐ' }}</h4>
                            <a href="#"><i class='bx bx-cart'></i></a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>


        @endforeach


    </div>
@endsection


@section('js')
    <script>
        filterSelection("all");

        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("product_column");
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
