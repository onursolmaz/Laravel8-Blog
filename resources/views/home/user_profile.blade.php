@extends("layouts.home")
@section("title","User Page")


@section("content")
    <div style="margin-bottom:59px"></div>
    <div class="container">
        <div class="row">
            @include("home._userMenu")

            <div class="col-md-10">
                <div style="margin-top: 40px">
                    @include("profile.show")
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

@endsection
