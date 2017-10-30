@extends('admin.master')
@section('content')
<div class="animated fadeIn">
    <div class="card">
        <div class="card-header">
            <h4>Tất cả danh mục tin tức</h4>
        </div>
        <div class="card-body">
            <button type="button" class="btn btn-primary">Thêm danh mục</button>
            <table class="table table-striped table-bordered datatable">
                <thead>
                    <tr>
                        <th>Tiêu đề</th>
                        <th>Ngày thêm</th>
                        <th>Tác giả</th>
                        <th>Mô tả</th>
                        <th>Chuổi đường dẫn tĩnh</th>
                        <th>Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Đồng hồ cao cấp</td>
                        <td>2012/01/01</td>
                        <td>Admin</td>
                        <td>
                            ...
                        </td>
                        <td>dong-ho-cao-cap</td>
                        <td>
                            <a class="btn btn-info" href="Chinhsua_dmbv.html">
                                <i class="fa fa-edit "></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="fa fa-trash-o "></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Đồng hồ Thụy Sỹ</td>
                        <td>2012/01/01</td>
                        <td>Admin</td>
                        <td>
                            ...
                        </td>
                        <td>dong-ho-thuy-sy</td>
                        <td>
                            <a class="btn btn-info" href="Chinhsua_dmbv.html">
                                <i class="fa fa-edit "></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="fa fa-trash-o "></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Đồng hồ Nhật</td>
                        <td>2012/01/01</td>
                        <td>Admin</td>
                        <td>
                            ...
                        </td>
                        <td>dong-ho-nhat</td>
                        <td>
                            <a class="btn btn-info" href="Chinhsua_dmbv.html">
                                <i class="fa fa-edit "></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="fa fa-trash-o "></i>
                            </a>
                        </td>

                    </tr>
                    <tr>
                        <td>Đồng hồ thời trang</td>
                        <td>2012/01/01</td>
                        <td>Admin</td>
                        <td>
                            ...
                        </td>
                        <td>dong-ho-thoi-trang</td>
                        <td>
                            <a class="btn btn-info" href="Chinhsua_dmbv.html">
                                <i class="fa fa-edit "></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="fa fa-trash-o "></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Phụ kiện</td>
                        <td>2012/02/01</td>
                        <td>Admin</td>
                        <td>
                            ...
                        </td>
                        <td>phu-kien</td>
                        <td>
                            <a class="btn btn-info" href="Chinhsua_dmbv.html">
                                <i class="fa fa-edit "></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="fa fa-trash-o "></i>
                            </a>
                        </td>
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