@extends('admin', ['pageId' => 'addproducts'])

@section('title', 'Thêm sản phẩm')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection

@section('content')

    <div class="addproduct">
        <h3>Thêm sản phẩm</h3>

        <?php
        $message = Session::get('message');
        if ($message) {
            echo '<span class="message">', $message, '</span>';
            Session::put('message', null);
        }
        ?>

        <form action="{{ URL::to('/save-product') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}


            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                    <input name="title" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Tiêu đề sản phẩm - Mã sản phẩm.</div>
                </div>
                <select class="form-select" aria-label="Default select example" name="category_id">
                    <option selected>Danh mục sản phẩm: </option>
                    <option value="0">Nam</option>
                    <option value="1">Nữ</option>
                </select>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mô tả sản phẩm</label>
                    <input name="description" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Giá</label>
                    <input name="price" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Thêm ảnh </label>
                    <input name="image" class="form-control" type="file" id="formFile">
                </div>


                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Nội dung sản phẩm</label>
                    <textarea name="content" class="form-control" id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
            </form>
        </form>
    </div>

@endsection
