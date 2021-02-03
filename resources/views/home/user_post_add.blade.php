@extends("layouts.home")
@section("title","Post Add")

@section("content")
    <div style="margin-bottom:59px"></div>
    <div class="container">
        <div class="row">
            @include("home._userMenu")

            <div class="col-md-10">
                @include("home.alertMessages")
                <div class="card" style="margin-top: 75px">
                    <div class="card-header">
                        <h5 class="card-title h3">Blog Add</h5>
                    </div>
                    <div class="card-body">

                    <form class="form-validate form-horizontal" method="post"
                          action="{{route("user_post_store")}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group ">
                            <label class="control-label col-lg-2">Title *</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="title" name="title" minlength="5"
                                       type="text" required autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-2">Category</label>
                            <div class="col-lg-10">
                                <select class="form-control col-lg-5" name="category_id" required>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-2">Content</label>
                            <div class="col-lg-10">
                                <textarea id="summernote" name="content"></textarea>
                                <script>
                                    $(document).ready(function() {
                                        $('#summernote').summernote();
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-2">Keywords *</label>
                            <div class="col-lg-10">
                                <input class="form-control" name="keywords" autocomplete="off" type="text"
                                />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-2">Image</label>
                            <div class="col-lg-10">
                                <input class="form-control" name="image" autocomplete="off" type="file"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-2">Slug</label>
                            <div class="col-lg-10">
                                <input class="form-control" name="slug"  type="text" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit">Add</button>
                                <button class="btn btn-default" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
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
@section("js")
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection
