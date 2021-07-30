<table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên nhà cung cấp</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Số điện thoại</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @if(count($suppliers) == 0)
            <tr>
                <td colspan="4">Không có dữ liệu</td>
            </tr>
        @else
            @foreach($suppliers as $key => $supplier)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $supplier->sub_name }}</td>
                    <td>{{ $supplier->sub_address }}</td>
                    <td>{{ $supplier->sub_phone }}</td>

                    <td><a class="btn btn-warning" href="{{route('supplier.edit', $supplier->sup_id)}}">sửa</a>
                    </td>
                    <td><a class="btn btn-danger" href="{{route('supplier.destroy', $supplier->sup_id)}}"
                           class="text-danger"
                           onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

    {{$suppliers->links()}}

