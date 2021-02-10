@extends("layouts.home")
@section("title","User Blogs")


@section("content")
    <div style="margin-bottom:59px"></div>
    <div class="container">
        <div class="row">
            @include("home._userMenu")

            <div class="col-md-10">


                <div style="margin-top: 45px">
                    <h5 class="card-title h3 text-center">My Blogs</h5>
                    <a class="btn btn-primary btn mb-3" href="{{route("user_post_add")}}"><i
                            class="fa-lg icon_plus"></i>
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
                                <td class="text-primary"><a
                                        href="{{route("post",["id"=>$post->id,"user_id"=>$post->user_id])}}">{{$post->title}}</a>
                                </td>
                                <td>
                                    @if($post->image)
                                        <img src="{{Storage::url($post->image)}}" height="55" width="55">
                                    @endif
                                </td>
                                <td>{{$post->status}}</td>
                                <td><a href="{{route("user_post_delete",["id"=>$post->id])}}"
                                       onclick="return confirm('are you sure!')"><i class="fas fa-trash-alt"></i></a>
                                </td>
                                <td><a
                                        href="{{route("user_post_edit",["id"=>$post->id])}}"><i class="fas fa-pen"></i></a>
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
@endsection
