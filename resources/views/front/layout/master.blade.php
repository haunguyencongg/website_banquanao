<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="{{ asset('/') }}">

    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Nguyễn Công Hậu</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link href="http://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="front/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="front/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/style.css" type="text/css">
</head>

<body>
    <!-- Start coding here -->

    <!-- page preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section begin  -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class="fa fa-envelope"></i>
                        haunc.21it@vku.udn.vn
                    </div>
                    <div class="phone-service">
                        <i class="fa fa-phone"></i>
                        0386 823 982
                    </div>
                </div>
    
                <div class="ht-right">
                    <a href="login.html" class="login-panel"><i class="fa fa-user"></i>Đăng nhập</a>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value="yt" data-image="front/img/flag-3.gif" data-imagecss="flag yt" data-title="Vietnam">Vietnam</option>
                            <option value="yt" data-image="front/img/flag-1.jpg" data-imagecss="flag yt" data-title="English">English</option>
                            <option value="yu" data-image="front/img/flag-2.jpg" data-imagecss="flag yu" data-title="Bangladesh">German</option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="https://www.facebook.com/haunguyencongg"><i class="ti-facebook"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.html">
                                <img src="front/img/logo.png" height="25" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <form action="shop">
                            <div class="advanced-search">
                                <button type="button" class="category-btn">Tất cả kết quả</button>
                                <div class="input-group">
                                    <input name="search" type="text" value="{{ request('search') }}" placeholder="Bạn muốn tìm gì?">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-3 text-right">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>l</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="./cart">
                                    <i class="icon_bag_alt"></i>
                                    <span>{{ Cart::count() }}</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                @foreach (Cart::content() as $cart)
                                                    
                                                <tr>
                                                        <td class="si-pic"><img style="height: 70px" src="front/img/products/{{ $cart -> options -> images[0] -> path }}"></td>
                                                        <td class="si-text">
                                                            <div class="product-selected">
                                                                <p>${{ number_format($cart -> price, 2) }} x {{ $cart -> qty }}</p>
                                                                <h6>{{ $cart -> name }}</h6>
                                                            </div>
                                                        </td>
                                                        <td class="si-close">
                                                            <i onclick="window.location='./cart/delete/{{ $cart -> rowId }}'" class="ti-close"></i>
                                                        </td>
                                                    </tr>
                                                    
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>Tổng:</span>
                                        <h5>${{ Cart::total() }}</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="./cart" class="primary-btn view-card">Xem giỏ hàng</a>
                                        <a href="./checkout" class="primary-btn checkout-btn">Thanh toán</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">${{ Cart::total() }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Tất cả</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Đồ nữ</a></li>
                            <li><a href="#">Đồ nam</a></li>
                            <li><a href="#">Đồ lót</a></li>
                            <li><a href="#">Đồ trẻ em</a></li>
                            <li><a href="#">Brand codeleanon</a></li>
                            <li><a href="#">Phụ kiện/Giày</a></li>
                            <li><a href="#">Luxury Brands</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="{{ (request() -> segment(1) == '') ? 'active' : '' }}"><a href="./">Trang chủ</a></li>
                        <li class="{{ (request() -> segment(1) == 'shop') ? 'active' : '' }}"><a href="./shop">Cửa hàng</a></li>
                        <li><a href="">Sưu tập</a>
                            <ul class="dropdown">
                                <li><a href="">Đồ nam</a></li>
                                <li><a href="">Đồ nữ</a></li>
                                <li><a href="">Đồ trẻ em</a></li>
                            </ul>
                        </li>
                        <li class="{{ (request() -> segment(1) == 'blog') ? 'active' : '' }}"><a href="./blog">Blog</a></li>
                        <li class="{{ (request() -> segment(1) == 'contact') ? 'active' : '' }}"><a href="./contact">Liên hệ</a></li>
                        <li><a href="">Trang</a>
                            <ul class="dropdown">
                                <li><a href="blog-details.html">Thông tin</a></li>
                                <li><a href="shopping-cart.html">Giỏ hàng</a></li>
                                <li><a href="check-out.html">Phương thúc thanh toán</a></li>
                                <li><a href="faq.html">Câu hỏi</a></li>
                                <li><a href="register.html">Đăng kí</a></li>
                                <li><a href="login.html">Đăng nhập</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header section End  -->


    {{-- Body here --}}
    @yield('body')



    <!-- Partner logo section begin  -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-1.png">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-2.png">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-3.png">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-4.png">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-5.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner logo section end  -->

    
    <!-- Footer section Begin  -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="front/img/footer-logo.png" height="25" alt="">
                            </a>
                        </div>
                        <ul>
                            <li>470 Trần Đại Nghĩa, Đà Nẵng</li>
                            <li>Điện thoại: 0386 823 982</li>
                            <li>Email: haunc.21it@vku.udn.vn</li>
                        </ul>
                        <div class="footer-social">
                            <a href="https://www.facebook.com/haunguyencongg"><i class="fa fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Thông tin</h5>
                        <ul>
                            <li><a href="">Về chúng tôi</a></li>
                            <li><a href="">Thanh toán</a></li>
                            <li><a href="">Liên hệ</a></li>
                            <li><a href="">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>Tài khoản</h5>
                        <ul>
                            <li><a href="">Tài khoản</a></li>
                            <li><a href="">Liên hệ</a></li>
                            <li><a href="">Giỏ hàng</a></li>
                            <li><a href="">Cửa hàng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Tham gia bản tin của chúng tôi</h5>
                        <p>Nhận thông tin cập nhật qua Email về cửa hàng mới nhất của chúng tôi và các ưu đãi đặc biệt</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Nhập email của bạn">
                            <button type="button">Đăng kí</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            Copyright <script>document.write(new Date().getFullYear());</script>
                        </div>
                        <div class="payment-pic">
                            <img src="front/img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer section End  -->


    <!-- Js Plugins -->
    <script src="front/js/jquery-3.3.1.min.js"></script>
    <script src="front/js/bootstrap.min.js"></script>
    <script src="front/js/jquery-ui.min.js"></script>
    <script src="front/js/jquery.countdown.min.js"></script>
    <script src="front/js/jquery.nice-select.min.js"></script>
    <script src="front/js/jquery.zoom.min.js"></script>
    <script src="front/js/jquery.dd.min.js"></script>
    <script src="front/js/jquery.slicknav.js"></script>
    <script src="front/js/owl.carousel.min.js"></script>
    <script src="front/js/owlcarousel2-filter.min.js"></script>
    <script src="front/js/main.js"></script>
</body>

</html>
