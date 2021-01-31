@extends("layouts.home")
@section("title","User Page")


@section("content")
    <div style="margin-bottom:59px"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-2" style="margin-top: 33px !important;">
                <h3 class="card-title h3">User Profile</h3>
                <div class="list-group text-primary">
                    <a href="#" class="list-group-item">User name</a>
                    <a href="#" class="list-group-item">My blogs</a>
                    <a href="{{route("mycomments")}}" class="list-group-item">My comments</a>
                </div>

            </div>

            <div class="col-md-10">
                <div style="margin-top: 40px">
            @include("profile.show")
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

@endsection
