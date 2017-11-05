<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Begido CMS</title>
    <link href="{!!  asset('citi_admin/css/bootstrap.css')  !!}" rel="stylesheet">
    <link href="{!!  asset('citi_admin/css/style.css')  !!}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<<<<<<< HEAD
=======

>>>>>>> d411ae29da2e98d32a81ff88fce44d274b664635
    <script src="{!!  asset('citi_admin/js/jquery.min.js')  !!}"></script>
    <script src="{!!  asset('citi_admin/js/bootstrap.min.js') !!}"></script>
    <script src="{!!  asset('citi_admin/js/popper.min.js') !!}"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Begido CMS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tin tức
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{!! asset('tintuc/them') !!}">Thêm tin tức</a>
                    <a class="dropdown-item" href="{!! asset('tintuc') !!}">Danh sách tin tức</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Admin
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Thông tin</a>
                    <a class="dropdown-item" href="#">Tìm kiếm</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Đăng xuất</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid">
    @yield('content')
</div>
</body>
<<<<<<< HEAD
</html>
<script src="{!!  asset('citi_admin/js/jquery.min.js')  !!}"></script>
<script src="{!!  asset('citi_admin/js/popper.min.js') !!}"></script>
<script src="{!!  asset('citi_admin/js/bootstrap.min.js') !!}"></script>
=======
</html>
>>>>>>> 729caebea0270e524998dadfad79837f5b646520
