@extends("layouts.home")
@section("title","User comments")


@section("content")
    <div style="margin-bottom:59px"></div>
    <div class="container">
        <div class="row">
            @include("home._userMenu")

            <div class="col-md-10">

                <div style="margin-top: 75px">
                    <a class="btn btn-primary btn mb-3" href="{{route("user_post_add")}}"><i class="fa-lg icon_plus"></i>
                        Add new post</a>
                    @include("home.alertMessages")
                    <table class="table table-striped table-advance table-hover container">
                        <tbody>
                        <tr>
                            <th>id</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>image</th>
                            <th>Status</th>
                            <th colspan="2"><i class="icon_cogs"></i> Action</th>
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{\App\Http\Controllers\admin\CategoryController::getParentsTree($post->category,$post->category->title)}}</td>
                                <td>{{$post->title}}</td>
                                <td>
                                    @if($post->image)
                                        <img src="{{Storage::url($post->image)}}" height="55" width="55">
                                    @endif
                                </td>
                                <td>{{$post->status}}</td>
                                <td><a data-toggle="modal" data-target="#exampleModal" href=""><i class="fas fa-trash-alt"></i></a>
                                </td>
                                <td><a
                                       href="{{route("user_post_edit",["id"=>$post->id])}}" ><i class="fas fa-pen"></i></a>
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

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Blog Delete!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a type="button" href="{{route("user_post_delete",["id"=>$post->id])}}" class="btn btn-primary">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection
