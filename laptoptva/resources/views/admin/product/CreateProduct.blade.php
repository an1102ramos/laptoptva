@extends('admin.index')
@section('title', 'Thêm mới nhà cung cấp')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới sản phẩm</h1>
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

            <div class="col-12">
                <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input type="text" class="form-control" name="prd_name" value="{{old('prd_name')}}"
                               placeholder="Enter name" required>
                    </div>

                    <div class="form-group">
                        <label for="inputCategory">Danh mục</label>
                        <select class="form-control" name="cat_id" required>
                            <option disabled selected>Chọn danh mục</option>
                            @foreach($categories as $category)
                                <option value="{{$category->cat_id}}">{{$category->cat_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>CPU</label>
                        <input type="text" class="form-control" name="prd_cpu" value="{{old('prd_cpu')}}"
                               placeholder="Enter name" required>
                    </div>

                    <div class="form-group">
                        <label>RAM</label>
                        <input type="text" class="form-control" name="prd_ram" value="{{old('prd_ram')}}"
                               placeholder="Enter name" required>
                    </div>

                    <div class="form-group">
                        <label>Ổ cứng</label>
                        <input type="text" class="form-control" name="prd_hard_drive" value="{{old('prd_hard_drive')}}"
                               placeholder="Enter name" required>
                    </div>

                    <div class="form-group">
                        <label>Màn hình</label>
                        <input type="text" class="form-control" name="prd_screen" value="{{old('prd_screen')}}"
                               placeholder="Enter name" required>
                    </div>

                    <div class="form-group">
                        <label>VGA</label>
                        <input type="text" class="form-control" name="prd_vga" value="{{old('prd_vga')}}"
                               placeholder="Enter name" required>
                    </div>

                    <div class="form-group">
                        <label>Service tag</label>
                        <input type="text" class="form-control" name="prd_service_tag"
                               value="{{old('prd_service_tag')}}" placeholder="Enter name" required>
                    </div>

                    <div class="form-group">
                        <label>Tồn kho</label>
                        <input type="text" class="form-control" name="prd_instock" value="{{old('prd_instock')}}"
                               placeholder="Enter name" required>
                    </div>

                    <div class="form-group">
                        <label>Đã bán</label>
                        <input type="text" class="form-control" name="prd_sell_quantity"
                               value="{{old('prd_sell_quantity')}}" placeholder="Enter name" required>
                    </div>

                    <div class="form-group">
                        <label>Giá nhập</label>
                        <input type="text" class="form-control" name="prd_price" value="{{old('prd_price')}}"
                               placeholder="Enter name" required>
                    </div>

                    <div class="form-group">
                        <label>Giá bán</label>
                        <input type="text" class="form-control" name="prd_retail_price"
                               value="{{old('prd_retail_price')}}" placeholder="Enter name" required>
                    </div>

                    <div class="form-group">
                        <label for="inputCategory">Tình trạng</label>
                        <select class="form-control" name="prd_status" required>
                            <option disabled selected>Chọn tình trạng</option>
                            <option value="new">New</option>
                            <option value="like_new">Like new</option>
                            <option value="old">Old</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Ghi chú</label>
                        <textarea class="form-control" name="prd_description"
                                  required>{{old('prd_description')}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="inputFileName">Ảnh</label>
                        <input type="file"
                               class="form-control-file"
                               id="inputFile"
                               name="inputFile"
                               value="{{old('inputFile')}}"
                               required>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection

