@extends('admin.master')
@section('content')
<div class="animated fadeIn">
    <div class="card">
        <div class="card-header">
            <h4>Tất cả danh mục sản phẩm</h4>
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
                        <td>Đồng hồ nam</td>
                        <td>2012/01/01</td>
                        <td>Admin</td>
                        <td>
                            ...
                        </td>
                        <td>dong-ho-nam</td>
                        <td>
                            <a class="btn btn-info" href="Chinhsuadmsp.html">
                                <i class="fa fa-edit "></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="fa fa-trash-o "></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Đồng hồ nữ</td>
                        <td>2012/01/01</td>
                        <td>Admin</td>
                        <td>
                            ...
                        </td>
                        <td>dong-ho-nu</td>
                        <td>
                            <a class="btn btn-info" href="Chinhsuadmsp.html">
                                <i class="fa fa-edit "></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="fa fa-trash-o "></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Đồng hồ đôi</td>
                        <td>2012/01/01</td>
                        <td>Admin</td>
                        <td>
                            ...
                        </td>
                        <td>dong-ho-doi</td>
                        <td>
                            <a class="btn btn-info" href="Chinhsuadmsp.html">
                                <i class="fa fa-edit "></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="fa fa-trash-o "></i>
                            </a>
                        </td>

                    </tr>
                    <tr>
                        <td>Sản phẩm hot</td>
                        <td>2012/01/01</td>
                        <td>Admin</td>
                        <td>
                            ...
                        </td>
                        <td>san-pham-hot</td>
                        <td>
                            <a class="btn btn-info" href="Chinhsuadmsp.html">
                                <i class="fa fa-edit "></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="fa fa-trash-o "></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Sản phẩm mới</td>
                        <td>2012/02/01</td>
                        <td>Admin</td>
                        <td>
                            ...
                        </td>
                        <td>Themdanhmucsp.html</td>
                        <td>
                            <a class="btn btn-info" href="Chinhsuadmsp.html">
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