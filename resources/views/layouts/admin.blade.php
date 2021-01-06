<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield("title")</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="shortcut icon" href="{{asset("assets")}}/admin/img/favicon.png">
    <title>Creative - Bootstrap Admin Template</title>
    <!-- Bootstrap CSS -->
    <link href="{{asset("assets")}}/admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{asset("assets")}}/admin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{asset("assets")}}/admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="{{asset("assets")}}/admin/css/font-awesome.min.css" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="{{asset("assets")}}/admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="{{asset("assets")}}/admin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="{{asset("assets")}}/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- owl carousel -->
    <link rel="{{asset("assets")}}/admin/stylesheet" href="{{asset("assets")}}/admin/css/owl.carousel.css" type="text/css">
    <link href="{{asset("assets")}}/admin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="{{asset("assets")}}/admin/stylesheet" href="{{asset("assets")}}/admin/css/fullcalendar.css">
    <link href="{{asset("assets")}}/admin/css/widgets.css" rel="stylesheet">
    <link href="{{asset("assets")}}/admin/css/style.css" rel="stylesheet">
    <link href="{{asset("assets")}}/admin/css/style-responsive.css" rel="stylesheet" />
    <link href="{{asset("assets")}}/admin/css/xcharts.min.css" rel=" stylesheet">
    <link href="{{asset("assets")}}/admin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">

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

