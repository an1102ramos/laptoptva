@extends('admin.index')
@section('title', 'Danh sách đơn hàng')
@section('content')

    <div class="col-12">
        <div class="row">
            <div class="col-12">

                <center><h1>Danh sách đơn hàng</h1>
                    <div class="form-group">
                    </div>
{{--                    <a class="btn btn-primary" href="{{route('order.create')}}">Thêm mới</a>--}}
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
            <div class="col-12" id="orderData">@include('admin.order.order_data')</div>

        </div>
    </div>
@endsection
