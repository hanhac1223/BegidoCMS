@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tất cả bài viết</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-primary" href="{!! asset('tin-tuc/them') !!}">Thêm bài viết mới</a>
                </div>
            </div>
            <div class="row" style="margin-top: 5px" ;>
                <div class="col-md-12">
                    <table class="table table-striped table-bordered datatable">
                        <thead>
                        <tr>
                            <th class="text-center tieu-de">Tiêu đề</th>
                            <th class="text-center">Ngày tạo</th>
                            <th class="text-center">Tác giả</th>
                            <th class="text-center">Danh mục</th>
                            <th class="text-center">Lượt xem</th>
                            <th class="text-center">Trạng thái</th>
                            <th class="text-center">Tác vụ</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($danhmuc as $baiviet)
                            <tr class="font-family">
                                <td>
                                    <div class="row">
                                        <div class="noi-dung-tieu-de">
                                            {{ \Illuminate\Support\Str::words($baiviet->tieude, 15) }}
                                        </div>
                                        <div class="noi-dung-tieu-de">
                                            <a href="tin-tuc/cap-nhat/{{$baiviet->msbaiviet}}"
                                               style="font-size: 10px;">{{ \Illuminate\Support\Str::words($baiviet->url, 15) }}</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">{{\Carbon\Carbon::parse($baiviet->ngaytaobaiviet )->format('d/m/Y')}}</td>
                                <td class="text-center">{{ $baiviet->tenuser }}</td>
                                <td class="text-center">{{ $baiviet->tendanhmucbaiviet }}</td>
                                <td class="text-center">{{ $baiviet->luotxem }}</td>
                                <td class="text-center">
                                    @if( $baiviet->trangthai ==1 )
                                        <button class="form-control btn-success btn-public"
                                                value="{{ $baiviet->msbaiviet }}" data="{{ $baiviet->trangthai }}">
                                            Public
                                        </button>
                                    @else
                                        <button class="form-control btn-danger btn-public"
                                                value="{{ $baiviet->msbaiviet }}" data="{{ $baiviet->trangthai }}">
                                            Unpublic
                                        </button>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-info" href="tin-tuc/cap-nhat/{{$baiviet->msbaiviet}}">
                                        <i class="fa fa-edit "></i>
                                    </a>
                                    <a class="btn btn-danger" href="tin-tuc/xoa/{{$baiviet->msbaiviet}}">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.btn-public').click(function () {
                var trangthai;
                if ($(this).attr('data') == 1) trangthai = 0;
                else trangthai = 1;
                $.ajax({
                    type: 'POST',
                    url: 'tin-tuc/cap-nhat-trang-thai',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": $(this).val(),
                        "trangthai": trangthai
                    },
                })
                    .done(function (data) {
                        location.reload();
                    });
            });
        });
    </script>
@endsection