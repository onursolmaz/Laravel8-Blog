@extends("layouts.home")
@section("title","User Page")


@section("content")
    <div style="margin-bottom:59px"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-2" style="margin-top: 40px !important;">
                <h5 class="my-4">User Profile</h5>
                <div class="list-group">
                    <a href="#" class="list-group-item">User name</a>
                    <a href="#" class="list-group-item">My blogs</a>
                    <a href="#" class="list-group-item">My comments</a>
                </div>

            </div>

            <div class="col-md-10">
                <div style="margin-top: 100px" class="onur">
            @include("profile.show")</div>
            </div>
        </div>
    </div>
    <!-- /.container -->

@endsection
