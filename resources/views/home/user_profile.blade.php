@extends("layouts.home")
@section("title","User Page")
@php
    $userRoles=\Illuminate\Support\Facades\Auth::user()->roles()->pluck("name");
@endphp

@section("content")
    <div style="margin-bottom:59px"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-2" style="margin-top: 33px !important;">
                <div class="card-header">
                    <h5 class="card-title h5 text-center"><i class="far fa-user"></i> USER PANEL</h5>
                    <hr>
                    <p class="text-center">{{Auth::user()->name}}</p>
                </div>
                <div class="list-group">
                    <a href="{{route("user_post")}}" class="list-group-item text-primary"><i class="fas fa-blog"></i> MY BLOGS</a>
                    <a href="{{route("mycomments")}}" class="list-group-item text-primary"><i class="far fa-comments"></i> MY COMMENTS</a>
                    @if($userRoles->contains("admin"))
                        <a href="{{route("admin_home")}}" class="list-group-item text-primary"><i class="fas fa-user-cog"></i> ADMİN PANEL</a>
                    @endif
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
