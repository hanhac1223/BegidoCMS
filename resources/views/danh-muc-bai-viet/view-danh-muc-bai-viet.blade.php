@extends('master')
@section('content')
    <div class="card-body">
        <div class="row">
            <input class="form-control col-6" type="text" placeholder="Tìm kiếm...">
            <a  class="btn btn-primary" href="{!! asset('danh-muc/them') !!}"><button type="button" class="btn btn-primary">Thêm danh mục</button></a>
        </div>
        <br>
        <div class="row">
            <table class="table table-striped table-bordered datatable">
                <thead>
                <tr>
                    <th class="text-center">Tên danh mục bài viết</th>
                    <th class="text-center">Url danh mục</th>
                    <th class="text-center">Short text</th>
                    <th class="text-center">Page text</th>
                    <th class="text-center">Tổng bài viết</th>
                    <th class="text-center">Tác vụ</th>
                </tr>
                </thead>
                <tbody>
                @foreach($danhmuc as $dm)
                    <tr>
                        <td>{{ \Illuminate\Support\Str::words($dm->tendanhmucbaiviet, 15) }}</td>
                        <td>{{ $dm->urldanhmucbaiviet }}</td>
                        <td>{{ \Illuminate\Support\Str::words($dm->shorttextdanhmuc, 15) }}</td>
                        <td>{{ \Illuminate\Support\Str::words($dm->pagetextdanhmuc, 15) }}</td>
                        <td>{{ $dm->tongbaiviet }}</td>
                        <td>
                            <a class="btn btn-info" href="Chinhsua_dmbv.html">
                                <i class="fa fa-edit "></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="fa fa-trash-o "></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
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
    <script>

    </script>
@endsection