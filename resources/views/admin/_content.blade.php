<section id="main-content">
    <section class="wrapper">

        <div class="h2 text-center" style="margin-top: 0px" >Admin Panel Home Page</div>
        <div class="h3 text-center" style="margin-top: 10px" >Active: <strong>{{\Illuminate\Support\Facades\Auth::user()->name}}</strong></div>
        <div class="h2 text-center" style="margin-top: 16px"><img src="{{Auth::user()->profile_photo_url}}" style="width: 110px;height: 110px;border-radius: 50%;"></div>

        <div class="row" style="margin-top: 100px">
            <h3 class="text-center font-weight-bold"><strong><i class="fas fa-hourglass-start"></i> Waiting for approval</strong></h3>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="margin-left: 150px">
                <div class="info-box blue-bg">
                    <i class="fas fa-blog"></i>
                    <div class="count">{{$count_blog}}</div>
                    <div class="title">New Blog</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box dark-bg">
                    <i class="far fa-comments"></i>
                    <div class="count">{{$count_comment}}</div>
                    <div class="title">New Comment</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box green-bg">
                    <i class="far fa-envelope"></i>
                    <div class="count">{{$count_message}}</div>
                    <div class="title">Contact Message</div>
                </div>
            </div>
        </div>

    </section>

    <div style="margin-bottom: 350px"></div>


</section>
