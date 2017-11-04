@extends('admin.master')
@section('content')
<div class="animated fadeIn">
    <div class="card">
        <div class="card-header">
            <h4>Tất cả đơn hàng</h4>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered datatable">
                <thead>
                    <tr>
                        <th>Đơn hàng</th>
                        <th>Địa chỉ nhận</th>
                        <th>Ngày đặt hàng</th>
                        <th>Ngày giao hàng</th>
                        <th>Tổng giá đơn hàng</th>
                        <th>Hình thức thanh toán</th>
                        <th>Trạng thái</th>
                        <th>Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                     	<td><a href="#">#330 </a>by Chip <br> <a href="#">chiphoi@gmail.com</a></td>
                     	<td>1/2/3/5 số nhà</td>
                     	<td>30/12/2016</td>
                     	<td>16/1/2017</td>
                     	<td>245.000đ</td>
                     	<td>Tiền mặt khi giao hàng</td>
                     	<td>Chờ giao hàng</td>
                     	<td><a class="btn btn-info" href="Chinhsua_thanhvien.html">
                                <i class="fa fa-edit "></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="fa fa-trash-o "></i>
                            </a></td>
                    </tr>
                </tbody>
            </table>
            <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Prev</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">Next</a>
                        </li>
            </ul>
        </div>
    </div>
</div>
@endsection