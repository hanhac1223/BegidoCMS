@extends('admin.master')
@section('content')
<div class="card">
<div class="card-header">
    <h4>Tất cả bài viết</h4>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-md-12">
            
    <button type="button" class="btn btn-primary">Thêm bài viết mới</button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
             <table class="table table-striped table-bordered datatable">
        <thead>
            <tr>
                <th>Tiêu đề</th>
                <th>Ngày thêm</th>
                <th>Tác giả</th>
                <th>Danh mục</th>
                <th>Lượt xem</th>
                <th>Tác vụ</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Đồng hồ Patek Philippe</td>
                <td>2012/01/01</td>
                <td>Admin</td>
                <td>
                    Đồng hồ cao cấp
                </td>
                <td>0</td>
                <td>
                    <a class="btn btn-info" href="Chinhsua_baiviet.html">
                        <i class="fa fa-edit "></i>
                    </a>
                    <a class="btn btn-danger" href="#">
                        <i class="fa fa-trash-o "></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>Đồng hồ Audemars Piguet</td>
                <td>2012/01/01</td>
                <td>Admin</td>
                <td>
                    Đồng hồ cao cấp
                </td>
                <td>0</td>
                <td>
                    <a class="btn btn-info" href="Chinhsua_baiviet.html">
                        <i class="fa fa-edit "></i>
                    </a>
                    <a class="btn btn-danger" href="#">
                        <i class="fa fa-trash-o "></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>Đồng hồ Oris</td>
                <td>2012/01/01</td>
                <td>Admin</td>
                <td>
                    Đồng hồ Thụy Sỹ
                </td>
                <td>0</td>
                <td>
                    <a class="btn btn-info" href="Chinhsua_baiviet.html">
                        <i class="fa fa-edit "></i>
                    </a>
                    <a class="btn btn-danger" href="#">
                        <i class="fa fa-trash-o "></i>
                    </a>
                </td>

            </tr>
            <tr>
                <td>Đồng hồ Titoni</td>
                <td>2012/01/01</td>
                <td>Admin</td>
                <td>
                    Đồng hồ Thụy Sỹ
                </td>
                <td>0</td>
                <td>
                    <a class="btn btn-info" href="Chinhsua_baiviet.html">
                        <i class="fa fa-edit "></i>
                    </a>
                    <a class="btn btn-danger" href="#">
                        <i class="fa fa-trash-o "></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>Đồng hồ Rado</td>
                <td>2012/02/01</td>
                <td>Admin</td>
                <td>
                    Đồng hồ Thụy Sỹ
                </td>
                <td>0</td>
                <td>
                    <a class="btn btn-info" href="Chinhsua_baiviet.html">
                        <i class="fa fa-edit "></i>
                    </a>
                    <a class="btn btn-danger" href="#">
                        <i class="fa fa-trash-o "></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>Đồng hồ Casio</td>
                <td>2012/02/01</td>
                <td>Admin</td>
                <td>
                    Đồng hồ Nhật
                </td>
                <td>0</td>
                <td>
                    <a class="btn btn-info" href="Chinhsua_baiviet.html">
                        <i class="fa fa-edit "></i>
                    </a>
                    <a class="btn btn-danger" href="#">
                        <i class="fa fa-trash-o "></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>Đồng hồ Swatch</td>
                <td>2012/02/01</td>
                <td>Admin</td>
                <td>
                    Đồng hồ thời trang
                </td>
                <td>0</td>
                <td>
                    <a class="btn btn-info" href="Chinhsua_baiviet.html">
                        <i class="fa fa-edit "></i>
                    </a>
                    <a class="btn btn-danger" href="#">
                        <i class="fa fa-trash-o "></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>Đồng hồ Citizen</td>
                <td>2012/02/01</td>
                <td>Admin</td>
                <td>
                    Đồng hồ Nhật
                </td>
                <td>0</td>
                <td>
                    <a class="btn btn-info" href="Chinhsua_baiviet.html">
                        <i class="fa fa-edit "></i>
                    </a>
                    <a class="btn btn-danger" href="#">
                        <i class="fa fa-trash-o "></i>
                    </a>
                </td>
            </tr>
            
        </tbody>
    </table>
        </div>
    </div>
   
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
@endsection