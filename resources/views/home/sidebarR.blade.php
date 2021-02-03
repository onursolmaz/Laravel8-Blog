<div class="card mb-3">
    <div class="card-header">
        <h5>Search</h5>
    </div>
    <div class="card-body">
        <div class="input-group">
            <form action="{{route("getBlog")}}" method="post" class="d-inline-flex">
                @csrf
                @livewire("search")
                <span class="input-group-btn">
                    <button type="sumbit" class="btn btn-secondary">
                        <i class="fas fa-search"></i>
                    </button>
                 </span>
            </form>
        </div>
    </div>
</div>

<div class="card mb-4">
    <div class="card-header">
        <h5>Main Categories</h5>
    </div>

    <div class="list-group">
        @foreach($categoryList as $rs)

            <a href="{{route("categoryposts",["id"=>$rs->id])}}"
               class="list-group-item list-group-item-action"><i class="fas fa-blog"></i> {{$rs->title}}
                <span
                    class="badge badge-primary badge-pill float-right">{{\App\Http\Controllers\HomeController::getCategoryCount($rs->id)}}</span>
            </a>

        @endforeach
    </div>
</div>

<div class="card mb-4">
    <div class="card-header">
        <h5>Widget</h5>
    </div>
    <div class="card-body">
        <p>
            Türkiye'nin en büyük, en bol içerikli blog sayfasına hoş geldiniz...
        </p>
    </div>
</div>
