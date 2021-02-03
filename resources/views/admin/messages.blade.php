@extends("layouts.admin")
@section("title","Message list")

@section("content")
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Contact Messages</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route("admin_home")}}">Home</a></li>
                        <li><i class="fa fa-bars"></i>Messages</li>
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
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Admin note</th>
                                <th colspan="2"><i class="icon_cogs"></i> Action</th>
                            </tr>
                            @foreach($datalist as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->name}}</td>
                                    <td>{{$post->email}}</td>
                                    <td>{{$post->phone}}</td>
                                    <td>{{$post->message}}</td>
                                    <td>{{$post->status}}</td>
                                    <td> {{$post->note}}
                                    </td>
                                    <td>
                                        <a href="{{route("admin_message_edit",["id"=>$post->id])}}"
                                           onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                            <i class="icon_pencil fa-2x"></i>
                                        </a>
                                        <a href="" data-toggle="modal" data-target="#exampleModal">
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Comment Delete!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a type="button" href="{{route("admin_message_delete",["id"=>$post->id])}}" class="btn btn-primary">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection
