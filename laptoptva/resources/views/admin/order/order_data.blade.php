<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Tên khách hàng</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Tổng tiền</th>
        <th scope="col">Trạng thái</th>
        <th scope="col">Thời gian đặt</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @if(count($orders) == 0)
        <tr>
            <td colspan="4">Không có dữ liệu</td>
        </tr>
    @else
        @foreach($orders as $key => $order)
            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{ $order->customer->customer_name }}</td>
                <td>{{ $order->customer->customer_phone }}</td>
                <td>{{ number_format($order->order_total) }}đ</td>
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
                    @endif
                </td>
                <td>{{  $order->created_at }}</td>

                <td><a class="btn btn-warning" href="{{route('order.detail', $order->order_id)}}">Xem</a>
                </td>
                <td><a class="btn btn-danger" href="{{route('order.destroy', $order->order_id)}}"
                       class="text-danger"
                       onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a></td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>

{{$orders->links()}}
