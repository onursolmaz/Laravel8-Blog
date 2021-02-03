@php
    $parentCategories=\App\Http\Controllers\HomeController::categoryList()
@endphp
<li class="nav-item  active dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Kategoriler </a>
    <ul class="dropdown-menu">
        @foreach($parentCategories as $rs)
        <li><a class="dropdown-item @if(count($rs->children)) dropdown-toggle @endif " href="{{route("categoryposts",["id"=>$rs->id])}}"> {{$rs->title}}</a>
            @if(count($rs->children))
            <ul class="submenu dropdown-menu">
                @include("home.categorytree",["children"=>$rs->children])
            </ul>
            @endif
        </li>
        @endforeach
    </ul>
</li>

