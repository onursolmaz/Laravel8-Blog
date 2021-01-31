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
                    <a href="" class="list-group-item">My blogs</a>
                    <a href="{{route("mycomments")}}" class="list-group-item">My comments</a>
                </div>

            </div>

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
                                <td><a
                                       href="{{route("user_post_delete",["id"=>$post->id])}}"onclick="return confirm('are you sure!')"><i class="fas fa-trash-alt"></i></a>
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
@endsection
