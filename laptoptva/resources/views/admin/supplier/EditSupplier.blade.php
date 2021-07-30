@extends('admin.index')
@section('title', 'Cập nhật thông tin nhà cung cấp')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Cập nhật thông tin nhà cung cấp</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('supplier.update', $supplier->sup_id)}}">
                    @csrf
                    <div class="form-group">
                        <label>Tên nhà cung cấp</label>
                        <input type="text" class="form-control" name="name" value="{{ $supplier->sub_name }}" required>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" class="form-control" name="address" value="{{ $supplier->sub_address }}" required>
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" class="form-control" name="phone" value="{{ $supplier->sub_phone }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
