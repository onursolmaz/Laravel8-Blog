<html>
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- bootstrap theme -->
    <link href="{{asset("assets")}}/admin/css/bootstrap-theme.css" rel="stylesheet">
    <!-- font icon -->
    <link href="{{asset("assets")}}/admin/css/elegant-icons-style.css" rel="stylesheet"/>
    <link href="{{asset("assets")}}/admin/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="{{asset("assets")}}/admin/css/style.css" rel="stylesheet">
    <link href="{{asset("assets")}}/admin/css/style-responsive.css" rel="stylesheet"/>
    <link href="{{asset("assets")}}/admin/css/xcharts.min.css" rel=" stylesheet">
    <link href="{{asset("assets")}}/admin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
        <div class="card container">
            <div class="card-header">
                <h3 class="card-title"> Post: {{$data->title}}</h3></div>
            <div class="card-body">
                <form class="form-validate form-horizontal" method="post"
                      action="{{route("admin_image_store",["post_id"=>$data->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group ">
                        <label class="control-label col-lg-2">Title *</label>
                        <div class="col-lg-10">
                            <input class="form-control custom-file-label " id="title" name="title" minlength="5"
                                   type="text" required/>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="control-label col-lg-2">Image</label>
                        <div class="col-lg-10">
                            <input class="form-control" name="image" minlength="5" type="file"
                                   required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-primary" type="submit">Add</button>
                            <button class="btn btn-default" type="button">Cancel</button>
                        </div>
                    </div>
                </form>

                <table class="table table-striped table-advance table-hover">
                    <tbody>
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>image</th>
                        <th><i class="icon_cogs"></i> Action</th>
                    </tr>
                    @foreach($images as $image)
                        <tr>
                            <td>{{$image->id}}</td>
                            <td>{{$image->title}}</td>
                            <td>
                                @if($image->image)
                                    <img src="{{Storage::url($image->image)}}" height="60">
                                @endif
                            </td>
                            <td>
                                <div class="btn-toolbar">
                                    <a class="btn btn-danger"
                                       href="{{route("admin_image_delete",["id"=>$image->id])}}"
                                       onclick="return confirm('are you sure!')"><i class="icon_close_alt2"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


            </div>
        </div>





</body>
</html>


