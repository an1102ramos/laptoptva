@extends('admin.index')
@section('title', 'Chi tiết sản phẩm')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Chi tiết sản phẩm {{ $product->prd_name }}</h1>
            </div>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <td>Tên sản phẩm</td>
                        <td>{{ $product->prd_name }}</td>
                    </tr>
                    <tr>
                        <td>Danh mục</td>
                        <td>{{ $product->category->cat_name }}</td>
                    </tr>
                    <tr>
                        <td>Tên sản phẩm</td>
                        <td>{{ $product->prd_name }}</td>
                    </tr>
                    <tr>
                        <td>CPU</td>
                        <td>{{ $product->prd_cpu }}</td>
                    </tr>
                    <tr>
                        <td>Ram</td>
                        <td>{{ $product->prd_ram }}</td>
                    </tr>
                    <tr>
                        <td>Ổ cứng</td>
                        <td>{{ $product->prd_hard_drive }}</td>
                    </tr>
                    <tr>
                        <td>Màn hình</td>
                        <td>{{ $product->prd_screen }}</td>
                    </tr>
                    <tr>
                        <td>VGA</td>
                        <td>{{ $product->prd_vga }}</td>
                    </tr>
                    <tr>
                        <td>Mã bảo hành</td>
                        <td>{{ $product->prd_service_tag }}</td>
                    </tr>
                    <tr>
                        <td>Tồn kho</td>
                        <td>{{ $product->prd_instock }}</td>
                    </tr>
                    <tr>
                        <td>Đã bán</td>
                        <td>{{ $product->prd_sell_quantity }}</td>
                    </tr>
                    <tr>
                        <td>Giá nhập</td>
                        <td>{{ $product->prd_price }}</td>
                    </tr>
                    <tr>
                        <td>Giá bán</td>
                        <td>{{ $product->prd_retail_price }}</td>
                    </tr>
                    <tr>
                        <td>Tình trạng</td>
                        <td>{{ $product->prd_status }}</td>
                    </tr>
                    <tr>
                        <td>Lượt xem</td>
                        <td>{{ $product->prd_view_count }}</td>
                    </tr>
                    <tr>
                        <td>Ghi chú</td>
                        <td>{{ $product->prd_description }}</td>
                    </tr>
                    <tr>
                        <td>Hình ảnh</td>
                        <td><img src="{{ asset('storage/images/' .$product->prd_image) }}" alt="" width="150px"></td>
                    </tr>

                    <tr>
                        <td><a class="btn btn-warning" href="{{route('product.edit', $product->prd_id)}}">Sửa</a>
                        </td>
                        <td><a class="btn btn-danger" href="{{route('product.destroy', $product->prd_id)}}"
                               class="text-danger"
                               onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a></td>
                    </tr>
                    <tr>
                        <td>
                        <td><a class="btn btn-dark" style="float: right" href="{{route('product.index')}}">Quay lại</a>
                        </td>
                        </td>
                    </tr>


                    </thead>

                </table>
            </div>
        </div>
    </div>
@endsection
