@extends('admin.index')
@section('title', 'Danh sách đơn hàng')
@section('content')

    <div class="col-12">
        <div class="row">
            <div class="col-12">

                <center><h1>Danh sách đơn hàng</h1>
                    <div class="form-group">
                    </div>

                </center>
                <a class="btn btn-outline-primary" href="" data-toggle="modal" data-target="#statusModal">
                    Lọc theo trạng thái
                </a>
            </div>


            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        {{ Session::get('success') }}
                    </p>
                @endif
                    @if(isset($totalOrderFilter) && isset($order_status) )
                        <span class="text-muted"><span class="text-muted"><i class="fa fa-check" aria-hidden="true" style="color: green"></i>
                    {{'Tìm thấy' . ' ' . $totalOrderFilter . ' '. 'đơn hàng thuộc trạng thái:'}}
                                @if($order_status == 0)
                                    Chưa xác nhận
                                @elseif($order_status == 1)
                                    Đã xác nhận
                                @elseif($order_status == 2)
                                    Đã lấy hàng
                                @elseif($order_status == 3)
                                    Đang giao hàng
                                @elseif($order_status == 4)
                                    Hoàn thành
                                @endif
                </span>
                    @endif
            </div>
            <div class="col-12" id="orderData">@include('admin.order.order_data')</div>
            <div class="modal fade" id="statusModal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <form action="{{ route('order.filterByOrderStatus') }}" method="get">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <!--Lọc theo danh mục -->
                                <div class="select-by-program">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label border-right">Lọc hóa đơn theo trạng thái đơn hàng</label>
                                        <div class="col-sm-7">
                                            <select class="custom-select w-100" name="order_status">
                                                <option selected disabled>Chọn trạng thái</option>
                                                <option value="0">Chưa xác nhận</option>
                                                <option value="1">Đã xác nhận</option>
                                                <option value="2">Đã lấy hàng</option>
                                                <option value="3">Đang giao hàng</option>
                                                <option value="4">Hoàn thành</option>
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
@endsection
