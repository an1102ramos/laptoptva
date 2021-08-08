@extends('admin.index')
@section('title', 'Danh sách nhân viên')
@section('content')

    <div class="col-12">
        <div class="row">
            <div class="col-12">

                <center><h1>Danh sách nhân viên</h1>
                    <a class="btn btn-primary" href="{{route('user.create')}}">Thêm mới</a>
                </center>
            </div>


            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        {{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <div class="col-12" id="supplierData">@include('admin.user.user_data')</div>

        </div>
    </div>
@endsection
