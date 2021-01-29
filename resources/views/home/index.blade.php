@extends("layouts.home")
@section("title",$setting->title)
@section("description",$setting->description)
@section("keywords",$setting->keywords)

@section("content")
    @include("home.slider")
    <main>
        <div class="container mt-3">
            <h1 class="display-4 text-center mb-4">Last Blogs</h1>
{{--            <h1 class="jumbotron-heading text-center mb-3">Album example</h1>--}}
            <div class="row">
                <div class="col-md-8">
                    @foreach($lastBlogs as $blog)
                    <div class="card mb-4">
                        <img src="{{Storage::url($blog->image)}}" class="card-img-top img-thumbnail" style="height: 500px">
                        <div class="card-body">
                            <h4 class="card-title">{{$blog->title}}</h4>
                            <p class="card-text">
                                {!! Str::words($blog->content, 50,'....')  !!}
                            </p>
                            <a href="{{route("post",["id"=>$blog->id])}}" type="button" class="btn btn-primary">Read More</a>
                        </div>
                        <div class="card-footer text-muted">
                            {{$blog->created_at}}
                        </div>
                    </div>
                    @endforeach
                </div>
                @include("home.sidebarR")
            </div>
        </div>
    </main>
@endsection
