<table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên khách hàng</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Địa chỉ</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @if(count($customers) == 0)
            <tr>
                <td colspan="4">Không có dữ liệu</td>
            </tr>
        @else
            @foreach($customers as $key => $customer)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $customer->customer_name }}</td>
                    <td>{{ $customer->customer_phone }}</td>
                    <td>{{ $customer->address }}</td>

                    <td><a class="btn btn-warning" href="{{route('customer.edit', $customer->customer_id)}}">sửa</a>
                    <td><a class="btn btn-warning" href="{{route('customer.history', $customer->customer_id)}}">Xem</a>
                    </td>
{{--                    <td><a class="btn btn-danger" href="{{route('customer.destroy', $customer->customer_id)}}"--}}
{{--                           class="text-danger"--}}
{{--                           onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>--}}
                    <td>
                        <a class="btn btn-danger" href="{{route('customer.destroy', $customer->customer_id)}}" data-target = "#delete_{{ $customer->customer_id}}" data-toggle = "modal">Xóa</a>
                    </td>
                    <div class="modal" tabindex="-1" id="delete_{{ $customer->customer_id }}">
                        <div class="modal-dialog" >
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h5 class="modal-title">Xóa danh mục</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Bạn muốn xóa ?</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href	= "{{route('customer.destroy', $customer->customer_id)}}" class="btn btn-danger">Xóa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>

            @endforeach
        @endif
        </tbody>
    </table>

    {{$customers->links()}}


