@extends('admin.index')

@section('title', 'Chi tiết đơn hàng')

@section('content')
    <style>@import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

        body {
            background-color: #eeeeee;
            font-family: 'Open Sans', serif
        }

        .container {
            margin-top: 50px;
            margin-bottom: 50px
        }

        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 0.10rem
        }

        .card-header:first-child {
            border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
        }

        .card-header {
            padding: 0.75rem 1.25rem;
            margin-bottom: 0;
            background-color: #fff;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1)
        }

        .track {
            position: relative;
            background-color: #ddd;
            height: 7px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 60px;
            margin-top: 50px
        }

        .track .step {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            width: 25%;
            margin-top: -18px;
            text-align: center;
            position: relative
        }

        .track .step.active:before {
            background: #FF5722
        }

        .track .step::before {
            height: 7px;
            position: absolute;
            content: "";
            width: 100%;
            left: 0;
            top: 18px
        }

        .track .step.active .icon {
            background: #ee5435;
            color: #fff
        }

        .track .icon {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            position: relative;
            border-radius: 100%;
            background: #ddd
        }

        .track .step.active .text {
            font-weight: 400;
            color: #000
        }

        .track .text {
            display: block;
            margin-top: 7px
        }

        .itemside {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%
        }

        .itemside .aside {
            position: relative;
            -ms-flex-negative: 0;
            flex-shrink: 0
        }

        .img-sm {
            width: 80px;
            height: 80px;
            padding: 7px
        }

        ul.row,
        ul.row-sm {
            list-style: none;
            padding: 0
        }

        .itemside .info {
            padding-left: 15px;
            padding-right: 7px
        }

        .itemside .title {
            display: block;
            margin-bottom: 5px;
            color: #212529
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }

        .btn-warning {
            color: #ffffff;
            background-color: #ee5435;
            border-color: #ee5435;
            border-radius: 1px
        }

        .btn-warning:hover {
            color: #ffffff;
            background-color: #ff2b00;
            border-color: #ff2b00;
            border-radius: 1px
        }</style>
    <body oncontextmenu='return false' class='snippet-body'>
    <div class="col-md-12">
        <center><h2>Chi tiết đơn hàng</h2></center>
    </div>
    <div class="container">

        <article class="card">
            <header class="card-header"> Đơn hàng / Chi tiết </header>
            <div class="card-body">
                <h6>Mã đơn hàng: {{ $order->order_id }}</h6>
                <article class="card">
                    <div class="card-body row">
                        <div class="col"> <strong>Họ tên:</strong> <br>{{ $order->customer->customer_name }} </div>
                        <div class="col"> <strong>Số điện thoại:</strong> <br><i class="fa fa-phone"></i> {{ $order->customer->customer_phone }} </div>
                        <div class="col"> <strong>Tình trạng:</strong> <br>
                            @if( $order->order_status == 0)
                            Chưa xác nhận
                            @elseif($order->order_status == 1)
                            Đã xác nhận
                            @elseif($order->order_status == 2)
                            Đã lấy hàng
                            @elseif($order->order_status == 3)
                            Đang giao hàng
                            @else
                            Hoàn thành
                            @endif

                        </div>
                        <div class="col"> <strong>Địa chỉ:</strong> <br> {{ $order->customer->address }} </div>
                    </div>
                </article>
                <div class="track">
                    <div class="step


                        @if($order->order_status == 1)
                        active
                        @elseif($order->order_status == 2)
                        active
                        @elseif($order->order_status == 3)
                        active
                        @elseif($order->order_status == 4)
                        active
                        @endif
                        "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Đã xác nhận</span> </div>
                    <div class="step

                        @if($order->order_status == 2)
                        active
                        @elseif($order->order_status == 3)
                        active
                        @elseif($order->order_status == 4)
                        active
                        @endif
                        "> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Đã lấy hàng</span> </div>
                    <div class="step
                        @if($order->order_status == 3)
                        active
                        @elseif($order->order_status == 4)
                        active
                        @endif"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> Đang giao hàng </span> </div>
                    <div class="step {{ $order->order_status == 4?'active':''}}"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text">Hoàn thành</span> </div>
                </div>
                <hr>
                <ul class="row">

                    @foreach($order_detail_products as $product_order)
                    <li class="col-md-4">
                        <figure class="itemside mb-3">
                            <div class="aside"><img src="{{ asset('storage/images/' .$product_order->product->prd_image) }}" class="img-sm border"></div>
                            <figcaption class="info align-self-center">
                                <p class="title">{{ $product_order->product->prd_name }}<br> {{ $product_order->product->prd_cpu }}</p> <span class="text-muted">{{ number_format($product_order->product->prd_price_discount) }}đ </span>
                            </figcaption>
                        </figure>
                    </li>
                    @endforeach
                </ul>

                <form action="{{ route('order.update', $order->order_id) }}" method="post">
                    @csrf
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="order_status" value="0" id="flexRadioDefault1" {{ $order->order_status == 0?'checked':'' }}>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Chưa xác nhận
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="order_status" value="1" id="flexRadioDefault2" {{ $order->order_status == 1?'checked':'' }}>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Đã xác nhận
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="order_status" value="2" id="flexRadioDefault2" {{ $order->order_status == 2?'checked':'' }}>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Đã lấy hàng
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="order_status" value="3" id="flexRadioDefault2" {{ $order->order_status == 3?'checked':'' }}>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Đang giao hàng
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="order_status" value="4" id="flexRadioDefault2" {{ $order->order_status == 4?'checked':'' }}>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Hoàn thành
                        </label>
                    </div>

                <hr>  <button type="submit" class="btn btn-primary">Cập nhật</button>
                    <button href="#" style="float: right" onclick="window.history.go(-1); return false;" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Quay lại</button>
                </form>

            </div>
        </article>
    </div>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'></script>
    </body>
@endsection
