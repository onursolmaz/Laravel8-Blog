<nav class="navbar bg-dark navbar-expand-sm navbar-dark fixed-top">

    <a href="/" class="navbar-brand">
        <i class="fas fa-blog"></i>&nbsp;Blog
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ml-2" id="main_nav">

        <ul class="navbar-nav">
            <li class="nav-item active"> <a class="nav-link" href="">Home </a> </li>
            @include("home._category")
            <li class="nav-item"><a class="nav-link" href="#"> About </a></li>
            <li class="nav-item"><a class="nav-link" href="#"> Contact </a></li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Onur solmaz </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="#"><i class="far fa-user-circle"></i> Profilim</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Çıkış yap </a></li>
                </ul>
            </li>
        </ul>

    </div>

</nav>
