<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield("title")</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="shortcut icon" href="{{asset("assets")}}/admin/img/favicon.png">
    <title>Creative - Bootstrap Admin Template</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <!-- Bootstrap CSS -->
    <link href="{{asset("assets")}}/admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{asset("assets")}}/admin/css/bootstrap-theme.css" rel="stylesheet">
    <!-- font icon -->
    <link href="{{asset("assets")}}/admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="{{asset("assets")}}/admin/css/font-awesome.min.css" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="{{asset("assets")}}/admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="{{asset("assets")}}/admin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="{{asset("assets")}}/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{asset("assets")}}/admin/css/owl.carousel.css" type="text/css">
    <link href="{{asset("assets")}}/admin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{asset("assets")}}/admin/css/fullcalendar.css">
    <link href="{{asset("assets")}}/admin/css/widgets.css" rel="stylesheet">
    <link href="{{asset("assets")}}/admin/css/style.css" rel="stylesheet">
    <link href="{{asset("assets")}}/admin/css/style-responsive.css" rel="stylesheet" />
    <link href="{{asset("assets")}}/admin/css/xcharts.min.css" rel=" stylesheet">
    <link href="{{asset("assets")}}/admin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    @yield("javascript")
</head>
<body>
<section id="container">
    @include("admin._header")
    @include("admin._sidebar")
    @section("content")
    @show
    @include("admin._footer")

@include("admin.js")

</body>
</html>

