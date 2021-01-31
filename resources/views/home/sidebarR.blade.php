
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
        <h5>Categories</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col">
                <ul class="list-unstyled">
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Html</a></li>
                    <li><a href="#">Angular</a></li>
                </ul>
            </div>
            <div class="col">
                <ul class="list-unstyled">
                    <li><a href="#">Javascript</a></li>
                    <li><a href="#">Css</a></li>
                    <li><a href="#">React</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <h5>Widget</h5>
    </div>
    <div class="card-body">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus libero necessitatibus
            odit ipsum vitae consequatur.
        </p>
    </div>
</div>
