@php
$data=\App\Http\Controllers\admin\HomeController::getCount();
$count_comment=$data["count_comment"];
$count_blog=$data["count_blog"];
$count_message=$data["count_message"];
@endphp

<header class="header dark-bg">
    <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
    </div>

    <!--logo start-->
    <a href="{{route("admin_home")}}" class="logo">Nice <span class="lite">Admin</span></a>
    <!--logo end-->

    <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
            <li>
                <form class="navbar-form">
                    <input class="form-control" placeholder="Search" type="text">
                </form>
            </li>
        </ul>
        <!--  search form end -->
    </div>

    <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
            <li id="mail_notificatoin_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="icon-envelope-l"></i>
                    <span class="badge bg-important">{{$count_message>0 ? $count_message :""}}</span>
{{--                    {{  $var === "hello" ? "Hi" : ($var ==="howdie ? "how" : "Goodbye") }}--}}
                </a>
                <ul class="dropdown-menu extended inbox">
                    <div class="notify-arrow notify-arrow-blue"></div>
                    <li>
                        <p class="blue">You have <strong>{{$count_message}}</strong> new messages</p>
                    </li>
                    <li>
                        <a href="{{route("admin_newmessage_show")}}">
                            <i class="far fa-envelope ml-2" style="font-size: 19px"></i>  There are <strong class="font-weight-bold">{{$count_message}}</strong> messages waiting for reply
                        </a>
                    </li>
                </ul>
            </li>
            <!-- inbox notificatoin end -->
            <!-- alert notification start-->
            <li id="alert_notificatoin_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                    <i class="icon-bell-l"></i>
                    <span class="badge bg-important">{{$count_comment + $count_blog}}</span>
                </a>
                <ul class="dropdown-menu extended notification">
                    <div class="notify-arrow notify-arrow-blue"></div>
                    <li>
                        <p class="blue">You have <strong>{{$count_comment + $count_blog}}</strong> new notifications</p>
                    </li>
                    <li>
                        <a href="{{route("admin_newblog_show")}}">
                            <i class="fas fa-blog ml-2" style="font-size: 19px"></i>  There are {{$count_blog}} new blog
                        </a>
                    </li>
                    <li>
                        <a href="{{route("admin_newcomment_show")}}">
                            <i class="far fa-comments ml-2" style="font-size: 19px"></i> There are {{$count_comment}} new comment
                        </a>
                    </li>
                </ul>
            </li>
            <!-- alert notification end-->
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="{{Auth::user()->profile_photo_url}}" style="width: 35px;height: 35px;border-radius: 50%;">
                            </span>
                    @auth
                        <span class="username">{{Auth::user()->name}}</span>
                    @endauth
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li>
                        <a href="{{route("home")}}"><i class="icon_clock_alt"></i> User Panel</a>
                    </li>

                    @auth
                        <li>
                            <a href="{{route("admin_logout")}}"><i class="icon_key_alt"></i> Log Out</a>
                        </li>
                    @endauth
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
    </div>
</header>
