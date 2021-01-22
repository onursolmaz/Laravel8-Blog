@extends("layouts.admin")
@section("title","Add Category")
@section("content")
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-files-o"></i>Add Category</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route("admin_home")}}">Home</a></li>
                        <li><i class="icon_document_alt"></i><a href="{{route("admin_category")}}">Category</a></li>
                        <li><i class="icon_pencil"></i><a>Add Category</a></li>
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
                                <form class="form-validate form-horizontal" method="post" action="{{route("admin_category_create")}}">
                                    @csrf
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2">Title *</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" id="title" name="title" minlength="5" type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2">Parent Category *</label>
                                        <div class="col-lg-10">
                                            <select class="form-control col-lg-2" id="parent_id" name="parent_id" required>
                                                <option value="0">Base Category</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{\App\Http\Controllers\admin\CategoryController::getParentsTree($category,$category->title)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2">Slug *</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="slug" type="text" name="slug" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2">Keywords *</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" id="keywords" name="keywords" minlength="5" type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2">Status *</label>
                                        <div class="col-lg-10">
                                            <select class="form-control col-lg-2" id="status" name="status"required>
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
