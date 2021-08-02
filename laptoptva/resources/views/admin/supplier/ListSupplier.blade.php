@extends('admin.index')
@section('title', 'Danh sách nhà cung cấp')
@section('content')
    <meta name="_token" content="{{ csrf_token() }}">
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

    <script type="text/javascript">
        $('#search').on('keyup',function(){
            $value = $(this).val();
            $.ajax({
                type: 'get',
                url: '{{ URL::to('search') }}',
                data: {
                    'search': $value
                },
                success:function(data){
                    $('tbody').html(data);
                }
            });
        })
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>


    <script>
        $(document).ready(function (){
            $(document).on('click', '.pagination a', function (event){
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
            });
            function fetch_data(page)
            {
                $.ajax({
                    url:"/supplier?page="+page,
                    success:function (data)
                    {
                        $('#supplierData').html(data);
                    }
                });
            }
        });
    </script>
@endsection

