@extends('admin.master')
@section('content')
<div class="animated fadeIn">
    <div class="card">
        <div class="card-header">
            <h4>Cập nhật đơn hàng</h4>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-header">
                    <h4>Đơn hàng</h4>
                </div>
                <div class="card-body">
                    <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Địa chỉ nhận</label>
                                <div class="col-md-9">
                                    <input type="text" id="text-input" name="text-input" class="form-control" placeholder="Nhập địa chỉ">
                                </div>
                            </div><br>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="select">Trạng thái đơn hàng</label>
                                <div class="col-md-9">
                                    <select id="select" name="select" class="form-control">
                                        <option value="0">Chọn trạng thái</option>
                                        <option value="1">Option #1</option>
                                        <option value="2">Option #2</option>
                                        <option value="3">Option #3</option>
                                    </select>
                                </div>
                            </div><br>
                            <button type="button" class="btn btn-primary">Cập nhật đơn hàng</button>
                            </form>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Ngày giao hàng</label>
                                <div class="col-md-9">
                                    <input type="email" id="email-input" name="text-input" class="form-control" placeholder="Nhập ngày đặt hàng">
                                </div>
                            </div><br>

                            <div class="form-group row">
                            <label class="col-md-3 form-control-label" for="select">Hình thức thanh toán</label>
                            <div class="col-md-9">
                                <select id="select" name="select" class="form-control">
                                    <option value="0">Chọn hình thức</option>
                                    <option value="1">Option #1</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                </select>
                            </div>
                        	</div><br>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection