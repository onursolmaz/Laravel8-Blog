@extends("layouts.home")
@section("title")


@section("content")
    <div style="margin-bottom:100px"></div>
<div class="container">

    <div class="row">
        @foreach($datalist as $rs)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="{{route("post",["id"=>$rs->id,"user_id"=>$rs->user_id])}}"><img class="card-img-top" src="{{Storage::url($rs->image)}}"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{route("post",["id"=>$rs->id,"user_id"=>$rs->user_id])}}">{{$rs->title}}</a>
                    </h4>
                    <p class="card-text">{{$rs->keywords}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
