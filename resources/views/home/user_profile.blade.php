@extends("layouts.home")
@section("title","user page")


@section("content")
    <div style="margin-bottom:59px"></div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <h5 class="my-4">User Profile</h5>
                <div class="list-group">
                    <a href="#" class="list-group-item">User name</a>
                    <a href="#" class="list-group-item">My blogs</a>
                    <a href="#" class="list-group-item">My comments</a>
                </div>

            </div>

            <div class="col-9">
        <div>
            @include("profile.show")
        </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

@endsection
