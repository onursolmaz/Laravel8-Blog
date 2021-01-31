@extends("layouts.home")
@section("title","User comments")


@section("content")
    <div style="margin-bottom:59px"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-2" style="margin-top: 33px !important;">
                <h3 class="card-title h3">User Profile</h3>
                <div class="list-group text-primary">
                    <a href="#" class="list-group-item">{{Auth::user()->name}}</a>
                    <a href="{{route("user_post")}}" class="list-group-item">My blogs</a>
                    <a href="" class="list-group-item">My comments</a>
                </div>

            </div>

            <div class="col-md-10">
                <div style="margin-top: 75px">

                    <table class="table">
                        @include("home.alertMessages")
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Blog Tittle</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td class="text-primary"><a href="{{route("post",["id"=>$rs->post_id,"user_id"=>$rs->user_id])}}">{{$rs->post->title}}</a></td>
                                <td>{{$rs->status}}</td>
                                </td>
                                <td>
                                    <a href="{{route("user_comment_delete",["id"=>$rs->id])}}">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden">
        @include("profile.show")
    </div>
    <div style="margin-bottom: 300px"></div>
    <!-- /.container -->

@endsection
