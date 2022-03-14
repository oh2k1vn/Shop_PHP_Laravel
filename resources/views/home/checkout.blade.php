@extends('homePage')

@section('title', 'checkout')

@section('css')

        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

    {{-- @if ($newCart != null)
        <p>OK</p>
    @endif --}}



    <div class="checkout">
        <div class="container">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th></th>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <i class="bx bx-x"></i>
                        </td>
                        <td>
                            <div class="product">
                                <img src="https://technext.github.io/minishop/images/product-3.jpg" width="200px" alt="" />
                                <div class="product_title">
                                    <h4>NIKE FREE RN 2019 ID</h4>
                                    <p>
                                        Far far away, behind the word mountains, far from the
                                        countries
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td>$4.90</td>
                        <td>
                            <input type="number" name="" id="" value="1" />
                        </td>
                        <td>$4.90</td>
                    </tr>
                    <tr>
                        <td>
                            <i class="bx bx-x"></i>
                        </td>
                        <td class="product">
                            <img src="https://technext.github.io/minishop/images/product-3.jpg" width="200px" alt="" />
                            <div class="product_title">
                                <h4>NIKE FREE RN 2019 ID</h4>
                                <p>
                                    Far far away, behind the word mountains, far from the
                                    countries
                                </p>
                            </div>
                        </td>
                        <td>$4.90</td>
                        <td>
                            <input type="number" name="" id="" />
                        </td>
                        <td>$4.90</td>
                    </tr>
                </tbody>
            </table>

            <section class="checkout_total">
                <h3>CART TOTALS</h3>

                <p>Subtotal <span>$20.60</span></p>
                <p>Subtotal <span>$20.60</span></p>
                <p>Subtotal <span>$20.60</span></p>
                <p>Subtotal <span>$20.60</span></p>

                <button>Thanh toán</button>
            </section>
        </div>
    </div>
@endsection

@section('js')

@endsection
