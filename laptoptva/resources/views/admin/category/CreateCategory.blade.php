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
                        <div class="alert alert-warning" role="alert">
                        @foreach($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                        </div>
                    @endif
                </div>
            <div class="col-12">
                <form method="post" action="{{route('category.store')}}">
                    @csrf
                    <div class="form-group">
                        <label> Tên danh mục</label>
                        <input type="text" class="form-control" name="cat_name" value="{{old('cat_name')}}" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label for="inputCategory">Nhà cung cấp </label>
                        <select class="form-control" name="sup_id">
                            @foreach($suppliers as $supplier)
                                <option value="{{$supplier->sup_id}}">{{$supplier->sub_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection

