@extends('admin.index')
@section('title', 'Thêm mới nhà cung cấp')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới nhà cung cấp</h1>
            </div>
            <div class="col-12">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                @endif
            </div>
            <div class="col-12">
                <form method="post" action="{{route('supplier.store')}}">
                    @csrf
                    <div class="form-group">
                        <label>Tên nhà cung cấp</label>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" class="form-control" name="address" value="{{old('address')}}" placeholder="Enter address" required>
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" class="form-control" name="phone" value="{{old('phone')}}" placeholder="Enter phone" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
