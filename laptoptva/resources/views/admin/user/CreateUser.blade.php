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
                <form method="post" action="{{route('user.store')}}">
                    @csrf
                    <div class="form-group">
                        <label> Tên nhân viên</label>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label> Email</label>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label> Số điện thoại</label>
                        <input type="text" class="form-control" name="phone" value="{{old('phone')}}" placeholder="Enter phone" required>
                    </div>
                    <div class="form-group">
                        <label> Mật khẩu</label>
                        <input type="password" class="form-control" name="password" value="{{old('password')}}" placeholder="Enter password" required>
                    </div>


                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection

