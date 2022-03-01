@extends('admin', ['pageId' => 'products'])

@section('title', 'Danh mục sản phẩm')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection

@section('content')

<div class="productAmin">
    <a href="{{ route('addProductPage')}}">Thêm sản phẩm</a>
    <a href="{{ route('allProductPage')}}">Xem sản phẩm</a>
</div>


@endsection