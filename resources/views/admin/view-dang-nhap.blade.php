<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Begido CMS</title>
    <link href="{!!  asset('citi_admin/css/bootstrap.css')  !!}" rel="stylesheet">
    <link href="{!!  asset('citi_admin/css/style.css')  !!}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .wrapper {
            margin-top: 80px;
            margin-bottom: 20px;
        }
        .form-signin {
            max-width: 420px;
            padding: 30px 38px 66px;
            margin: 0 auto;
            background-color: #eee;
            border-radius: 10px;
        }
        .form-signin-heading {
            text-align:center;
            margin-bottom: 30px;
        }
        .form-control {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
        }
        input[type="text"] {
            margin-bottom: 20px;
        }
        input[type="password"] {
            margin-bottom: 20px;
        }
        .colorgraph {
            height: 7px;
            border-top: 0;
            background: #c4e17f;
            border-radius: 5px;
            background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        }
    </style>
</head>
<body>
<div class = "container">
    <div class="wrapper">
        <div class="error">
        </div>
        <form action="{{  url('dang-nhap') }}" method="post" class="form-signin" role="form">
            {!! csrf_field() !!}
            <h3 class="form-signin-heading">ContentOMG - Begido</h3>
            <hr class="colorgraph"><br>
            <input type="text" class="form-control" name="txtTaiKhoan" placeholder="Tên đăng nhập" required="" autofocus="" />
            <input type="password" class="form-control" name="txtMatKhau" placeholder="Mật khẩu" required=""/>
            <button class="btn btn-lg btn-primary btn-block"  name="login" value="Login" type="Submit">Đăng nhập</button>
        </form>
    </div>
</div>
</body>
</html>