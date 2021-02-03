@extends("layouts.home")
@section("title",$data->title)


@section("content")
    @php
        function getTimeAgo($carbonObject) {
             return str_ireplace(
                 [' seconds', ' second', ' minutes', ' minute', ' hours', ' hour', ' days', ' day', ' weeks', ' week'],
                 [' second', ' second', ' min.', ' min.', 'h', 'h', ' day', ' day', 'week', 'week'],
                 $carbonObject->diffForHumans()
             );
         }
    @endphp
    <div style="margin-bottom: 100px"></div>
    <main>
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-8">

                    <h1 class="mt-4 text-uppercase">{{$data->title}}</h1>
                    <p class="lead">
                        <i class="fas fa-user-edit"></i> by
                        <a href="#">{{$user->name}}</a>
                    </p>
                    <hr>

                    <!-- Date/Time -->
                    <p><i class="far fa-calendar-alt"></i> {{$data->created_at}}</p>

                    <hr>

                    <!-- Preview Image -->
                    <img class="img-fluid rounded" src="{{Storage::url($data->image)}}" width="900px" height="300px">
                    <hr>

                    <!-- Post Content -->
                    <p class="lead">{!! $data->content !!}</p>
                    <hr>

                    <!-- Comments Form -->
                    <div class="card my-4">
                        <h5 class="card-header">Leave a Comment:</h5>
                        @livewire("review",["id"=>$data->id])
                    </div>

                    <!-- Single Comment -->
                    @foreach($reviews as $rs)
                        <div class="media mb-4 ">
                            <img class="d-flex mr-3 rounded-circle" src="{{$rs->user->profile_photo_url}}" height="45px"
                                 width="45px">
                            <div class="media-body">
                                <h5 class="mt-0">{{$rs->user->name}}</h5>
                                {{$rs->comment}}
                            </div>
                            <span class="text-muted" style="font-size: 15px">
                           <i class="far fa-clock"></i> {{getTimeAgo($rs->created_at)}}
                        </span>
                        </div>
                        <hr>
                    @endforeach
                </div>
                <div class="col-md-4">
                    @include("home.sidebarR",["categoryList"=>$categoryList])
                </div>

            </div>
        </div>
    </main>
@endsection
