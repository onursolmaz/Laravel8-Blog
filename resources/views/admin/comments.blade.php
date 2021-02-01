@extends("layouts.admin")
@section("title","Comment list")

@section("content")
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Contact Messages</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route("admin_home")}}">Home</a></li>
                        <li><i class="fa fa-bars"></i>Comments</li>
                    </ol>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <section class="card">
                        @include("home.alertMessages")
                        <div class="card-header">
                            <h1 class="display-5 text-center mb-2">Messages</h1>
                        </div>
                        <table class="table table-striped table-advance table-hover container">
                            <tbody>
                            <tr>
                                <th>id</th>
                                <th>Tittle</th>
                                <th>Name</th>
                                <th>Comment</th>
                                <th>Status</th>
                                <th colspan="2"><i class="icon_cogs"></i> Action</th>
                            </tr>
                            @foreach($datalist as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td class="text-primary"><a href="{{route("post",["id"=>$rs->post->id,"user_id"=>$rs->user->id])}}">{{$rs->post->title}}</a></td>
                                    <td>{{$rs->user->name}}</td>
                                    <td>{{$rs->comment}}</td>
                                    <td>{{$rs->status}}</td>
                                    </td>
                                    <td>
                                        <a href="{{route("admin_comment_show",["id"=>$rs->id])}}"onclick="
                                        return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                            <i class="icon_pencil fa-2x"></i>
                                        </a>

                                        <a href="{{route("admin_comment_delete",["id"=>$rs->id])}}"
                                           >
                                            <i class="fas fa-trash-alt fa-2x"></i>
                                        </a>
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
