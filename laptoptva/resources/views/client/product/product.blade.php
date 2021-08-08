@extends('client.index')

@section('title', 'Chi tiết sản phẩm')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('client/styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('client/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/styles/product_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/styles/product_responsive.css') }}">


<body>

<div class="super_container">

    <!-- Header -->



    <!-- Single Product -->

    <div class="single_product">
        <div class="container">
            <div class="row">

                <!-- Images -->
                <div class="col-lg-2 order-lg-1 order-2">
                    <ul class="image_list">
                        <li data-image="{{asset('storage/images/' . $product->prd_image) }}"><img src="{{asset('storage/images/' . $product->prd_image) }}" alt=""></li>
                        <li data-image="{{asset('storage/images/' . $product->prd_image) }}"><img src="{{asset('storage/images/' . $product->prd_image) }}" alt=""></li>
                        <li data-image="{{asset('storage/images/' . $product->prd_image) }}"><img src="{{asset('storage/images/' . $product->prd_image) }}" alt=""></li>
                    </ul>
                </div>

                <!-- Selected Image -->
                <div class="col-lg-5 order-lg-2 order-1">
                    <div class="image_selected"><img src="{{asset('storage/images/' . $product->prd_image) }}" alt=""></div>
                </div>

                <!-- Description -->
                <div class="col-lg-5 order-3">
                    <div class="product_description">
                        <div class="product_category">{{ $product->category->cat_name }}</div>
                        <div class="product_name">{{ $product->prd_name }}</div>
                        <div class="product_text"><i class="bi bi-eye-fill" style="color:green"></i> Lượt xem: {{ $product->prd_view_count }}</div>
                        <div class="product_name">{{ number_format($product->prd_price_discount) }}đ</div>
                        <a class="btn btn-primary" href="{{route('cart',['id'=>$product->prd_id])}}">Thêm vào giỏ hàng</a>
                        <div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
                        <div class="product_text"><p><i class="bi bi-check-circle-fill" style="color:green"></i> CPU: {{ $product->prd_cpu }}</p></div>
                        <div class="product_text"><p><i class="bi bi-check-circle-fill" style="color:green"></i> RAM: {{ $product->prd_ram }}</p></div>
                        <div class="product_text"><p><i class="bi bi-check-circle-fill" style="color:green"></i> Ổ cứng: {{ $product->prd_hard_drive }}</p></div>
                        <div class="product_text"><p><i class="bi bi-check-circle-fill" style="color:green"></i> Màn hình: {{ $product->prd_screen }}</p></div>
                        <div class="product_text"><p><i class="bi bi-check-circle-fill" style="color:green"></i> VGA: {{ $product->prd_vga }}</p></div>
                        <div class="product_text"><p><i class="bi bi-check-circle-fill" style="color:green"></i> Quà tặng/Khuyến mại:<br><i class="bi bi-check" style="color:green" ></i>Trả Góp 80% Giá Trị Sản Phẩm<br>
                                <i class="bi bi-check" style="color:green"></i> Tặng bộ quà tặng 650.000đ cho toàn bộ đơn hàng trên 5 triệu bao gồm: Balo thời trang, túi chống sốc, chuột không dây, lót di chuột<br>
                                <i class="bi bi-check" style="color:green"></i> Trải nghiệm miễn phí 15 ngày đầu tiên.<br>
                                <i class="bi bi-check" style="color:green"></i> Bảo hành 12 tháng 1 đổi 1<br>
                                <i class="bi bi-check" style="color:green"></i> Miễn phí vận chuyển toàn quốc<br>
                               </p></div>
                        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Quay lại</button>
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
<script src="{{ asset('client/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('client/js/product_custom.js') }}"></script>
</body>

@endsection
