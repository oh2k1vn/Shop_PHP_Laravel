@extends('homePage')

@section('title', 'checkout')

@section('css')

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

    <div class="checkout">
        <div class="container">
            <?php
            $content = Cart::content();
            ?>


            <table class="table">
                <thead class="table_th">
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody class="table_td">
                    @foreach ($content as $item)
                        <tr>

                            <td class="product">
                                <img src="{{ asset('images/' . $item->options->image) }}" width="200px" alt="" />
                                <div class="product_title">
                                    <h4>{{ $item->name }}</h4>
                                    {{-- <p>
                                        Far far away, behind the word mountains, far from the
                                        countries
                                    </p> --}}
                                </div>
                            </td>
                            <td>{{ number_format($item->price) . '.000 ' . 'VNĐ' }}</td>
                            <td>
                                <form action="{{URL::to('update-cart')}}" method="post">
                                    {{ csrf_field() }}
                                    <input type="text" name="qty" id="" value="{{ $item->qty }}" />
                                    <input type="hidden" name="rowId" id="" value="{{ $item->rowId }}" />
                                    <input class="btn" type="submit" value="Cập nhật" name="update_qty" />
                                </form>
                            </td>
                            <td>
                                <?php
                                $subtotal = $item->price * $item->qty;
                                echo number_format($subtotal) . '.000 ' . 'VNĐ';
                                ?>
                            </td>
                            <td>
                                <a href="{{ URL::to('delete-cart/' . $item->rowId) }}">

                                    <i class='bx bx-trash'></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
            <form action="{{URL::to("/save-checkout")}}" method="post">
            <div class="total">
                <div class="total_item w-50">
                  <h3>Thông tin người dùng</h3>
                    {{ csrf_field() }}
                    <label >Họ và tên</label>
                    <input type="text" name="name">
                    <label >Số điện thoại</label>
                    <input type="text" name="phone">
                    <label >Địa chỉ</label>
                    <input type="text" name="address">
                    <label >Ghi chú</label>
                    <input value="Đang chờ" type="hidden" name="status">
                    <textarea name="note" id="" cols="20" rows="5"></textarea>  
                </div>
                <div class="total_item w-33">
                  <h3>Thông tin thanh toán</h3>
                  <ul>
                    <li>Tổng tiền <span>{{ Cart::priceTotal(0,',','.') .'.000'. ' VNĐ' }}</span></li>
                    <li>Thuế <span>{{ Cart::tax(0,',','.') .'.000'. ' VNĐ' }}</span></li>
                    <li>Phí vận chuyển <span>Free</span></li>
                    <li class="li">Tổng giá <span>{{ Cart::total(0,',','.') .'.000'. ' VNĐ' }}</span></li>
                  </ul>
                  <button type="submit">Thanh toán</button>
                </div>
              </div>
        </div>
    </form>

    </div>
@endsection

@section('js')

@endsection
