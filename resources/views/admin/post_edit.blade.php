@extends("layouts.admin")
@section("title","Post edit ")
@section("javascript")
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection
@section("content")
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-files-o"></i>Add Post</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route("admin_home")}}">Home</a></li>
                        <li><i class="icon_document_alt"></i><a href="{{route("admin_post")}}">Post</a></li>
                        <li><i class="icon_pencil"></i><a>Edit Post</a></li>
                    </ol>
                </div>
            </div>
            <div class="row p-4">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Form validations
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="form-validate form-horizontal" method="post"
                                      action="{{route("admin_post_update",["id"=>$data->id])}}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2">Title *</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" value="{{$data->title}}" name="title"
                                                   type="text"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2">Category</label>
                                        <div class="col-lg-10">
                                            <select class="form-control col-lg-2" name="category_id">
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
                                            <input class="form-control" name="keywords" type="text"
                                                   value="{{$data->keywords}}"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2">Image</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" value="image" name="image" type="file"/>
                                            @if($data->image)
                                                <img src="{{Storage::url($data->image)}}" height="45">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2">Slug</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="slug" type="text"
                                                   value="{{$data->slug}}"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2">Status *</label>
                                        <div class="col-lg-10">
                                            <select class="form-control col-lg-2" name="status">
                                                <option selected="selected">{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
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
                    </section>
                </div>
            </div>
        </section>
    </section>

@endsection

<script src="{{asset("assets")}}/adminjs/jquery.js"></script>
<script src="{{asset("assets")}}/adminjs/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="{{asset("assets")}}/adminjs/jquery.scrollTo.min.js"></script>
<script src="{{asset("assets")}}/adminjs/jquery.nicescroll.js" type="text/javascript"></script>
<!-- jquery validate js -->
<script type="text/javascript" src="{{asset("assets")}}/adminjs/jquery.validate.min.js"></script>

<!-- custom form validation script for this page-->
<script src="{{asset("assets")}}/adminjs/form-validation-script.js"></script>
<!--custome script for all page-->
<script src="{{asset("assets")}}/adminjs/scripts.js"></script>
