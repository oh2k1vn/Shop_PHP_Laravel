@extends('admin')

@section('title', 'Danh sách sản phẩm')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

@endsection

@section('content')
    <div class="allproducts_table">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Danh mục</th>
                    <th>Giá</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Mô tả sản phẩm</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allproduct as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>
                            <?php
                            if ($item->category_id == 0) {
                                echo 'Nam';
                            } else {
                                echo 'Nữ';
                            }
                            ?>
                        </td>
                        <td>{{ $item->price }}</td>
                        <td><img src="public/asset/product/{{ $item->image }}" class="allproducts_table_image"alt=""></td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary"><a
                                    href="{{ URL::to('edit-product/' . $item->id) }}">Sửa</a></button>
                            <button type="button" class="btn btn-outline-primary"> <a
                                    onclick="return confirm('Bạn có chắc xóa sản phẩm này hay không?')"
                                    href="{{ URL::to('delete-product/' . $item->id) }}">Xóa</a></button>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
@endsection
