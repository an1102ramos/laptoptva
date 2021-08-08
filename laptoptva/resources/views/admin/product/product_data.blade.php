<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">@lang('language.name_product')</th>
        <th scope="col">@lang('language.category')</th>
        <th scope="col">CPU</th>
        <th scope="col">@lang('language.image_product')</th>
        <th scope="col">@lang('language.retail_price_product')</th>
        <th scope="col">@lang('language.status_product')</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @if(count($products) == 0)
        <tr>
            <td colspan="4">@lang('language.product_not_exist')</td>
        </tr>
    @else
        @foreach($products as $key => $product)
            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{ $product->prd_name }}</td>
                <td>{{ $product->category->cat_name }}</td>
                <td>{{ $product->prd_cpu }}</td>
                <td>
                    <img src="{{ asset('storage/images/' .$product->prd_image) }}" alt="" width="150px">
                </td>
                <td>{{ number_format($product->prd_retail_price) }}đ</td>
                <td>@if( $product->prd_status == 'new')
                        Mới
                    @elseif($product->prd_status == 'like_new')
                        Gần mới
                    @elseif($product->prd_status == 'old')
                        Cũ
                    @endif</td>

                <td><a class="btn btn-info" href="{{route('product.show', $product->prd_id)}}">@lang('language.show')</a>
                </td>
                <td><a class="btn btn-warning" href="{{route('product.edit', $product->prd_id)}}">@lang('language.edit')</a>
                </td>
                <td><a class="btn btn-danger" href="{{route('product.destroy', $product->prd_id)}}"
                       class="text-danger"
                       onclick="return confirm('Bạn chắc chắn muốn xóa?')">@lang('language.delete')</a></td>
                <td>
{{--                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">--}}
{{--                        Xóa--}}
{{--                    </button>--}}
                </td>
            </tr>


            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Xóa sản phẩm</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Bạn có muốn xóa sản phẩm {{ $product->prd_name }}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>
                            <button type="button" class="btn btn-primary">Có</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
    </tbody>
</table>

{{$products->links()}}
