@extends('master')
@section('content')
    <form action="{{ action('TinTucController@postThem') }}" method="post" enctype="multipart/form-data"
          class="form-horizontal" name="tintuc">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Thêm tin tức</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                @if(session('success'))
                                    <div class="alert alert-success" style="width: 100%">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if(session('fail'))
                                    <div class="alert alert-danger" style="width: 100%">
                                        {{ session('fail') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-12">
                                <label>Nhập tiêu đề</label>
                                <input type="text" id="texttieude" name="texttieude" class="form-control"
                                       placeholder="Nhập tên tiêu đề bài viết" required>
                            </div>
                            <div class="col-12">
                                <label>Nhập URL</label>
                                <input type="text" name="textURL" id="textURL" class="form-control"
                                       placeholder="Nhập URL" required>
                            </div>
                            <div class="col-12">
                                <label>Chọn danh mục bài viết</label>
                                <select id="idmsdanhmucbaiviet" name="msdmbaiviet" class="form-control">
                                    @foreach($danhmuc as $index)
                                        <option value="{{ $index -> msdanhmucbaiviet }}">{{ $index -> tendanhmucbaiviet }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5> SEO </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <label>Search Title</label>
                                <input type="text" id="textSTitle" name="textSTitle" class="form-control"
                                       placeholder="Search Title">
                            </div>
                            <div class="col-12">
                                <label>Search Description</label>
                                <input type="text" id="textSURL" name="textSURL" class="form-control"
                                       placeholder="Search Description">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Nội dung </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($nhan as $index)
                            <div class="col-12">
                                <label>Tag</label>
                                <br>
                                <input type="text" name="texttag" class="form-control texttag" placeholder="Tag"
                                       value="{{ $index->tennhan }}" data-role="tagsinput" >
                                <br><br>
                            </div>
                            @endforeach
                            <div class="col-12" >
                                <label>Chọn ảnh đại diện</label>
                                <input type="text" id="luuurl" name="luuanh">
                                <button type="button" class="btn btn-primary" id="url" name="photo"
                                        onclick="openPopup()" style="padding-top: 1px; margin-bottom: 5px;"> Chọn
                                </button>
                                <br><br>
                            </div>
                            <div class="col-12">
                                <label>Nhập nội dung bài viết </label>
                                <textarea name="editor" id="editor" required></textarea>
                            </div>
                            <div class="col-12 float-right">
                                <br>
                                <button type="button" class="btn btn-warning">Lưu nháp</button>
                                <button type="submit" class="btn btn-primary" name="submittintuc">Đăng bài</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('linkscript')
    <script src="{{asset('ckeditor/ckeditor.js')}}" type="text/javascript"></script>
    <script src="{{asset('ckfinder/ckfinder.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap-tagsinput.js')}}" type="text/javascript"></script>
@endsection
@section('script')
    <script type="text/javascript">
        CKEDITOR.replace('editor', {
            height: '400px'
        });
        function openPopup() {
            CKFinder.popup({
                width: 800,
                height: 500,
                chooseFiles: true,
                resourceType: 'Images',
                onInit: function (finder) {
                    finder.on('files:choose', function (evt) {
                        var file = evt.data.files.first();
                        showUploadedImage(file.getUrl())
                    });
                    finder.on('file:choose:resizedImage', function (evt) {
                        showUploadedImage(evt.data.resizedUrl);
                    });
                }
            });
        }

        function showUploadedImage(url) {
            jQuery('#url').val(url);
            $('#luuurl').val(url);
            $('#anhdaidien').prop('src', url);
            var img = jQuery('<img>').attr('src', url);
            jQuery('#side-feature-img').html(img);
        }
        function string_to_slug(str) {
            str = str.replace(/^\s+|\s+$/g, ''); // trim
            str = str.toLowerCase();

            // remove accents, swap ñ for n, etc
            var from = "ấầẩẫậăắằẳẵặàáảãạäâèéẻẽẹëêếềểễệìíỉĩịïîýỳỷỹỵòóỏõọöôồốổỗộơớờởỡợùúủũụüưửữứừựûñçđ·/_,:;";
            var to   = "aaaaaaaaaaaaaaaaaaeeeeeeeeeeeeiiiiiiiyyyyyoooooooooooooooooouuuuuuuuuuuuuncd------";
            for (var i=0, l=from.length ; i<l ; i++) {
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
                if($(this).val() != null) {
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
            $('.texttag').tagsinput({
                tagClass: 'label label success'
            });
            $('.texttag').tagsinput('add', 'some tag');

            $(document).on('change, blur', '#textURL, #texttieude', function () {
                $.ajax({
                    type: 'POST',
                    url: 'them/AjaxCheckURL',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'url': $(this).val()
                    },

                }).done( function (data) {
                    if(data != ""){
                        alert(data)
                    }
                })
            })
        });
    </script>
@endsection