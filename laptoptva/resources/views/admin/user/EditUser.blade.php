@extends('admin.index')

@section('title', 'Cập nhật nhân viên')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>Cập nhật nhân viên</h2>
        </div>

        <div class="col-md-12">
            <form method="post" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Tên nhân viên</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input type="text" class="form-control" name="phone" value="{{ $user->phone }}" required>
                </div>
                <div class="form-group">
                    <label>Chức vụ</label>
                    <select class="form-control" name="user_level">
                        <option value="1" {{ $user->user_level == 1? 'seleccted':''}}> Quản lý</option>
                        <option value="0" {{ $user->user_level == 0? 'selected': ''}}> Nhân viên</option>

                    </select>

                </div>



                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
@endsection
