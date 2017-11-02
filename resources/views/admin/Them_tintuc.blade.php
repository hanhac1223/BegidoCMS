@extends('admin.master')
@section('content')
    <form action="{{ action('TinTucController@postThem') }}" method="post" enctype="multipart/form-data"
          class="form-horizontal">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Thêm tin tức</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <label>Nhập tiêu đề</label>
                                <input type="text" id="texttieude" name="texttieude" class="form-control"
                                       placeholder="Nhập tên tiêu đề bài viết">
                            </div>
                            <div class="col-12">
                                <label>Nhập URL</label>
                                <input type="text" id="textURL" name="textURL" class="form-control"
                                       placeholder="Nhập URL">
                            </div>
                            <div class="col-12">
                                <label>Search Title</label>
                                <input type="text" id="Search" name="textURL" class="form-control"
                                       placeholder="Search Title">
                            </div>
                            <div class="col-12">
                                <label>Search Description</label>
                                <input type="text" id="Description" name="textURL" class="form-control"
                                       placeholder="Search Description">
                            </div>
                            <div class="col-12">
                                <label>Tag</label>
                                <input type="text" id="textURL" name="textURL" class="form-control" placeholder="Tag">
                            </div>
                            <div class="col-6">
                                <label>Chọn danh mục bài viết</label>
                                <select id="idmsdanhmucbaiviet" name="msdmbaiviet" class="form-control">
                                    @foreach($danhmuc as $index)
                                        <option value="{{ $index -> msdanhmucbaiviet }}">{{ $index -> tendanhmucbaiviet }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6">
                                <label>Ảnh bài viết</label>
                                <img src="" alt="">
                            </div>
                            <div class="col-12">
                                <label>Nhập nội dung bài viết </label>
                                <textarea class="editor" name="editor"></textarea>
                            </div>
                            <div class="col-12 float-right">
                                <br>
                                <button type="button" class="btn btn-warning">Lưu nháp</button>
                                <button type="submit" class="btn btn-primary">Đăng bài</button>
                            </div>
                            @if(session('success'))
                                <div class="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="../citi_admin/ckeditor/ckeditor.js"></script>
    <script src="../citi_admin/ckfinder/ckfinder.js"></script>

    <script>
        CKEDITOR.replace('editor', {
            height: '400px'
        });
    </script>

@endsection