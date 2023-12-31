
@extends('front.layout.master')

@section('title', 'Giỏ hàng')

@section('body')



        <!-- Breadcrumb section Begin  -->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text">
                            <a href="index.html"><i class="fa fa-home"></i> Trang chủ</a>
                            <a href="shop.html">Cửa hàng</a>
                            <span>Giỏ hàng</span>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Breadcrumb section End  -->




        <!-- Shopping cart section begin -->
        <div class="shopping-cart spad">
            <div class="container">
                <div class="row">

                    @if(Cart::count() > 0)
                        <div class="col-lg-12">
                            <div class="cart-table">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hình ảnh</th>
                                            <th class="p-name">Tên sản phẩm</th>
                                            <th>Giá</th>
                                            <th>Số lượng</th>
                                            <th>Tổng</th>
                                            <th><i onclick="confirm('Bạn có chắc muốn xóa tất cả sản phẩm khỏi giỏ hàng không?') === true ? window.location='./cart/destroy' : ''" style="cursor: pointer;" class="ti-close"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($carts as $cart)
                                            <tr>
                                                <td class="cart-pic first-row"><img style="height: 170px" src="front/img/products/{{ $cart -> options -> images[0] -> path }}" alt=""></td>
                                                <td class="cart-title first-row">
                                                    <h5>{{ $cart -> name }}</h5>
                                                </td>
                                                <td class="p-price first-row">${{ number_format($cart -> price, 2) }}</td>
                                                <td class="qua-col first-row">
                                                    <div class="quantity">
                                                        <div class="pro-qty">
                                                            <input type="text" value="{{ $cart -> qty }}">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="total-price first-row">${{ number_format($cart -> price * $cart -> qty, 2) }}</td>
                                                <td class="close-td first-row"><i onclick="window.location='./cart/delete/{{ $cart -> rowId }}'" class="ti-close"></i></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="cart-buttons">
                                        <a href="#" class="primary-btn continue-shop">Tiếp tục mua hàng</a>
                                        <a href="#" class="primary-btn up-cart">Cập nhật giỏ hàng</a>
                                    </div>
                                    <div class="discount-coupon">
                                        <h6>Mã giảm giá</h6>
                                        <form action="#" class="coupon-form">
                                            <input type="text" placeholder="Nhập mã giảm giá">
                                            <button type="submit" class="site-btn coupon-btn">Sử dụng</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-4 offset-lg-4">
                                    <div class="proceed-checkout">
                                        <ul>
                                            <li class="subtotal">Tổng tiền <span>${{ $total }}</span></li>
                                            <li class="cart-total">Tổng <span>${{ $subtotal }}</span></li>
                                        </ul>
                                        <a href="./checkout" class="proceed-btn">TIẾN HÀNH THANH TOÁN</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-12">
                            <h4><center>Giỏ hàng trống.</center></h4>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- Shopping cart section begin -->

@endsection

    
       