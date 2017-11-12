@extends('master')
@section('content')
    <div class="row">
        <div class="col-12">
            @if(session('thanhCong'))
                <div class="alert alert-success" style="width: 100%">
                    {{ session('thanhCong') }}
                </div>
            @endif
            @if(session('thatBai'))
                <div class="alert alert-danger" style="width: 100%">
                    {{ session('thatBai') }}
                </div>
            @endif
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6>Thêm nhãn</h6>
                </div>
                <div class="card-body">
                    <form action="{{ action('NhanController@postThem') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-6">
                                <label for="">Tên nhãn</label>
                                <input type="text" class="form-control" name="tenNhan">
                            </div>
                            <div class="col-6">
                                <label for="">URL</label>
                                <input type="text" class="form-control" name="urlNhan">
                            </div>
                            <div class="col-12">
                                <br>
                                <button type="submit" class="btn btn-success">Thêm nhãn</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6>Danh sách nhãn</h6>
                </div>
                <div class="card-body">
                    <div class="row" style="margin-top: 5px" ;>
                        <div class="col-12">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Tiêu đề</th>
                                    <th>URL</th>
                                    <th class="text-center w-15">Tác vụ</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($danhSach as $item)
                                    <tr>
                                        <td>{{ $item->tennhan  }}</td>
                                        <td> {{ $item->urlnhan  }}</td>
                                        <td class="text-center">
                                            <a class="btn btn-info btn-table" href="tin-tuc/cap-nhat/">
                                                <i class="fa fa-edit "></i>
                                            </a>
                                            <a class="btn btn-danger btn-table" href="tin-tuc/xoa/">
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
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('.open-modal-them').click(function () {
                $('#modal-them').modal('show');
            })
        });
    </script>
@endsection
