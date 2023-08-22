@extends('front.layout.master')

@section('title', 'Trang chủ')


@section('body')
    <!-- Hero section begin  -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="front/img/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <h1>Black Friday</h1>
                            <p>Flash Sale hấp dẫn</p>
                            <a href="#" class="primary-btn">Mua ngay</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="front/img/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <h1>Black Friday</h1>
                            <p>Flash Sale hấp dẫn</p>
                            <a href="#" class="primary-btn">Mua ngay</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section begin  -->



    <!-- Banner section begin  -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-1.jpg" alt="">
                        <div class="inner-text">
                            <h4>Đồ nam</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-2.jpg" alt="">
                        <div class="inner-text">
                            <h4>Đồ nữ</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-3.jpg" alt="">
                        <div class="inner-text">
                            <h4>Đồ trẻ em</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner section end  -->



    <!-- Women Banner section begin  -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="front/img/products/women-large.jpg">
                        <h2>Đồ nữ</h2>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="item active" data-tag="*" data-category="women">Tất cả</li>
                            <li class="item" data-tag=".Clothing" data-category="women">Áo</li>
                            <li class="item" data-tag=".HandBag" data-category="women">Balo</li>
                            <li class="item" data-tag=".Shoes" data-category="women">Giày</li>
                            <li class="item" data-tag=".Accessories" data-category="women">Khăn choàng</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel women">

                        @foreach($womenProducts as $womenProduct)
                            @include('front.components.product-item', ['product' => $womenProduct ])
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner section end  -->




    <!-- Deal of the week section end  -->
    <section class="deal-of-week set-bg spad" data-setbg="front/img/time-bg.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Giảm giá sốc</h2>
                    <div class="product-price">
                        800.000
                        <span>/ Túi xách</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>100</span>
                        <p>ngày</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>giờ</p>
                    </div>
                    <div class="cd-item">
                        <span>30</span>
                        <p>phút</p>
                    </div>
                    <div class="cd-item">
                        <span>45</span>
                        <p>giây</p>
                    </div>
                </div>
                <a href="" class="primary-btn">Mua ngay</a>
            </div>
        </div>
    </section>
    <!-- Deal of the week section end  -->



    <!-- Man Banner section begin  -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="front/img/products/man-large.jpg">
                        <h2>Đồ nam</h2>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="item active" data-tag="*" data-category="men">Tất cả</li>
                            <li class="item" data-tag=".Clothing" data-category="men">Áo</li>
                            <li class="item" data-tag=".HandBag" data-category="men">Balo</li>
                            <li class="item" data-tag=".Shoes" data-category="men">Giày</li>
                            <li class="item" data-tag=".Accessories" data-category="men">Khăn choàng</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel men">

                        @foreach($menProducts as $menProduct)
                            @include('front.components.product-item', ['product' => $menProduct ])
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Man Banner section end  -->


    <!-- Instagram section end  -->
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="front/img/insta-1.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">NCH</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-2.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">NCH</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-3.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">NCH</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-4.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">NCH</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-5.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">NCH</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-6.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">NCH</a></h5>
            </div>
        </div>
    </div>
    <!-- Insrtagram section end  -->



    <!-- Latest Blog section end  -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="front/img/latest-1.jpg" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    25/4/2022
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="">
                                <h4>Phong cách đường phố đẹp nhất tuần lễ Lodon</h4>
                            </a>
                            <p>Phong cách đường phố đẹp nhất tuần lễ Lodon</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="front/img/latest-2.jpg" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    10/6/2022
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    10
                                </div>
                            </div>
                            <a href="">
                                <h4>Thời trang mùa đông đẹp nhất, dễ mặc, phù hợp</h4>
                            </a>
                            <p>Mùa đông nên mặc gì?</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="front/img/latest-3.jpg" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    15/10/2022
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    15
                                </div>
                            </div>
                            <a href="">
                                <h4>Nên mặc gì khi đi tham quan núi tuyết</h4>
                            </a>
                            <p>Nên mặc gì khi đi tham quan núi tuyết</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Miễn phí vận chuyển</h6>
                                <p>cho tất cả đơn hàng trên 1.000.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Giao hàng đúng hạn</h6>
                                <p>trong khoảng 3-4 ngày</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-3.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Thanh toán an toàn</h6>
                                <p>100% thanh toán an toàn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog section end  -->

@endsection