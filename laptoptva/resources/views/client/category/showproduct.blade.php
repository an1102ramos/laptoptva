@extends('client.index')
@section('title', 'Trang chủ')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('client/styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('client/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet"
          type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('client/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/styles/shop_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/styles/shop_responsive.css') }}">
    <div class="super_container">
        <!-- Home -->
        <div class="home">
            <div class="home_background parallax-window" data-parallax="scroll"
                 data-image-src="{{ asset('client/images/shop_background.jpg') }}"></div>
            <div class="home_overlay"></div>
            <div class="home_content d-flex flex-column align-items-center justify-content-center">
                <h2 class="home_title">{{ $findCategoryById->cat_name }}</h2>
            </div>
        </div>
        <!-- Shop -->
        <div class="shop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <!-- Shop Sidebar -->
                        @include('client.layouts.category')
                    </div>
                    <div class="col-lg-9">
                        <!-- Shop Content -->
                        <div class="shop_content">
                            <div class="shop_bar clearfix">
                                <div class="shop_product_count"><span>{{ count($products) }}</span> Sản phẩm được tìm
                                    thấy
                                </div>
                                <div class="shop_sorting">
                                    <span>Sort by:</span>
                                    <ul>
                                        <li>
                                            <span class="sorting_text">highest rated<i class="fas fa-chevron-down"></i></span>
                                            <ul>
                                                <li class="shop_sorting_button"
                                                    data-isotope-option='{ "sortBy": "name" }'>name
                                                </li>
                                                <li class="shop_sorting_button"
                                                    data-isotope-option='{ "sortBy": "price" }'>price
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_grid">
                                <div class="product_grid_border"></div>
                                <!-- Product Item -->
                                @foreach($products as $product)
                                    <div class="product_item is_new">
                                        <div class="product_border"></div>
                                        <div
                                            class="product_image d-flex flex-column align-items-center justify-content-center">
                                            <a href="{{  route('client.product', $product->prd_id) }}" tabindex="0">
                                                <img src="{{asset('storage/images/' . $product->prd_image) }}" alt=""></a></div>
                                        <div class="product_content">
                                            <div class="product_price">{{ number_format($product->prd_price_discount) }}đ<br>
                                                <span>{{ number_format($product->prd_retail_price) }}</span></div>
                                            <div class="product_name">
                                                <div><a href="{{  route('client.product', $product->prd_id) }}" tabindex="0">
                                                        @if(strlen($product->prd_name) >20)
                                                            {{ substr($product->prd_name, 0, 20) }}...
                                                        @else
                                                            {{ $product->prd_name }}
                                                        @endif
                                                        </a></div>
                                            </div>
                                        </div>
                                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="product_marks">
                                            <li class="product_mark product_discount">-{{ intval((($product->prd_retail_price - $product->prd_price_discount)) /
                                                                                                            $product->prd_retail_price * 100) }}
                                                %
                                            </li>
                                            <li class="product_mark product_new">
                                                @if($product->prd_status == 'new')
                                                    new
                                                @elseif($product->prd_status == 'like_new')
                                                    like new
                                                @elseif($product->prd_status == 'old')
                                                    old
                                                @endif</li>
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Shop Page Navigation -->
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brands -->
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
    <script src="{{ asset('client/plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('client/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('client/plugins/jquery-ui-1.12.1.custom/jquery-ui.js') }}"></script>
    <script src="{{ asset('client/plugins/parallax-js-master/parallax.min.js') }}"></script>
    <script src="{{ asset('client/js/shop_custom.js') }}"></script>
@endsection

