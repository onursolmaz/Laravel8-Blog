@extends("layouts.home")
@section("title",$setting->title)
@section("description",$setting->description)
@section("keywords",$setting->keywords)

@section("content")
    @include("home.slider")
    <main>
        <div class="container mt-3">
            <h1 class="display-4 text-center mb-4">Latest Blogs</h1>
            <div class="row">
                <div class="col-md-8">

                    @foreach($lastBlogs as $blog)
                        @if($blog->status=="True")
                            @php
                                $reviewCount=\App\Http\Controllers\HomeController::countReview($blog->id);
                            @endphp
                        <div class="card mb-4">
                            <img src="{{Storage::url($blog->image)}}" class="card-img-top img-thumbnail" width="600px">
                            <div class="card-body">
                                <h3 class="card-title">{{$blog->title}}</h3>
                                <p class="card-text">{!! $blog->keywords !!}</p>
                                <a href="{{route("post",["id"=>$blog->id,"user_id"=>$blog->user_id])}}" type="button" class="btn btn-primary">Read More</a>
                                <div class="d-inline float-right"><i class="far fa-comments"></i> {{$reviewCount}}</div>
                            </div>
                            <div class="card-footer text-muted">
                                {{$blog->created_at}}
                            </div>
                        </div>
                        @endif
                    @endforeach



                </div>
                <div class="col-md-4">
                    @include("home.sidebarR")
                </div>

            </div>
        </div>
    </main>
@endsection
