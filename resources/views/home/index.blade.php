@extends("layouts.home")
@section("title","Home Page")

@section("content")
    <main>
        <div class="container mt-3">
            <h1 class="display-4 text-center mb-2">Last Blogs</h1>
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <img src="{{asset("assets")}}/img/slider-1.jpeg" class="card-img-top img-thumbnail" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Post Title</h4>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti explicabo asperiores
                                quae provident veritatis molestias laborum incidunt nemo laboriosam numquam.
                            </p>
                            <button type="button" class="btn btn-primary">Read More</button>
                        </div>
                        <div class="card-footer text-muted">
                            Posted on January 1, 2019
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="{{asset("assets")}}/img/slider-2.jpeg" class="card-img-top img-thumbnail" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Post Title</h4>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti explicabo asperiores
                                quae provident veritatis molestias laborum incidunt nemo laboriosam numquam.
                            </p>
                            <button type="button" class="btn btn-primary">Read More</button>
                        </div>
                        <div class="card-footer text-muted">
                            Posted on January 1, 2019
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="{{asset("assets")}}/img/slider-3.jpeg" class="card-img-top img-thumbnail" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Post Title</h4>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti explicabo asperiores
                                quae provident veritatis molestias laborum incidunt nemo laboriosam numquam.
                            </p>
                            <button type="button" class="btn btn-primary">Read More</button>
                        </div>
                        <div class="card-footer text-muted">
                            Posted on January 1, 2019
                        </div>
                    </div>
                </div>
                @include("home.sidebarR")
            </div>
        </div>
    </main>
@endsection
