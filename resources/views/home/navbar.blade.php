<nav class="navbar bg-dark navbar-expand-sm navbar-dark fixed-top" style="height: 62px">
    <a class="navbar-brand" href="/" style="display:inline-flex;">
        <img src="{{asset("assets")}}/img/brand.svg" width="30" height="37" >
          <span style="font-size: 25px">log</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ml-2" id="main_nav">

        <ul class="navbar-nav">
            <li class="nav-item active"><a class="nav-link" href="/">Home </a></li>
            @include( "home._category")
            <li class="nav-item"><a class="nav-link"href="{{route("about")}}"> About </a></li>
            <li class="nav-item"><a class="nav-link"href="{{route("contact")}}"> Contact </a></li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown d-inline-flex">
                @auth
                    <img src="{{Auth::user()->profile_photo_url}}" style="width: 38px;height: 38px;border-radius: 50%;">
                <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">{{Auth::user()->name}}</a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="{{route("myaccount")}}"><i class="far fa-user-circle"></i>My account</a></li>
                    <li><a class="dropdown-item" href="{{route("admin_logout")}}"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                </ul>
                @endauth
                @guest
            <li><a class="nav-link" href="{{route("login")}}"><i class="fas fa-sign-in-alt"></i>Login</a></li>
            <li><a class="nav-link" href="{{route("admin_logout")}}"><i class="fas fa-user-plus"></i>Register</a></li>
                @endguest
            </li>
        </ul>
    </div>
</nav>
