@extends("layouts.admin")
@section("title","Setting edit ")
@section("javascript")
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection
@section("content")
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-files-o"></i>Update Settings</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route("admin_home")}}">Home</a></li>
                    </ol>
                </div>
            </div>
            <div class="row p-4">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Site Settings
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="form-validate form-horizontal" method="post"
                                      action="{{route("admin_setting_update")}}" enctype="multipart/form-data">
                                    @csrf
                                    <input class="form-control" value="{{$data->id}}" name="id" type="hidden"/>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2">Title *</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" value="{{$data->title}}" name="title" type="text" required/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2">Keywords *</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="keywords" type="text" required value="{{$data->keywords}}"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2">Description</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="description" type="text" value="{{$data->description}}"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2">Email</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="email" type="text" value="{{$data->email}}"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2">Phone</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="phone" type="text" value="{{$data->phone}}"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2">Facebook</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="facebook" type="text" value="{{$data->facebook}}"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2">Twitter</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="twitter" type="text" value="{{$data->twitter}}"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2">Instagram</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="instagram" type="text" value="{{$data->instagram}}"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2">Smtp Server</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="smtpserver" type="text" value="{{$data->smtpserver}}"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2">Smtp E-mail</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="smtpemail" type="text" value="{{$data->smtpemail}}"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2">Smtp password</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="smtppassword" type="password" value="{{$data->smtppassword}}"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2">Smtp port</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="smtpport" type="number" value="{{$data->smtpport}}"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2">About Us</label>
                                        <div class="col-lg-10">
                                            <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2">Contant</label>
                                        <div class="col-lg-10">
                                            <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                            <script>
                                                $(document).ready(function () {
                                                    $('#contact').summernote();
                                                    $('#aboutus').summernote();
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-primary" type="submit">Save Settins</button>
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
