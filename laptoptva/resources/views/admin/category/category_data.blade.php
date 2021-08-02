<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Tên danh mục</th>
        <th scope="col">Nhà cung cấp</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @if(count($categories) == 0)
        <tr>
            <td colspan="4">Không có dữ liệu</td>
        </tr>
    @else
        @foreach($categories as $key => $category)
            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{ $category->cat_name }}</td>
                <td>{{ $category->supplier->sub_name }}</td>

                <td><a class="btn btn-warning" href="{{route('category.edit', $category->cat_id)}}">sửa</a>
                </td>
                <td><a class="btn btn-danger" href="{{route('category.destroy', $category->cat_id)}}"
                       class="text-danger"
                       onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>

{{$categories->links()}}
