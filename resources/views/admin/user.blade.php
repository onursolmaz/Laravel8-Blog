@extends("layouts.admin")
@section("title","User list")

@section("content")
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route("admin_home")}}">Home</a></li>
                        <li><i class="fa fa-bars"></i>Users</li>
                    </ol>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <section class="card">
                        <div class="card-header">
                            <h1 class="display-5 text-center mb-2">USERS</h1>
                        </div>
                        <table class="table table-striped table-advance table-hover container">
                            @include("home.alertMessages")
                            <tbody>
                            <tr>
                                <th>id</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Roles</th>
                                <th colspan="2"><i class="icon_cogs"></i> Action</th>
                            </tr>
                            @foreach($datalist as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>
                                        @if($data->profile_photo_path)
                                            <img src="{{Storage::url($data->profile_photo_path)}}" height="45" width="45" class="img-rounded">
                                        @endif
                                    </td>
                                    <td>{{$data->name}}</td>
                                    <td>

                                        @foreach($data->roles as $role)
                                        {{$role->name}},
                                        @endforeach
                                        <a href="{{route("admin_user_roles",["id"=>$data->id])}}"
                                           onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </td>
                                    <td><a href="{{route("admin_user_edit",["id"=>$data->id])}}">

                                            <i class="fas fa-edit fa-2x"></i></a>
                                    </td>
                                    <td><a
                                           href="{{route("admin_user_delete",["id"=>$data->id])}}" onclick="return confirm('are you sure!')"><i class="fas fa-user-times fa-2x"></i></a>
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
