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
                    <section class="panel">
                        <header class="panel-heading">
                            <i class="icon_menu"></i> Category List
                        </header>
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
                                <td>{{$category->parent_id}}</td>
                                <td>{{$category->status}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
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
