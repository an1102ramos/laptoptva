<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Tên nhân viên</th>
        <th scope="col">Email</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Chức vụ</th>



        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @if(count($users) == 0)
        <tr>
            <td colspan="4">Không có dữ liệu</td>
        </tr>
    @else
        @foreach($users as $key => $user)
            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->user_level == 1?'Quản lý':'Nhân viên'}}</td>


                <td><a class="btn btn-warning" href="{{route('user.edit', $user->id)}}">sửa</a>
                </td>
                <td><a class="btn btn-danger" href="{{route('user.destroy', $user->id)}}"
                       class="text-danger"
                       onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>

{{$users->links()}}
