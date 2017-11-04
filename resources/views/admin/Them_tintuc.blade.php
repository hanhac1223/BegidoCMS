@extends('admin.master')
@section('content')
    <form action="{{ action('TinTucController@postThem') }}" method="post" enctype="multipart/form-data"
          class="form-horizontal" name="tintuc">
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
                                       placeholder="Nhập tên tiêu đề bài viết" required>
                            </div>
                            <div class="col-12">
                                <label>Nhập URL</label>
                                <input type="text" name="textURL" class="form-control"
                                       placeholder="Nhập URL" required>
                            </div>
                            <div class="col-12">
                                <label>Search Title</label>
                                <input type="text" id="Search" name="textSTitle" class="form-control"
                                       placeholder="Search Title">
                            </div>
                            <div class="col-12">
                                <label>Search Description</label>
                                <input type="text" id="Description" name="textSURL" class="form-control"
                                       placeholder="Search Description">
                            </div>
                            <div class="col-12">
                                <label>Tag</label>
                                <input type="text" name="texttag" class="form-control" placeholder="Tag">
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
                                <label>Chọn ảnh đại diện -- </label>
                                <input id="url" onclick="openPopup()" name="photo" type="text"><br>
                                <img src="" alt="" id="anhdaidien" style="height: 40px; width: 50px" >
                            </div>
                            <div class="col-12">
                                <label>Nhập nội dung bài viết </label>
                                <textarea class="editor" name="editor" required></textarea>
                            </div>
                            <div class="col-12 float-right">
                                <br>
                                <button type="button" class="btn btn-warning">Lưu nháp</button>
                                <button type="submit" class="btn btn-primary" name="submittintuc">Đăng bài</button>
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
    <script type="text/javascript">
        function openPopup() {
            CKFinder.popup( {
                // Configure CKFinder's popup size.
                width: 800,
                height: 500,
                // Enable file choose mechanism.
                chooseFiles: true,
                // Restrict user to choose only from Images resource type.
                resourceType: 'Images',
                // Add handler for events that are fired when user select's file.
                onInit: function( finder ) {
                    // User selects original image.
                    finder.on( 'files:choose', function( evt ) {
                        // Get first file because user might select multiple files
                        var file = evt.data.files.first();
                        showUploadedImage( file.getUrl() )
                    } );

                    // User selects resized image.
                    finder.on( 'file:choose:resizedImage', function( evt ) {
                        showUploadedImage( evt.data.resizedUrl );
                    } );
                }
            } );
        }

        function showUploadedImage( url ) {
            // Update field's value
            jQuery( '#url' ).val( url );
            $('#anhdaidien').prop('src', url);
            // Show chosen image
            var img = jQuery( '<img>' ).attr( 'src', url );
            jQuery( '#side-feature-img' ).html( img );
        }
    </script>
    <script src="../lib/jquery.js"></script>
    <script src="../dist/jquery.validate.js"></script>
@endsection