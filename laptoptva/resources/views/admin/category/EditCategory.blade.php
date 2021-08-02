@extends('admin.index')

@section('title', 'Cập nhật danh mục')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>Cập nhật danh mục</h2>
        </div>

        <div class="col-md-12">
            <form method="post" action="{{ route('category.update', $category->cat_id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Tên danh mục</label>
                    <input type="text" class="form-control" name="cat_name" value="{{ $category->cat_name }}" required>
                </div>

                <div class="form-group">
                    <label>Nhà cung cấp</label>
                    <select class="form-control" name="sup_id">
                        <option selected disabled>Chọn nhà cung cấp</option>
                        @foreach($suppliers as $supplier)

                            <option
                                @if($category->sub_id == $supplier->sup_id)
                                {{"selected"}}
                                @endif
                                value="{{$supplier->sup_id}}">{{$supplier->sub_name}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
@endsection
