@extends('admin.master')
@section('content')
    <form action="{{ action('TinTucController@postUpdateTinTuc') }}" method="post" enctype="multipart/form-data"
          class="form-horizontal" name="capnhattintuc">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Thêm tin tức</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($data as $rex)
                                <div class="col-12">
                                    @if(session('oject'))
                                        <div class="alert alert-success" style="width: 100%">
                                            {{ session('oject') }}
                                        </div>
                                    @endif
                                    @if(session('non-oject'))
                                        <div class="alert alert-danger" style="width: 100%">
                                            {{ session('non-oject') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-12">
                                    <label>Nhập tiêu đề</label>
                                    <input type="text" id="texttieude" name="texttieude" class="form-control"
                                           placeholder="Nhập tên tiêu đề bài viết" value="{{ $rex -> tieude }}"
                                           required>
                                    <input type="hidden" value="{{ $rex -> msbaiviet }}" name="msbaiviet">
                                    <br>
                                </div>
                                <div class="col-12">
                                    <label>Nhập URL</label>
                                    <input type="text" name="textURL" id="textURL" class="form-control"
                                           placeholder="Nhập URL" value="{!! $rex->url !!}" required>
                                    <br>
                                </div>
                                <div class="col-6">
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
                        <h4> Search </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <label>Search Title</label>
                                <input type="text" id="textSTitle" name="textSTitle" class="form-control"
                                       placeholder="Search Title" value="{!! $rex->searchtitle !!}">
                                <br>
                            </div>
                            <div class="col-12">
                                <label>Search Description</label>
                                <input type="text" id="textSURL" name="textSURL" class="form-control"
                                       placeholder="Search Description" value="{!! $rex->searchdescription !!}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4> General </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <label>Tag</label><br>
                                <input type="text" name="texttag" class="form-control texttag" placeholder="Tag"
                                       value="{!! $rex->nhan !!}" data-role="tagsinput">
                                <br><br>
                            </div>
                            <div class="col-12">
                                <label>Chọn ảnh đại diện</label>
                                <br>
                                <button type="button" class="btn btn-warning" id="url" name="photo"
                                        onclick="openPopup()"> Chọn
                                </button>
                            </div>
                            <div class="col-12">
                                <div style="border: 1px solid #ececec; margin-top: 5px">
                                    <input type="hidden" id="luuurl" name="luuanh" value="{!! $rex->anhdaidien !!}">
                                    <img src="{!! $rex->anhdaidien !!}" alt="" id="anhdaidien" name="anhdaidien"
                                         class="rounded mx-auto d-block"
                                         style="height: 300px; padding: 3px; ">
                                </div>
                                <br>
                            </div>
                            <div class="col-12">
                                <label>Nhập nội dung bài viết </label>
                                <textarea name="editor" id="editor" required>{!! $rex->noidung !!}</textarea>
                            </div>
                            <div class="col-12 float-right">
                                <br>
                                <button type="button" class="btn btn-warning">Lưu nháp</button>
                                <button type="submit" class="btn btn-primary" name="submittintuc">Cập nhật</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </form>
@endsection
@section('srcScript')
    <script src="{!! asset('citi_admin/ckeditor/ckeditor.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('citi_admin/ckfinder/ckfinder.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('citi_admin/js/bootstrap-tagsinput.js') !!}" type="text/javascript"></script>
    <script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
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
            $('.texttag').tagsinput({
                tagClass: 'label label success'
            });
            $('.texttag').tagsinput('add', 'some tag');
        });
    </script>
@endsection