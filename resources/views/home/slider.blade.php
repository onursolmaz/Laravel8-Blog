<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach($slider as $rs)
            <div class="carousel-item {{$loop->iteration == 1 ? 'active' : ''}}">
                <a href="{{route("post",["id"=>$rs->id,"user_id"=>$rs->user_id])}}">
                <img src="{{Storage::url($rs->image)}}" class="d-block w-100" height="550px" >
                <div class="carousel-caption d-none d-md-block">
                    <h2 style="text-transform: uppercase;"><strong>{{$rs->title}}</strong></h2>
                    <p>{{$rs->keywords}}</p>
                </div></a>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
