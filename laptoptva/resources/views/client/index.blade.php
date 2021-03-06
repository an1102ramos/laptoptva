<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('client/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/plugins/slick-1.8.0/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/styles/responsive.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="icon" href="{{ asset('client/images/'.  $contact->config_logo ) }}">

</head>

<body>

<div class="super_container">

    <!-- Header -->
    @section('header')
        <header class="header">

            <!-- Top Bar -->
            <!-- Top Bar -->

            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{ asset('client/images/phone.png') }}" alt=""></div>0{{ $contact->config_phone }}</div>
                            <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{ asset('client/images/mail.png') }}" alt=""></div><a href="mailto:{{ $contact->config_contact }}">{{ $contact->config_contact }}</a></div>
                            <div class="top_bar_content ml-auto">
                                <div class="top_bar_menu">
                                    <ul class="standard_dropdown top_bar_dropdown">
                                        <li>
                                            <a href="#">Ti???ng Vi???t<i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="#">Ti???ng Anh</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Header Main -->

            <div class="header_main">
                <div class="container">
                    <div class="row">

                        <!-- Logo -->
                        <div class="col-lg-2 col-sm-3 col-3 order-1">
                            <div class="logo_container">
                                <div class="logo"><a href="{{  route('client.home') }}">LAPTOP TVA</a></div>
                            </div>
                        </div>

                        <!-- Search -->
                        <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search">
                                <div class="header_search_content">
                                    <div     class="header_search_form_container">
                                        <form method="post" action="{{ route('client.search') }}" class="header_search_form clearfix">
                                            @csrf
                                            <input type="search" name="keyword" required="required" class="header_search_input" placeholder="T??m ki???m s???n ph???m...">
                                            <div class="custom_dropdown">
                                                <div class="custom_dropdown_list">
                                                    <span class="custom_dropdown_placeholder clc">All Categories</span>
                                                    <i class="fas fa-chevron-down"></i>
                                                    <ul class="custom_list clc">
                                                        @foreach($categories as $category)
                                                            <li><a href="{{ route('client.category', $category->cat_id) }}">{{ $category->cat_name }}</a></li>
                                                        @endforeach

                                                    </ul>
                                                </div>
                                            </div>
                                            <button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{ asset('client/images/search.png') }}" alt=""></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Wishlist -->
                        <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                            <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">


                                <!-- Cart -->
                                <div class="cart">
                                    <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                        <div class="cart_icon">
                                            <a href="{{ route('cart') }}">
                                            <img src="{{ asset('client/images/cart.png') }}" alt="">
                                            </a>
                                            <div class="cart_count"><span>{{ session()->has('cart')? count(session()->get('cart')):0 }}</span></div>
                                        </div>
                                        <div class="cart_content">
                                            <div class="cart_text"><a href="{{ route('cart') }}">Gi??? h??ng</a></div>
                                            <div class="cart_price">{{ number_format(session()->get('total')) }}??</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            <nav class="main_nav">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="main_nav_content d-flex flex-row">

                                <!-- Categories Menu -->

                                <div class="cat_menu_container">
                                    <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                        <div class="cat_burger"><span></span><span></span><span></span></div>
                                        <div class="cat_menu_text">categories</div>
                                    </div>

                                    <ul class="cat_menu">
                                        @foreach($categories as $category)
                                        <li><a href="{{ route('client.category', $category->cat_id) }}">{{ $category->cat_name }} <i class="fas fa-chevron-right"></i></a></li>
                                        @endforeach
                                    </ul>
                                </div>

                                <!-- Main Nav Menu -->

                                <div class="main_nav_menu ml-auto">
                                    <ul class="standard_dropdown main_nav_dropdown">
                                        <li><a href="{{ route('client.home') }}">Home<i class="fas fa-chevron-down"></i></a></li>
                                        <li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
                                        <li><a href="{{ route('client.contact') }}">Contact<i class="fas fa-chevron-down"></i></a></li>
                                    </ul>
                                </div>

                                <!-- Menu Trigger -->

                                <div class="menu_trigger_container ml-auto">
                                    <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                        <div class="menu_burger">
                                            <div class="menu_trigger_text">menu</div>
                                            <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    @show

    @yield('content')

<!-- Footer -->
    <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="brands_slider_container">

                        <!-- Brands Slider -->

                        <div class="owl-carousel owl-theme brands_slider">

                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('client/images/brands_1.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('client/images/brands_2.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('client/images/brands_3.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('client/images/brands_4.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('client/images/brands_5.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('client/images/brands_6.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('client/images/brands_7.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('client/images/brands_8.jpg') }}" alt=""></div></div>

                        </div>

                        <!-- Brands Slider Navigation -->
                        <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('footer')
        <footer class="footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 footer_col">
                        <div class="footer_column footer_contact">
                            <div class="logo_container">
                                <div class="logo"><a href="#">LAPTOP TVA</a></div>
                            </div>
                            <div class="footer_title">Li??n h???</div>
                            <div class="footer_phone">0{{ $contact->config_phone }}</div>
                            <div class="footer_contact_text">
                                <p>{{ $contact->config_contact }}</p>
                                <p>{{ $contact->config_address }}</p>
                            </div>
                            <div class="footer_social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                                    <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 offset-lg-2">
                        <div class="footer_column">
                            <div class="footer_title">Find it Fast</div>
                            <ul class="footer_list">
                                @foreach($categories as $category)
                                    <li><a href="{{ route('client.category', $category->cat_id) }}">{{ $category->cat_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>


                    <div class="col-lg-2">
                        <div class="footer_column">
                            <div class="footer_title">Customer Care</div>
                            <ul class="footer_list">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Order Tracking</a></li>
                                <li><a href="#">Wish List</a></li>
                                <li><a href="#">Customer Services</a></li>
                                <li><a href="#">Returns / Exchange</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Product Support</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
    @show

<!-- Copyright -->

    @show
</div>
<!-- Brands -->


@section('copyright')
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                        <div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="" target="_blank">Tran Van An</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="logos ml-sm-auto">
                            <ul class="logos_list">
                                <li><a href="#"><img src="{{ asset('client/images/logos_1.png') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('client/images/logos_2.png') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('client/images/logos_3.png') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('client/images/logos_4.png') }}" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('client/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('client/styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('client/styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('client/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('client/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('client/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('client/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('client/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('client/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('client/plugins/slick-1.8.0/slick.js') }}"></script>
<script src="{{ asset('client/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('client/js/custom.js') }}"></script>


</body>

</html>
