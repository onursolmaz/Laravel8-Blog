@extends("layouts.admin")
@section("title","Post list")

@section("content")
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Posts</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route("admin_home")}}">Home</a></li>
                        <li><i class="fa fa-bars"></i>Posts</li>
                    </ol>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <a class="btn btn-primary btn-lg" href="{{route("admin_post_add")}}"><i class="fa-lg icon_plus"></i> Add new post</a>
                    <section class="card">
                        <div class="card-header">
                            <h1 class="display-5 text-center mb-2"><i class="fa fa-xs fa-bars"></i>  Blog</h1>
                        </div>
                        <table class="table table-striped table-advance table-hover">
                            <tbody>
                            <tr>
                                <th>id</th>
                                <th>User</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>content</th>
                                <th>image</th>
                                <th>keywords</th>
                                <th>Status</th>
                                <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->user_id}}</td>
                                <td>{{$post->category_id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->content}}</td>
                                <td>{{$post->image}}</td>
                                <td>{{$post->keywords}}</td>
                                <td>{{$post->status}}</td>
                                <td>
                                    <div class="btn-toolbar">
                                        <a class="btn btn-success" href="{{route("admin_post_edit",["id"=>$post->id])}}"><i class=" icon_pencil"></i></a>
                                        <a class="btn btn-danger" href="{{route("admin_post_delete",["id"=>$post->id])}}" onclick="return confirm('are you sure!')"><i class="icon_close_alt2"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </section>


                </div>
            </div>
        </section>
    </section>
@endsection
