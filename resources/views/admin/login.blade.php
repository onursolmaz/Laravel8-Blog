<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Admin Login Page </title>

    <!-- Bootstrap CSS -->
    <link href="{{asset("assets")}}/admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{asset("assets")}}/admin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{asset("assets")}}/admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="{{asset("assets")}}/admin/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="{{asset("assets")}}/admin/css/style.css" rel="stylesheet">
    <link href="{{asset("assets")}}/admin/css/style-responsive.css" rel="stylesheet" />
    <script src="{{asset("assets")}}/admin/js/html5shiv.js"></script>
    <script src="{{asset("assets")}}/admin/js/respond.min.js"></script>
</head>

<body class="login-img3-body">

<div class="container">

    <form class="login-form" action="{{route("admin_logincheck")}}" method="post">
        @csrf
        <div class="login-wrap">
            @include("home.alertMessages")
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input id="email" name="email" type="text" class="form-control" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input id="password" name="password" type="password" class="form-control" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>
        </div>
    </form>


@include("admin._footer");

</div>


</body>
</html>
