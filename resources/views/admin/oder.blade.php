@extends('adminPage')

@section('title', 'Đơn hàng')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
   
<div class="oder">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên khách hàng</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Tình trạng đơn</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($oder as $item)
          <tr>
            <td>{{$item -> id}}</td>
            <td>{{$item -> name}}</td>
            <td>{{$item -> phone}}</td>
            <td>
              @if ($item -> status == 'Đang chờ')
                <span class="oder_status-secondary">{{$item -> status}}</span>
              @elseif ($item -> status == 'Xác nhận')
                <span class="oder_status-success">{{$item -> status}}</span>
              @else
                <span class="oder_status-danger">{{$item -> status}}</span>
              @endif
            </td>
            <td>
              <button class="btn btn-outline-info" data-id="model" data-target="#mymodel">Xem chi tiết</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      @include('admin.model')
</div>

@endsection