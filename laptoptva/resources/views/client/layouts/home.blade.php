@extends('client.index')

@section('title', 'Trang chủ')
@section('content')
    <!-- Banner -->

    <div class="banner_1">
        <div class="banner_background" style="background-image:url('{{ asset('client/images/banner_background.jpg') }}');height: 119%"></div>
        <div class="container fill_height">
            <div class="row fill_height">
                <div class="banner_product_image"><img src="{{ asset('client/images/'.  $contact->config_banner ) }}" alt="" style="height: 377px;width: 880px;"></div>
                <div class="col-lg-5 offset-lg-4 fill_height">
                    <div class="banner_content" >

                        <h1 class="banner_text">Laptop TVA</h1>
{{--                        <div class="banner_price"><span></span>cam kết:</div>--}}
                        <br><i class="bi bi-shield-fill-check" style="color:green"></i> Uy tín
                        <br><i class="bi bi-shield-fill-check" style="color:green"></i> Chính hãng
                        <br><i class="bi bi-shield-fill-check" style="color:green"></i> Chu đáo
                        <br><i class="bi bi-shield-fill-check" style="color:green"></i> Bảo hành
                        <br><i class="bi bi-shield-fill-check" style="color:green"></i> Giá tốt<br><br><br>

{{--                        <div class="banner_product_name">Dịch vụ</div>--}}

                        <div class="button banner_button"><a href="#">Shop Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Characteristics -->

    <div class="characteristics">
        <div class="container">
            <div class="row">

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('client/images/char_1.png') }}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Miễn phí giao hàng</div>
                            <div class="char_subtitle">an toàn</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('client/images/char_2.png') }}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Chính sách đổi trả</div>
                            <div class="char_subtitle">thoải mái</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('client/images/char_3.png') }}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Tiết kiệm</div>
                            <div class="char_subtitle">ưu đãi</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('client/images/char_4.png') }}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Chính hãng</div>
                            <div class="char_subtitle">nhập khẩu</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deals of the week -->

    <div class="deals_featured">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">

                    <!-- Deals -->

                    <div class="deals">
                        <div class="deals_title">Hot nhất trong tuần</div>
                        <div class="deals_slider_container">

                            <!-- Deals Slider -->
                            <div class="owl-carousel owl-theme deals_slider">

                                <!-- Deals Item -->
                                @for($prd = 0; $prd < 3; $prd++)
                                <div class="owl-item deals_item">
                                    <a href="{{  route('client.product', $mostViewProducts->get($prd)->prd_id) }}" class="deals_item_name">
                                    <div class="deals_image"><img src="{{asset('storage/images/' . $mostViewProducts->get($prd)->prd_image) }}" alt=""></div>
                                    </a>
                                    <div class="deals_content">
                                        <div class="deals_info_line d-flex flex-row justify-content-start">
                                            <div class="deals_item_category"><a href="{{ route('client.category', $mostViewProducts->get($prd)->category->cat_id) }}">{{ $mostViewProducts->get($prd)->category->cat_name }}</a></div>
                                            <div class="deals_item_price_a ml-auto">{{ number_format($mostViewProducts->get($prd)->prd_retail_price) }}đ</div>
                                        </div>
                                        <div class="deals_info_line d-flex flex-row justify-content-start">
                                            <a href="{{  route('client.product', $mostViewProducts->get($prd)->prd_id) }}" class="deals_item_name">{{ $mostViewProducts->get($prd)->prd_name }}</a>
                                            <div class="deals_item_price ml-auto">{{ number_format($mostViewProducts->get($prd)->prd_price_discount) }}đ</div>
                                        </div>
                                        <div class="available">
                                            <div class="available_line d-flex flex-row justify-content-start">
                                                <div class="available_title">Already sold: <span>{{ $mostViewProducts->get($prd)->prd_sell_quantity }}</span></div>
                                                <div class="sold_title ml-auto">Available: <span>{{ $mostViewProducts->get($prd)->prd_instock }}</span></div>
                                            </div>
                                            <div class="available_bar"><span style="width:{{ ($mostViewProducts->get($prd)->prd_sell_quantity/$mostViewProducts->get($prd)->prd_instock)*100 }}%"></span></div>
                                        </div>
                                        <div class="button banner_button"><a href="{{route('cart', ['id'=>$mostViewProducts->get($prd)->prd_id])}}">Mua ngay</a></div>
                                        <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                            <div class="deals_timer_title_container">
                                                <div class="deals_timer_title">Nhanh tay</div>
                                                <div class="deals_timer_subtitle">Thời gian còn lại:</div>
                                            </div>
                                            <div class="deals_timer_content ml-auto">
                                                <div class="deals_timer_box clearfix" data-target-time="">
                                                    <div class="deals_timer_unit">
                                                        <div id="deals_timer1_hr" class="deals_timer_hr"></div>
                                                        <span>giờ</span>
                                                    </div>
                                                    <div class="deals_timer_unit">
                                                        <div id="deals_timer1_min" class="deals_timer_min"></div>
                                                        <span>phút</span>
                                                    </div>
                                                    <div class="deals_timer_unit">
                                                        <div id="deals_timer1_sec" class="deals_timer_sec"></div>
                                                        <span>giây</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endfor
                            </div>

                        </div>

                        <div class="deals_slider_nav_container">
                            <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
                            <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
                        </div>
                    </div>

                    <!-- Featured -->
                    <div class="featured">
                        <div class="tabbed_container">
                            <div class="tabs">
                                <ul class="clearfix">
                                    <li class="active">Đặc biệt</li>
                                    <li>Đang Sale</li>
                                </ul>
                                <div class="tabs_line"><span></span></div>
                            </div>

                            <!-- Product Panel -->
                            <div class="product_panel panel active">
                                <div class="featured_slider slider">

                                    <!-- Slider Item -->
                                    @for($prd = 3; $prd < count($mostViewProducts); $prd++)
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <a href="{{  route('client.product', $mostViewProducts->get($prd)->prd_id) }}">
                                                <img src="{{asset('storage/images/' . $mostViewProducts->get($prd)->prd_image) }}" alt="" style="max-width: 83%;">
                                                </a>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_price discount">{{ number_format($mostViewProducts->get($prd)->prd_price_discount) }}đ<br><span>{{ number_format($mostViewProducts->get($prd)->prd_retail_price) }}đ</span></div>
                                                <div class="product_name"><div><a href="{{  route('client.product', $mostViewProducts->get($prd)->prd_id) }}">
                                                            @if(strlen($mostViewProducts->get($prd)->prd_name) >20)
                                                                {{ substr($mostViewProducts->get($prd)->prd_name, 0, 20) }}...
                                                            @else
                                                                {{ $mostViewProducts->get($prd)->prd_name }}
                                                            @endif
                                                           </a></div></div>
                                                <div class="product_extras">
                                                    <a class="btn btn-primary" href="{{route('cart', ['id'=>$mostViewProducts->get($prd)->prd_id])}}">Thêm vào giỏ hàng</a>
                                                    <a class="btn btn-primary"  onclick="AddCart({{ $mostViewProducts->get($prd)->prd_id }})" href="javascript:">Thêm vào giỏ hàng ajax</a>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-{{ intval((($mostViewProducts->get($prd)->prd_retail_price - $mostViewProducts->get($prd)->prd_price_discount)) /
                                                                                                            $mostViewProducts->get($prd)->prd_retail_price * 100) }}%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>
                                        @endfor

                                </div>
                                <div class="featured_slider_dots_cover"></div>
                            </div>

                            <!-- Product Panel -->

                            <div class="product_panel panel">
                                <div class="featured_slider slider">

                                    <!-- Slider Item -->
                                    @for($prdOnSale = 0;  $prdOnSale < count($onSaleProducts); $prdOnSale ++)
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <a href="{{  route('client.product', $onSaleProducts->get($prdOnSale)->prd_id) }}">
                                                <img src="{{asset('storage/images/' . $onSaleProducts->get($prdOnSale)->prd_image) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_price discount">{{ number_format($onSaleProducts->get($prdOnSale)->prd_price_discount) }}<span>{{ number_format($onSaleProducts->get($prdOnSale)->prd_retail_price) }}</span></div>
                                                <div class="product_name"><div><a href="{{  route('client.product', $onSaleProducts->get($prdOnSale)->prd_id) }}">
                                                            @if(strlen($onSaleProducts->get($prdOnSale)->prd_name) >20)
                                                                {{ substr($onSaleProducts->get($prdOnSale)->prd_name, 0, 20) }}...
                                                            @else
                                                                {{ $onSaleProducts->get($prdOnSale)->prd_name }}
                                                            @endif
                                                            </a></div></div>
                                                <div class="product_extras">
                                                    <a class="btn btn-primary" href="{{route('cart', ['id'=>$onSaleProducts->get($prdOnSale)->prd_id])}}">Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-{{ intval((($onSaleProducts->get($prdOnSale)->prd_retail_price - $onSaleProducts->get($prdOnSale)->prd_price_discount)) /
                                                                                                            $onSaleProducts->get($prdOnSale)->prd_retail_price * 100) }}%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>
                                        @endfor

                                </div>
                                <div class="featured_slider_dots_cover"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Popular Categories -->

    <div class="popular_categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="popular_categories_content">
                        <div class="popular_categories_title">Danh mục</div>
                        <div class="popular_categories_slider_nav">
                            <div class="popular_categories_prev popular_categories_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                            <div class="popular_categories_next popular_categories_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                        </div>

                    </div>
                </div>

                <!-- Popular Categories Slider -->

                <div class="col-lg-9">
                    <div class="popular_categories_slider_container">
                        <div class="owl-carousel owl-theme popular_categories_slider">

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="{{ asset('client/images/popular_1.png') }}" alt=""></div>
                                    <div class="popular_category_text">Máy tính bảng</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="{{ asset('client/images/popular_2.png') }}" alt=""></div>
                                    <div class="popular_category_text">Laptop</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="{{ asset('client/images/popular_3.png') }}" alt=""></div>
                                    <a  href="" class="popular_category_text">Phụ kiện</a>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="{{ asset('client/images/popular_4.png') }}" alt=""></div>
                                    <div class="popular_category_text">Laptop Gaming</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="{{ asset('client/images/popular_5.png') }}" alt=""></div>
                                    <div class="popular_category_text">Tai nghe</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner -->

    <div class="banner_2">
        <div class="banner_2_background" style="background-image:url({{ asset('client/images/banner_2_background.jpg') }})"></div>
        <div class="banner_2_container">
            <div class="banner_2_dots"></div>
            <!-- Banner 2 Slider -->

            <div class="owl-carousel owl-theme banner_2_slider">

                <!-- Banner 2 Slider Item -->
                @for($prd_mac = 0; $prd_mac < count($macbooks); $prd_mac++)
                <div class="owl-item">
                    <div class="banner_2_item">
                        <div class="container fill_height">
                            <div class="row fill_height">
                                <div class="col-lg-4 col-md-6 fill_height">
                                    <div class="banner_2_content">
                                        <div class="banner_2_category">{{ $macbooks->get($prd_mac)->category->cat_name }}</div>
                                        <div class="banner_2_title"><div><a href="{{  route('client.product', $macbooks->get($prd_mac)->prd_id) }}">{{ $macbooks->get($prd_mac)->prd_name }}</a></div></div>
                                        <div class="banner_2_text">{{ $macbooks->get($prd_mac)->prd_cpu }}</div>
                                        <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="button banner_2_button"><a href="{{route('cart', ['id'=>$macbooks->get($prd_mac)->prd_id])}}">Thêm vào giỏ hàng</a></div>
                                    </div>

                                </div>
                                <div class="col-lg-8 col-md-6 fill_height">
                                    <div class="banner_2_image_container">
                                        <div class="banner_2_image"><img src="{{ asset('storage/images/'. $macbooks->get($prd_mac)->prd_image) }}" alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>

    <!-- Hot New Arrivals -->

    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">Danh mục ưa chuộng</div>
                            <ul class="clearfix">
                                <li class="active">Laptop Gaming</li>
                                <li>Laptop văn phòng</li>
                                <li>Macbook</li>
                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9" style="z-index:1;">

                                <!-- Product Panel -->
                                <div class="product_panel panel active">
                                    <div class="arrivals_slider slider">

                                        <!-- Slider Item -->
                                        @for($prd_gaming =0; $prd_gaming < count($gamings); $prd_gaming++)
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <a href="{{  route('client.product', $gamings->get($prd_gaming)->prd_id) }}">
                                                        <img src="{{ asset('storage/images/'. $gamings->get($prd_gaming)->prd_image) }}" alt=""></a></div>
                                                <div class="product_content">
                                                    <div class="product_price">{{ number_format($gamings->get($prd_gaming)->prd_price_discount) }}đ</div>
                                                    <div class="product_name"><div><a href="{{  route('client.product', $gamings->get($prd_gaming)->prd_id) }}">
                                                                @if(strlen($gamings->get($prd_gaming)->prd_name) >20)
                                                                    {{ substr($gamings->get($prd_gaming)->prd_name, 0, 20) }}...
                                                                @else
                                                                    {{ $gamings->get($prd_gaming)->prd_name }}
                                                                @endif
                                                                </a></div></div>
                                                    <div class="product_extras">
                                                        <a class="btn btn-primary" href="{{ route('cart', ['id'=>$gamings->get($prd_gaming)->prd_id]) }} ">Thêm vào giỏ hàng</a>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_new">
                                                        @if($gamings->get($prd_gaming)->prd_status == 'new')
                                                        new
                                                        @elseif($gamings->get($prd_gaming)->prd_status == 'like_new')
                                                            like new
                                                        @elseif($gamings->get($prd_gaming)->prd_status == 'old')
                                                            old
                                                        @endif  </li>
                                                </ul>
                                            </div>
                                        </div>
                                        @endfor
                                    </div>
                                    <div class="arrivals_slider_dots_cover"></div>
                                </div>

                                <!-- Product Panel -->
                                <div class="product_panel panel">
                                    <div class="arrivals_slider slider">

                                        <!-- Slider Item -->
                                        @for($prd_office = 0; $prd_office < count($offices); $prd_office ++)
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <a href="{{  route('client.product', $offices->get($prd_office)->prd_id) }}">
                                                        <img src="{{ asset('storage/images/'. $offices->get($prd_office)->prd_image) }}" alt=""></a></div>
                                                <div class="product_content">
                                                    <div class="product_price">{{ number_format($offices->get($prd_office)->prd_price_discount) }}đ</div>
                                                    <div class="product_name"><div><a href="{{  route('client.product', $offices->get($prd_office)->prd_id) }}">
                                                                @if(strlen($offices->get($prd_office)->prd_name) >20)
                                                                    {{ substr($offices->get($prd_office)->prd_name, 0, 20) }}...
                                                                @else
                                                                    {{ $offices->get($prd_office)->prd_name }}
                                                                @endif
                                                                </a></div></div>
                                                    <div class="product_extras">
                                                        <a class="btn btn-primary" href="{{ route('cart',['id'=>$offices->get($prd_office)->prd_id]) }} ">Thêm vào giỏ hàng</a>

                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">

                                                    <li class="product_mark product_new">@if($offices->get($prd_office)->prd_status == 'new')
                                                            new
                                                        @elseif($offices->get($prd_office)->prd_status == 'like_new')
                                                            like new
                                                        @elseif($offices->get($prd_office)->prd_status == 'old')
                                                            old
                                                        @endif</li>
                                                </ul>
                                            </div>
                                        </div>
                                        @endfor

                                    </div>
                                    <div class="arrivals_slider_dots_cover"></div>
                                </div>

                                <!-- Product Panel -->
                                <div class="product_panel panel">
                                    <div class="arrivals_slider slider">

                                        <!-- Slider Item -->
                                        @for($prd_macbook_popular = 0; $prd_macbook_popular < count($macbooks_popular); $prd_macbook_popular ++)
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <a href="{{  route('client.product', $macbooks_popular->get($prd_macbook_popular)->prd_id) }}">
                                                            <img src="{{ asset('storage/images/'. $macbooks_popular->get($prd_macbook_popular)->prd_image) }}" alt=""></a></div>
                                                    <div class="product_content">
                                                        <div class="product_price">{{ number_format($macbooks_popular->get($prd_macbook_popular)->prd_price_discount) }}đ</div>
                                                        <div class="product_name"><div><a href="{{  route('client.product', $macbooks_popular->get($prd_macbook_popular)->prd_id) }}">
                                                                    @if(strlen($macbooks_popular->get($prd_macbook_popular)->prd_name) >20)
                                                                        {{ substr($macbooks_popular->get($prd_macbook_popular)->prd_name, 0, 20) }}...
                                                                    @else
                                                                        {{ $macbooks_popular->get($prd_macbook_popular)->prd_name }}
                                                                    @endif
                                                                    </a></div></div>
                                                        <div class="product_extras">
                                                            <a class="btn btn-primary" href="{{ route('cart', ['id'=>$macbooks_popular->get($prd_macbook_popular)->prd_id]) }} ">Thêm vào giỏ hàng</a>

                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">

                                                        <li class="product_mark product_new">@if($macbooks_popular->get($prd_macbook_popular)->prd_status == 'new')
                                                                new
                                                            @elseif($macbooks_popular->get($prd_macbook_popular)->prd_status == 'like_new')
                                                                like new
                                                            @elseif($macbooks_popular->get($prd_macbook_popular)->prd_status == 'old')
                                                                old
                                                            @endif</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        @endfor

                                    </div>
                                    <div class="arrivals_slider_dots_cover"></div>
                                </div>

                            </div>

                            <div class="col-lg-3">
                                <div class="arrivals_single clearfix">
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <div class="arrivals_single_image">
                                            <a href="{{  route('client.product', $prdBestPrice->prd_id) }}">
                                                <img src="{{ asset('storage/images/'. $prdBestPrice->prd_image) }}" alt=""></a></div>
                                        <div class="arrivals_single_content">
                                            <div class="arrivals_single_category"><a href="#">{{ $prdBestPrice->category->cat_name }}</a></div>
                                            <div class="arrivals_single_name_container clearfix">
                                                <div class="arrivals_single_name"><a href="{{  route('client.product', $prdBestPrice->prd_id) }}">
                                                        @if(strlen($prdBestPrice->prd_name) >20)
                                                            {{ substr($prdBestPrice->prd_name, 0, 20) }}...
                                                        @else
                                                            {{ $prdBestPrice->prd_name }}
                                                        @endif
                                                        </a></div>
                                                <div class="arrivals_single_price text-right">{{ number_format($prdBestPrice->prd_price_discount) }}đ</div>
                                            </div>
                                            <div class="rating_r rating_r_4 arrivals_single_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <a class="btn btn-primary" href="{{ route('cart', ['id'=>$prdBestPrice->prd_id]) }} ">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div>
                                        <ul class="arrivals_single_marks product_marks">
                                            <li class="arrivals_single_mark product_mark product_new">
                                                @if($prdBestPrice->prd_status == 'new')
                                                    new
                                                @elseif($prdBestPrice->prd_status == 'like_new')
                                                    like new
                                                @elseif($prdBestPrice->prd_status == 'old')
                                                    old
                                                @endif  </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Best Sellers -->

    <div class="best_sellers">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">Bán chạy nhất</div>
                            <ul class="clearfix">
                                <li class="active">Top 20</li>
                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>

                        <div class="bestsellers_panel panel active">

                            <!-- Best Sellers Slider -->

                            <div class="bestsellers_slider slider">

                                <!-- Best Sellers Item -->
                                @for($prd_most_seller = 0; $prd_most_seller < count($mostSeller); $prd_most_seller++)
                                <div class="bestsellers_item discount">
                                    <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image">
                                            <a href="{{  route('client.product', $mostSeller->get($prd_most_seller)->prd_id) }}">
                                                <img src="{{ asset('storage/images/'. $mostSeller->get($prd_most_seller)->prd_image) }}" alt=""></a></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="{{ route('client.category', $mostSeller->get($prd_most_seller)->category->cat_id) }}">{{ $mostSeller->get($prd_most_seller)->category->cat_name }}</a></div>
                                            <div class="bestsellers_name">
                                                <a href="{{  route('client.product', $mostSeller->get($prd_most_seller)->prd_id) }}">
                                                    @if(strlen($mostSeller->get($prd_most_seller)->prd_name) >20)
                                                    {{ substr($mostSeller->get($prd_most_seller)->prd_name, 0, 20) }}...
                                                    @else
                                                        {{ $mostSeller->get($prd_most_seller)->prd_name }}
                                                    @endif
                                                </a></div>
                                            <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">{{ number_format($mostSeller->get($prd_most_seller)->prd_price_discount) }}đ<br>
                                                <span>{{ number_format($mostSeller->get($prd_most_seller)->prd_retail_price) }}đ</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-{{ intval((($mostSeller->get($prd_most_seller)->prd_retail_price - $mostSeller->get($prd_most_seller)->prd_price_discount)) /
                                                                                                            $mostSeller->get($prd_most_seller)->prd_retail_price * 100) }}%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Recently Viewed -->

    <div class="viewed">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="viewed_title_container">
                        <h3 class="viewed_title">Sản phẩm mới nhất</h3>
                        <div class="viewed_nav_container">
                            <div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>

                    <div class="viewed_slider_container">

                        <!-- Recently Viewed Slider -->

                        <div class="owl-carousel owl-theme viewed_slider">

                            <!-- Recently Viewed Item -->

                            @for($prd_new = 0; $prd_new < count($mostNewProducts); $prd_new++)
                            <div class="owl-item">
                                <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image">
                                        <a href="{{  route('client.product', $mostNewProducts->get($prd_new)->prd_id) }}">
                                            <img src="{{ asset('storage/images/'. $mostNewProducts->get($prd_new)->prd_image) }}" alt=""></a></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">{{ number_format($mostNewProducts->get($prd_new)->prd_price_discount) }}đ<span>
                                                {{ number_format($mostNewProducts->get($prd_new)->prd_retail_price) }}đ</span></div>
                                        <div class="viewed_name"><a href="{{  route('client.product', $mostNewProducts->get($prd_new)->prd_id) }}">
                                                @if(strlen($mostNewProducts->get($prd_new)->prd_name) >17)
                                                    {{ substr($mostNewProducts->get($prd_new)->prd_name, 0, 17) }}...
                                                @else
                                                    {{ $mostNewProducts->get($prd_new)->prd_name }}
                                                @endif
                                               </a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-{{ intval((($mostNewProducts->get($prd_new)->prd_retail_price - $mostNewProducts->get($prd_new)->prd_price_discount)) /
                                                                                                            $mostNewProducts->get($prd_new)->prd_retail_price * 100) }}%</li>
                                        <li class="item_mark item_new">
                                            @if($mostNewProducts->get($prd_new)->prd_status == 'new')
                                                new
                                            @elseif($mostNewProducts->get($prd_new)->prd_status == 'like_new')
                                                like new
                                            @elseif($mostNewProducts->get($prd_new)->prd_status == 'old')
                                                old
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endfor

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>

    function AddCart(id)
    {
        $.ajax({
            url: "{{ route('cart.store')}}?id="+id,
            type: 'GET',
        }).done(function (response){
            console.log(response);
        });

    }
</script>

@endsection

