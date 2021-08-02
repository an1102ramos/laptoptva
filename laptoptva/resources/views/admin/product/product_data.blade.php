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
                <td>{{ $product->prd_retail_price }}</td>
                <td>{{ $product->prd_status }}</td>

                <td><a class="btn btn-info" href="{{route('product.show', $product->prd_id)}}">@lang('language.show')</a>
                </td>
                <td><a class="btn btn-warning" href="{{route('product.edit', $product->prd_id)}}">@lang('language.edit')</a>
                </td>
                <td><a class="btn btn-danger" href="{{route('product.destroy', $product->prd_id)}}"
                       class="text-danger"
                       onclick="return confirm('Bạn chắc chắn muốn xóa?')">@lang('language.delete')</a></td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>

{{$products->links()}}
