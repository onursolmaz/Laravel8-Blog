@extends("layouts.home")
@section("title","User comments")


@section("content")
    <div style="margin-bottom:59px"></div>
    <div class="container">
        <div class="row">
            @include("home._userMenu")

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
                                    <a data-toggle="modal" data-target="#exampleModal" href="{{route("user_comment_delete",["id"=>$rs->id])}}">
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Comment Delete!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a type="button" href="{{route("user_comment_delete",["id"=>$rs->id])}}" class="btn btn-primary">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection
