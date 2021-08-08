@extends('admin.index')
@section('title', 'Chi tiết sản phẩm')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Lịch sử đặt hàng {{ $customer->customer_name }}</h1>
            </div>
            <div class="col-12">
            @if(count($orders) == 0)
                Khách hàng chưa có đơn hàng nào !
            @endif
            </div>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>

                    @foreach($orders as $order)
                        <tr>
                            <td>Mã hóa đơn</td>
                            <td>{{ $order->order_id }}</td>
                        </tr>
                    <tr>
                        <td>Tên khách hàng</td>
                        <td>{{ $order->customer->customer_name }}</td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td>{{ $order->customer->customer_phone }}</td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td>{{ $order->customer->address }}</td>
                    </tr>

                    <tr>
                        <td>Tình trạng</td>
                        <td>
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
                            @endif </td>
                    </tr>
                    <tr>
                        <td>Ngày tạo đơn</td>
                        <td>{{ $order->created_at }}</td>
                    </tr>


                    <tr>
                        <td><a class="btn btn-warning" href="{{route('order.detail', $order->order_id)}}">Xem hóa đơn</a>
                        </td>
                        <td><a class="btn btn-danger" href="{{route('order.destroy', $order->order_id)}}"
                               class="text-danger"
                               onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a></td>
                    </tr>
                    <tr>
                        <td>
                        <td><a class="btn btn-dark" style="float: right" href="{{route('customer.index')}}">Quay lại</a>
                        </td>

                    </tr>

                    @endforeach
                    </thead>

                </table>
            </div>
        </div>
    </div>
@endsection
