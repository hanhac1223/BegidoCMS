@extends('admin.master')
@section('content')
 <div class="animated fadeIn">
    <div class="card">
        <div class="card-header">
            <h4>Chỉnh sửa hồ sơ thành viên</h4>
        </div>
        <div class="card-body">
            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">

                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="email-input">Email (bắt buộc)</label>
                    <div class="col-md-9">
                        <input type="email" id="email-input" name="email-input" class="form-control" placeholder="Nhập Email">
                    </div>
                </div><br>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="text-input">Tên </label>
                    <div class="col-md-9">
                        <input type="text" id="text-input" name="text-input" class="form-control" placeholder="Nhập tên">
                    </div>
                </div><br>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="text-input">Họ </label>
                    <div class="col-md-9">
                        <input type="text" id="text-input" name="text-input" class="form-control" placeholder="Nhập tên họ">
                    </div>
                </div><br>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="select">Vai trò</label>
                    <div class="col-md-9">
                        <select id="select" name="select" class="form-control">
                            <option value="0">Chọn vai trò</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                        </select>
                    </div>
                </div><br>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label">Gửi thông báo đến thành viên</label>
                    <div class="col-md-9">
                        <label class="checkbox-inline" for="inline-checkbox1">
                            <input type="checkbox" id="inline-checkbox1" name="inline-checkbox1" value="option1"> Gửi cho thành viên một email chứa thông tin tài khoản của họ.
                        </label>
                    </div>
                </div><br>
                <button type="button" class="btn btn-primary">Cập nhật hồ sơ</button>
            </form>
        </div>
    </div>
</div>
@endsection