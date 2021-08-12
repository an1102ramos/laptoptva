@extends('admin.index')
@section('title', 'Chi tiết tin nhắn')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Chi tiết tin nhắn</h1>
            </div>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <td>Tên người gửi</td>
                        <td>{{ $message->mess_name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $message->mess_email }}</td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td>{{ $message->mess_phone }}</td>
                    </tr>

                    <tr>
                        <td>Lời nhắn</td>
                        <td>{{ $message->mess_message }}</td>
                    </tr>
                    <tr>
                        <td>Ngày gửi</td>
                        <td>{{ $message->created_at }}</td>
                    </tr>

                    <tr>
                        <td>
                        <td><a class="btn btn-dark" style="float: right" href="{{route('contact.index')}}">Quay lại</a>
                        </td>

                    </tr>


                    </thead>

                </table>
            </div>
        </div>
    </div>
@endsection

