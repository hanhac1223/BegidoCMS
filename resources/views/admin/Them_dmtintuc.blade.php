@extends('admin.master')
@section('content')
<div class="animated fadeIn">
    <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="card">
            <div class="card-header">
                <h4>Thêm danh mục tin tức</h4>
            </div>
            <div class="card-body">
                <label>Tên danh mục</label>
                <input type="text" id="text-input" name="text-input" class="form-control" placeholder="Nhập tên danh mục">
                <span class="help-block"><i>Tên riêng sẽ hiển thị trên trang mạng của bạn.</i></span><br><br>

                <label>Chuổi đường dẫn tĩnh</label>
                <input type="text" id="text-input" name="text-input" class="form-control" placeholder="Nhập chuổi đường dẫn">
                <span class="help-block"><i>Chuỗi cho đường dẫn tĩnh là phiên bản của tên hợp chuẩn với Đường dẫn (URL). Chuỗi này bao gồm chữ cái thường, số và dấu gạch ngang (-).</i></span><br><br>

                <label>Danh mục cha</label>
                <select id="select" name="select" class="form-control">
                        <option value="0">Please select</option>
                        <option value="1">Option #1</option>
                        <option value="2">Option #2</option>
                        <option value="3">Option #3</option>
                </select>
                <span class="help-block"><i>Chuyên mục khác với thẻ, bạn có thể sử dụng nhiều cấp chuyên mục. Ví dụ: Trong chuyên mục nhạc, bạn có chuyên mục con là nhạc Pop, nhạc Jazz. Việc này hoàn toàn là tùy theo ý bạn.</i></span><br><br>

                <label>Mô tả</label>
                <textarea id="textarea-input" name="textarea-input" rows="9" class="form-control" placeholder="Nhập.."></textarea>
                <span class="help-block"><i>Mô tả bình thường không được sử dụng trong giao diện, tuy nhiên có vài giao diện hiện thị mô tả này.</i></span><br><br>

                <button type="button" class="btn btn-primary">Thêm danh mục</button>
            </div>
        </div>
    </form>
</div>

@endsection