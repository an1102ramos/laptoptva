@extends('admin.index')
@section('title', 'Config web')
@section('content')

    <div class="col-12">
        <div class="row">
            <div class="col-12">

                <center><h1>Config web</h1>
                    <div class="form-group">
                    </div>
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
            <div class="col-12" id="configData">@include('admin.config.list')</div>

        </div>
    </div>

@endsection

