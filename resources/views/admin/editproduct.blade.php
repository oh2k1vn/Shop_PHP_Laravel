@extends('adminPage')

@section('title', 'Sửa sản phẩm')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

    <div class="addproduct">
        <h3>Sửa sản phẩm</h3>

        @foreach ($editproduct as $item)
            <form action="{{ URL::to('update-product/' . $item->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                    <input name="title" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{ $item->title }}">
                    <div id="emailHelp" class="form-text">Tiêu đề sản phẩm - Mã sản phẩm.</div>
                </div>
                <select class="form-select" aria-label="Default select example" name="category_id">
                    <option selected>Danh mục sản phẩm: </option>
                    @foreach ($cate_product as $cate)
                        @if ($cate->id == $item->category_id)
                            <option selected value="{{ $cate->id }}">{{ $cate->category_name }}</option>
                        @else
                            <option value="{{ $cate->id }}">{{ $cate->category_name }}</option>
                        @endif
                    @endforeach

                </select>

                <select class="form-select" aria-label="Default select example" name="brand_id">
                    <option selected>Thương hiệu sản phẩm: </option>
                    @foreach ($brand_product as $brand)
                        @if ($brand->id == $item->brand_id)
                            <option selected value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                        @else
                            <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                        @endif
                    @endforeach

                </select>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mô tả sản phẩm</label>
                    <input name="desc" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{ $item->desc }}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Giá</label>
                    <input name="price" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{ $item->price }}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Khuyến mãi</label>
                    <input name="discount" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{ $item->title }}">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Thêm ảnh </label>
                    <input name="image" class="form-control" type="file" id="formFile" value="{{ $item->image }}">
                    <img src="{{ URL::to('images/' . $item->image) }}" alt="" height="100" width="100"
                        style="object-fit: cover">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Nội dung sản phẩm</label>
                    <textarea name="content" class="form-control" id="exampleFormControlTextarea1"
                        rows="3">{{ $item->content }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
            </form>
        @endforeach

        <a  onclick="return confirm('Bạn có chắc xóa sản phẩm này hay không?')" href="{{ URL::to('delete-product/' . $item->id) }}" type="submit" class="btn btn-primary btn-edit">Xóa Sản Phẩm</a>
    </div>

@endsection
