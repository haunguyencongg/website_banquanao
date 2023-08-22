@extends('front.layout.master')

@section('title', 'Thanh toán')

@section('body')




        <!-- Breadcrumb section Begin  -->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text">
                            <a href="index.html"><i class="fa fa-home"></i> Trang chủ</a>
                            <a href="shop.html">Cửa hàng</a>
                            <span>Thanh toán</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb section End  -->




        <!-- Shopping cart section begin  -->
        <section class="checkout-section spad">
            <div class="container">
                <form action="" method="post" class="checkout-form">
                    @csrf
                    <div class="row">

                        @if(Cart::count() > 0)
                            <div class="col-lg-6">
                                <div class="checkout-content">
                                    <a href="login.html" class="content-btn">Nhấn vào đây để đăng nhập</a>
                                </div>
                                <h4>Chi tiết thanh toán</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="fir">Họ <span>*</span></label>
                                        <input type="text" id="fir" name="first_name">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="last">Tên <span>*</span></label>
                                        <input type="text" id="last" name="last_name">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="cun">Quốc gia <span>*</span></label>
                                        <input type="text" id="cun" name="country">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="street">Địa chỉ <span>*</span></label>
                                        <input type="text" id="street" name="street_address" class="street-first">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="zip">Mã bưu điện / Zip (Lựa chọn)</label>
                                        <input type="text" id="zip" name="postcode_zip">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="towm">Thị trấn / Thành phố <span>*</span></label>
                                        <input type="text" id="town" name="town_city">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="email">Email <span>*</span></label>
                                        <input type="text" id="email" name="email">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="phone">Số điện thoại <span>*</span></label>
                                        <input type="text" id="phone" name="phone">
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="create-item">
                                            <label for="acc-create">
                                                Tạo tài khoản?
                                                <input type="checkbox" id="acc-create">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout-content">
                                    <input type="text" placeholder="Nhập mã giảm giá">
                                </div>
                                <div class="place-order">
                                    <h4>Đơn hàng của bạn</h4>
                                    <div class="order-total">
                                        <ul class="order-table">
                                            <li>Sản phẩm <span>Tổng</span></li>

                                            @foreach ($carts as $cart)
                                                <li class="fw-normal">{{ $cart -> name }} x {{ $cart -> qty }} <span>${{ $cart -> price * $cart -> qty }}</span></li>
                                            @endforeach
                                            
                                            <li class="fw-normal">Tổng <span>${{ $subtotal }}</span></li>
                                            <li class="total-price">Tổng đơn hàng <span>${{ $total }}</span></li>
                                        </ul>
                                        <div class="payment-check">
                                            <div class="pc-item">
                                                <label for="pc-check">
                                                    Thanh toán khi nhận hàng
                                                    <input type="radio" id="pc-check" name="payment_type" value="pay_later" checked>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pc-item">
                                                <label for="pc-paypal">
                                                    Thẻ tín dụng
                                                    <input type="radio" id="pc-paypal" name="payment_type" value="online_payment">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="order-btn">
                                            <button type="submit" class="site-btn place-order">ĐẶT HÀNG</button>
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
                </form>
            </div>
        </section>
        <!-- Shopping cart section end  -->


@endsection
    
