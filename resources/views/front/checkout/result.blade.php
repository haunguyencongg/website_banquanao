@extends('front.layout.master')

@section('title', 'Đặt hàng')

@section('body')




        <!-- Breadcrumb section Begin  -->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text">
                            <a href="./index"><i class="fa fa-home"></i> Trang chủ</a>
                            <a href="./checkout">Thanh toán</a>
                            <span>Đặt hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb section End  -->




        <!-- Section begin  -->
        <section class="checkout-section spad">
            <div class="container">
                <div class="col-lg-12">
                    <h4><center>{{ $notification }}</center></h4>

                    <center><a href="./" class="primary-btn mt-5">Tiếp tục mua hàng</a></center>
                </div>
        </section>
        <!-- Section end  -->


@endsection