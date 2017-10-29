@extends('admin.master')

@section('content')

    @foreach($user as $a)
        {{ $a->TENDANHMUCSANPHAM  }}
        @endforeach

<div class="animated fadeIn">
    <div class="card">
        <div class="card-header">
            <h4>Tất cả sản phẩm</h4>
        </div>
        <div class="card-body">
            <button type="button" class="btn btn-primary">Thêm sản phẩm mới</button>
            <table class="table table-striped table-bordered datatable">
                <thead>
                    <tr>
                        <th>Mã sản phẩm</th>
                        <th>Ảnh</th>
                        <th>Thương hiệu</th>
                        <th>Đối tượng sử dụng</th>
                        <th>Xuất sứ</th>
                        <th>Bảo hành</th>
                        <th>Lượt xem</th>
                        <th>Giá (VNĐ)</th>
                        <th>Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>5180/1R-001 2017</td>
                        <td>
                            <img width="60" height="60" src="{!!  asset('citi_admin/img/dong-ho-Patek-Philippe-5180-1R-001.jpg')  !!}" alt="admin@bootstrapmaster.com">
                        </td>
                        <td>Đồng hồ Patek Philippe</td>
                        <td>Nam</td>
                        <td>
                            Thụy Sỹ
                        </td>
                        <td>2</td>
                        <td>0</td>
                        <td>2,160,000,000</td>
                        <td>
                            <a class="btn btn-info" href="Chinhsuattsp.html">
                                <i class="fa fa-edit "></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="fa fa-trash-o "></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>01 774 7717 4154-07 8 24 50</td>
                        <td>
                            <img width="60" height="60" src="{!!  asset('citi_admin/img/dong-ho-oris-01-774-7717-4154-07-8-24-50.jpg.jpg')  !!}" alt="admin@bootstrapmaster.com">
                        </td>
                        <td>Đồng hồ Oris</td>
                        <td>Nam</td>
                        <td>
                            Thụy Sỹ
                        </td>
                        <td>2</td>
                        <td>0</td>
                        <td>75,995,000</td>
                        <td>
                            <a class="btn btn-info" href="Chinhsuattsp.html">
                                <i class="fa fa-edit "></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="fa fa-trash-o "></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>01 774 7717 4154-07 4 24 50</td>
                        <td>
                            <img width="60" height="60" src="{!!  asset('citi_admin/img/dong-ho-oris-01-774-7717-4154-07-4-24-50.jpg')  !!}" alt="admin@bootstrapmaster.com">
                        </td>
                        <td>Đồng hồ Oris</td>
                        <td>Nam</td>
                        <td>
                            Thụy Sỹ
                        </td>
                        <td>2</td>
                        <td>0</td>
                        <td>73,597,000</td>
                        <td>
                            <a class="btn btn-info" href="Chinhsuattsp.html">
                                <i class="fa fa-edit "></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="fa fa-trash-o "></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>AN3560-51E</td>
                        <td>
                            <img width="60" height="60" src="{!!  asset('citi_admin/img/AN3560-51E.jpg" alt="admin@bootstrapmaster.com')  !!}">
                        </td>
                        <td>Đồng hồ Citizen</td>
                        <td>Nam</td>
                        <td>
                            Nhật
                        </td>
                        <td>2</td>
                        <td>0</td>
                        <td>3,840,000</td>
                        <td>
                            <a class="btn btn-info" href="Chinhsuattsp.html">
                                <i class="fa fa-edit "></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="fa fa-trash-o "></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>YNS107</td>
                        <td>
                            <img width="60" height="60" src="{!!  asset('citi_admin/img/casio-vintage-women-s-silver-stainless-steel-strap-watch-ltp-1130a-7ardf-873-700x700.jpg" alt="admin@bootstrapmaster.com')  !!}">
                        </td>
                        <td>Đồng hồ Swatch</td>
                        <td>Nữ</td>
                        <td>
                            Thụy Sỹ
                        </td>
                        <td>1</td>
                        <td>0</td>
                        <td>3,652,000</td>
                        <td>
                            <a class="btn btn-info" href="Chinhsuattsp.html">
                                <i class="fa fa-edit "></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="fa fa-trash-o "></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>LTP-1130A-7ARDF</td>
                        <td>
                            <img width="60" height="60" src="{!!  asset('citi_admin/img/MTP-1130A-7A-0.jpg" alt="admin@bootstrapmaster.com')  !!}">
                        </td>
                        <td>Đồng hồ Casio</td>
                        <td>Nữ</td>
                        <td>
                            Nhật
                        </td>
                        <td>1</td>
                        <td>0</td>
                        <td>920,000</td>
                        <td>
                            <a class="btn btn-info" href="Chinhsuattsp.html">
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