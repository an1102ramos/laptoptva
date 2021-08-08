@extends('admin.index')
@section('title', 'Danh sách sản phẩm')
@section('content')

    <div class="col-12">
        <div class="row">
            <div class="col-12">
{{--                <div class="form-group" style="float: right">--}}
{{--                    <input type="text" class="form-controller" id="search" name="search"></input>--}}
{{--                </div>--}}
                <div class="col-12">
                    <center>
                    <h1>@lang('language.list_product')</h1>

                    <a class="btn btn-primary" href="{{route('product.create')}}"> @lang('language.create')</a>
                    </center>
                </div>

                <a class="btn btn-outline-primary" href="" data-toggle="modal" data-target="#categoryModal">
                    {!! __('language.filter_by_category') !!}
                </a>

                <div class="col-12">
                    @if (Session::has('create-success'))
                        <p class="text-success">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            {{ Session::get('create-success') }}
                        </p>
                    @endif

                    @if(isset($totalBlogFilter) && isset($categoryFilter) )
                        <span class="text-muted"><span class="text-muted"><i class="fa fa-check" aria-hidden="true"></i>
                    {{'Tìm thấy' . ' ' . $totalBlogFilter . ' '. 'sản phẩm thuộc danh mục' . ' ' . $categoryFilter->cat_name}}
                </span>
                    @endif


                </div>


            </div>
            <div class="col-12" id="supplierData">@include('admin.product.product_data')</div>


            <div class="modal fade" id="categoryModal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <form action="{{ route('product.filterByCategory') }}" method="get">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <!--Lọc theo danh mục -->
                                <div class="select-by-program">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label border-right">Lọc sản phẩm theo danh
                                            mục</label>
                                        <div class="col-sm-7">
                                            <select class="custom-select w-100" name="cat_id">
                                                <option selected disabled>Chọn danh mục</option>
                                                @if(isset($categories))
                                                    @foreach($categories as $category)
                                                        @if(isset($categoryFilter))
                                                            @if($category->cat_id == $categoryFilter->cat_id)
                                                                <option value="{{$category->cat_id}}"
                                                                        selected>{{ $category->cat_name }}</option>
                                                            @else
                                                                <option
                                                                    value="{{$category->cat_id}}">{{ $category->cat_name }}</option>
                                                            @endif
                                                        @else
                                                            <option value="{{$category->cat_id}}">{{ $category->cat_name }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <!-- </form> -->
                                </div>
                                <!--End-->

                            </div>
                            <div class="modal-footer">
                                <button type="submit" id="submitAjax" class="btn btn-primary">Chọn</button>
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Hủy
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


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
                    url:"{{ route('product.fetch_data')}}?page="+page,
                    success:function(categories)
                    {
                        $('#supplierData').html(categories);
                    }
                });
            }
        });
    </script>
@endsection
