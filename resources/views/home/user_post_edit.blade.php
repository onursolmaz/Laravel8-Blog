@extends("layouts.home")
@section("title","User comments")

@section("content")
    <div style="margin-bottom:59px"></div>
    <div class="container">
        <div class="row">
            @include("home._userMenu")

            <div class="col-md-10">

                <div class="card" style="margin-top: 75px">
                    @include("home.alertMessages")
                    <div class="card-header">
                        <h5 class="card-title h3">Blog Update</h5>
                    </div>
                    <div class="card-body">
                        <form class="form-validate form-horizontal" method="post"
                              action="{{route("user_post_update",["id"=>$data->id])}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group ">
                                <label class="control-label col-lg-2">Title *</label>
                                <div class="col-lg-10">
                                    <input class="form-control" value="{{$data->title}}" name="title"
                                           autocomplete="off"
                                           type="text"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label col-lg-2">Category</label>
                                <div class="col-lg-10">
                                    <select class="form-control col-lg-5" name="category_id">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}"
                                                    @if($category->id==$data->category_id) selected="selected" @endif>
                                                {{\App\Http\Controllers\admin\CategoryController::getParentsTree($category,$category->title)}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label col-lg-2">Content</label>
                                <div class="col-lg-10">
                                    <textarea id="summernote" name="content">{{$data->content}}</textarea>
                                    <script>
                                        $(document).ready(function () {
                                            $('#summernote').summernote();
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label col-lg-2">Keywords *</label>
                                <div class="col-lg-10">
                                    <input class="form-control" name="keywords" type="text" autocomplete="off"
                                           value="{{$data->keywords}}"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label col-lg-2">Image</label>
                                <div class="col-lg-10">
                                    <input class="form-control" value="image" name="image" type="file"/>
                                    @if($data->image)
                                        <img src="{{Storage::url($data->image)}}" height="125" width="125">
                                    @endif
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label col-lg-2">Slug</label>
                                <div class="col-lg-10">
                                    <input class="form-control" name="slug" type="text" autocomplete="off"
                                           value="{{$data->slug}}"/>
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

    <div class="hidden">
        @include("profile.show")
    </div>
    <div style="margin-bottom: 300px"></div>
    <!-- /.container -->

@endsection
@section("js")
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection
