@extends('admin.index')
@section('title', 'Danh sách danh  mục')
@section('content')

    <div class="col-12">
        <div class="row">
            <div class="col-12">

                <center><h1>Danh sách danh mục</h1>
                    <div class="form-group">
                        <input type="text" class="form-controller" id="search" name="search"></input>
                    </div>
                    <a class="btn btn-primary" href="{{route('category.create')}}">Thêm mới</a>
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
            <div class="col-12" id="supplierData">@include('admin.category.category_data')</div>

        </div>
    </div>
@endsection
