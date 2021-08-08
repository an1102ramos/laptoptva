@extends('admin.index')

@section('title', 'Cập nhật sản phẩm')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>Cập nhật danh mục</h2>
        </div>

        @if(count($errors)>0)
            <div class="alert alert-danger">
                <div class="col-12">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li><br>
                        @endforeach
                    </ul>
                </div>
            </div>
                    @endif


        <div class="col-md-12">
            <form method="post" action="{{ route('product.update', $product->prd_id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" class="form-control" name="prd_name" value="{{ $product->prd_name }}" required>
                </div>

                <div class="form-group">
                    <label>Danh mục</label>
                    <select class="form-control" name="cat_id" required>
                        <option selected disabled>Chọn danh mục</option>
                        @foreach($categories as $category)

                            <option
                                @if($product->cat_id == $category->cat_id)
                                {{"selected"}}
                                @endif
                                value="{{$category->cat_id}}">{{$category->cat_name}}</option>
                        @endforeach
                    </select>
                </div>



                <div class="form-group">
                    <label>CPU</label>
                    <input type="text" class="form-control" name="prd_cpu" value="{{$product->prd_cpu}}" placeholder="Enter name" required>
                </div>

                <div class="form-group">
                    <label>RAM</label>
                    <input type="text" class="form-control" name="prd_ram" value="{{$product->prd_ram}}" placeholder="Enter name" required>
                </div>

                <div class="form-group">
                    <label>Ổ cứng</label>
                    <input type="text" class="form-control" name="prd_hard_drive" value="{{$product->prd_hard_drive}}" placeholder="Enter name" required>
                </div>

                <div class="form-group">
                    <label>Màn hình</label>
                    <input type="text" class="form-control" name="prd_screen" value="{{$product->prd_screen}}" placeholder="Enter name" required>
                </div>

                <div class="form-group">
                    <label>VGA</label>
                    <input type="text" class="form-control" name="prd_vga" value="{{$product->prd_vga}}" placeholder="Enter name" required>
                </div>

                <div class="form-group">
                    <label>Service tag</label>
                    <input type="text" class="form-control" name="prd_service_tag" value="{{$product->prd_service_tag}}" placeholder="Enter name" required>
                </div>

                <div class="form-group">
                    <label>Tồn kho</label>
                    <input type="text" class="form-control" name="prd_instock" value="{{$product->prd_instock}}" placeholder="Enter name" required>
                </div>

                <div class="form-group">
                    <label>Đã bán</label>
                    <input type="text" class="form-control" name="prd_sell_quantity" value="{{$product->prd_sell_quantity}}" placeholder="Enter name" required>
                </div>

                <div class="form-group">
                    <label>Giá nhập</label>
                    <input type="text" class="form-control" name="prd_price" value="{{$product->prd_price}}" placeholder="Enter name" required>
                </div>

                <div class="form-group">
                    <label>Giá bán</label>
                    <input type="text" class="form-control" name="prd_retail_price" value="{{$product->prd_retail_price}}" placeholder="Enter name" required>
                </div>
                <div class="form-group">
                    <label>Giá giảm</label>
                    <input type="text" class="form-control" name="prd_price_discount" value="{{$product->prd_price_discount}}" placeholder="Enter name" required>
                </div>

                <div class="form-group">
                    <label for="inputCategory">Tình trạng</label>
                    <select class="form-control" name="prd_status" required>
                        <option disabled  selected>Chọn tình trạng</option>
                        <option value="new" {{ $product->prd_status == "new"?'selected':''}} >New</option>
                        <option value="like_new" {{ $product->prd_status == "like_new"?'selected':''}} >Like new</option>
                        <option value="old" {{ $product->prd_status == "old"?'selected':''}} >Old</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="inputCategory">Sale</label>
                    <select class="form-control" name="prd_on_sale" required>
                        <option disabled  selected>Chọn tình trạng</option>
                        <option value="0" {{ $product->prd_on_sale == "0"?'selected':''}}>Không sale</option>
                        <option value="1" {{ $product->prd_on_sale == "1"?'selected':''}}>Sale</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Ghi chú</label>
                    <textarea class="form-control" name="prd_description" required>{{$product->prd_description}}</textarea>
                </div>

                <div class="form-group">
                    <label for="inputFileName">Ảnh</label>
                    <input type="text" hidden name="prd_image_old"  value = {{$product->prd_image}}>
                    <input type="file" name="inputFile" id = "upload" >
                    <br>
                    <div>
                        <img src="{{ asset('storage/images/'.$product->prd_image)}}" width = "200px" id = "img_upload">
                    </div>
                </div>



                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
@endsection
