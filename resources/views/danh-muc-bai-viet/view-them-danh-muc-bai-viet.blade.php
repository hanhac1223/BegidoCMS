@extends('master')
@section('content')
    <form action="{{ action('TinTucController@postThem') }}" method="post" enctype="multipart/form-data"
          class="form-horizontal" name="tintuc">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Thêm Danh Mục</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <input type="text" id="texttieude" name="texttieude" class="form-control"
                                       placeholder="Nhập tên danh mục" required>
                                <br>
                            </div>
                            <div class="col-12">
                                <input type="text" name="textURL" id="textURL" class="form-control" disabled
                                       placeholder="URL danh mục" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Page Short Text </h4>
                    </div>
                    <textarea name="editor" id="editor1" required></textarea>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Page Text </h4>
                    </div>
                    <textarea name="editor" id="editor" required></textarea>
                </div>
            </div>
            <div class="col-12 float-right">
                <button type="button" class="btn btn-warning">Lưu nháp</button>
                <button type="submit" class="btn btn-primary" name="submittintuc">Đăng bài</button>
                <br>
                <br>
            </div>
        </div>
    </form>
@endsection
@section('srcScript')
    <script src="../citi_admin/ckeditor/ckeditor.js" type="text/javascript"></script>
    <script src="../citi_admin/ckfinder/ckfinder.js" type="text/javascript"></script>
    <script src="../citi_admin/js/bootstrap-tagsinput.js" type="text/javascript"></script>
    <script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
@endsection
@section('script')
    <script type="text/javascript">
        CKEDITOR.replace('editor1', {
            height: '150px'
        });
        CKEDITOR.replace('editor', {
            height: '400px'
        });

        function string_to_slug(str) {
            str = str.replace(/^\s+|\s+$/g, ''); // trim
            str = str.toLowerCase();

            // remove accents, swap ñ for n, etc
            var from = "ấầẩẫậăắằẳẵặàáảãạäâèéẻẽẹëêếềểễệìíỉĩịïîýỳỷỹỵòóỏõọöôồốổỗộơớờởỡợùúủũụüưửữứừựûñçđ·/_,:;";
            var to = "aaaaaaaaaaaaaaaaaaeeeeeeeeeeeeiiiiiiiyyyyyoooooooooooooooooouuuuuuuuuuuuuncd------";
            for (var i = 0, l = from.length; i < l; i++) {
                str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
            }

            str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
                .replace(/\s+/g, '-') // collapse whitespace and replace by -
                .replace(/-+/g, '-'); // collapse dashes

            return str;
        }

        $(document).ready(function () {
            $('#texttieude').change(function () {
                var Text = $(this).val();
                var val = string_to_slug(Text);
                if ($(this).val() != null) {
                    $('#textURL').val(val);
                    $('#textSTitle').val($(this).val());
                    $('#textSURL').val($(this).val());
                }
                else {
                    $('#textURL').val("");
                    $('#textSTitle').val($(this).val());
                    $('#textSURL').val($(this).val());
                }
            });
        });
    </script>
@endsection