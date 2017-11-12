@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tất cả bài viết</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <a  class="btn btn-primary" href="{!! asset('tintuc/them') !!}">Thêm bài viết mới</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-bordered datatable">
                        <thead>
                        <tr>
                            <th >Tiêu đề</th>
                            <th>Ngày tạo bài viết</th>
                            <th>Tác giả</th>
                            <th>Danh mục</th>
                            <th>Lượt xem</th>
                            <th>Trạng thái</th>
                            <th>Tác vụ</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($danhmuc as $baiviet)
                            <tr>
                                <td style="width: 500px;">{{ $baiviet->tieude }}</td>
                                <td>{{ $baiviet->ngaytaobaiviet }}</td>
                                <td>{{ $baiviet->tenuser }}</td>
                                <td>
                                    {{ $baiviet->tendanhmucbaiviet }}
                                </td>
                                <td>{{ $baiviet->luotxem }}</td>
                                <td>
                                    @if( $baiviet->trangthai ==1 )
                                        <button class="form-control btn-success btn-public" value="{{ $baiviet->msbaiviet }}" data="{{ $baiviet->trangthai }}">Public</button>
                                    @else
                                        <button class="form-control btn-danger btn-public" value="{{ $baiviet->msbaiviet }}" data="{{ $baiviet->trangthai }}">Unpublic</button>
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-info" href="tintuc/capnhat/{{ $baiviet->msbaiviet }}">
                                        <i class="fa fa-edit "></i>
                                    </a>
                                    <a class="btn btn-danger" href="tintuc/xoa/{{ $baiviet->msbaiviet }}">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
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
    <script>
        $(document).ready(function () {
            $('.btn-public').click(function () {
                var trangthai;
                if($(this).attr('data') == 1) trangthai=0;
                else trangthai=1;
                $.ajax({
                    type: 'POST',
                    url: 'tintuc/capnhattrangthai',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": $(this).val(),
                        "trangthai": trangthai
                    },
                })
                    .done(function(data) {
                    location.reload();
                });
            });
        });
    </script>
@endsection