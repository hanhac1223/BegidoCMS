<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Begido CMS</title>
    <link href="{!!  asset('css/bootstrap.css')  !!}" rel="stylesheet">
    <link href="{!!  asset('css/style.css')  !!}" rel="stylesheet">
    <link href="{!!  asset('css/bootstrap-tagsinput.css')  !!}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{url('/')}}">Begido CMS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav" style="margin-left: 20px;">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tin tức
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{!! url('tin-tuc') !!}">Danh sách tin tức</a>
                    <a class="dropdown-item" href="{!! url('tin-tuc/them') !!}">Thêm tin tức</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Danh mục
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{!! url('tin-tuc') !!}">Danh sách tin tức</a>
                    <a class="dropdown-item" href="{!! url('tin-tuc/them') !!}">Thêm danh mục</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Nhãn
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{!! url('tin-tuc') !!}">Danh sách nhãn</a>
                    <a class="dropdown-item" href="{!! url('tin-tuc/them') !!}">Thêm nhãn</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{url('dang-xuat')}}">Đăng xuất</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid" style="padding-top: 10px;">
    @yield('content')
</div>
</body>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{asset('js/tether.min.js')}}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
@yield('linkscript')
@yield('script')
