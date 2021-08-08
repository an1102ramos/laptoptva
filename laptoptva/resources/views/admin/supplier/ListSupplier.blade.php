@extends('admin.index')
@section('title', 'Danh sách nhà cung cấp')
@section('content')

    <div class="col-12">
        <div class="row">
            <div class="col-12">

                <center><h1>Danh sách nhà cung cấp</h1>
                    <div class="form-group">
                        <input type="text" class="form-controller" id="search" name="search"></input>
                    </div>
                    <a class="btn btn-primary" href="{{route('supplier.create')}}">Thêm mới</a>
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
            <div class="col-12" id="supplierData">@include('admin.supplier.list')</div>

        </div>
    </div>


    <script>
        $(document).ready(function(){

            $(document).on('click', '.pagination a', function(event){
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
            });

            function fetch_data(page)
            {
                $.ajax({
                    url:"{{ route('supplier.fetch_data')}}?page="+page,
                    success:function(categories)
                    {
                        $('#supplierData').html(categories);
                    }
                });
            }
        });
    </script>
@endsection

