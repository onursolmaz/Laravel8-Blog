@extends("layouts.home")
@section("title","About us -". $setting->title)


@section("content")
    <div style="margin-bottom:85px"></div>


    <div class="container">
        <div class="row ">
            {!!$setting->aboutus !!}
        </div>
    </div>

@endsection
