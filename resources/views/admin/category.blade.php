@extends("layouts.admin")
@section("title","Category List")

@section("content")
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Kategoriler</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route("admin_home")}}">Home</a></li>
                        <li><i class="fa fa-bars"></i>Categories</li>
                    </ol>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <a class="btn btn-primary btn-lg" href="{{route("admin_category_add")}}"><i
                            class="fa-lg icon_plus"></i> Add category</a>
                    <section class="card">
                        <div class="card-header">
                            <h1 class="display-5 text-center mb-2">Categories</h1>
                        </div>
                        <table class="table table-striped table-advance table-hover">
                            <tbody>
                            <tr>
                                <th>id</th>
                                <th>Title</th>
                                <th>Parent</th>
                                <th>Status</th>
                                <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->title}}</td>
                                    <td>{{\App\Http\Controllers\admin\CategoryController::getParentsTree($category,$category->title)}}</td>
                                    <td>{{$category->status}}</td>
                                    <td>
                                        <div class="btn-toolbar">
                                            <a class="btn btn-success"
                                               href="{{route("admin_category_edit",["id"=>$category->id])}}"><i
                                                    class=" icon_pencil"></i></a>
                                            <a class="btn btn-danger"
                                               href="{{route("admin_category_delete",["id"=>$category->id])}}"
                                               onclick="return confirm('are you sure!')"><i class="icon_close_alt2"></i></a>
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
