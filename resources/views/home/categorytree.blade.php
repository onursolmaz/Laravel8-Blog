@foreach($children as $subcategory)
    @if(count($subcategory->children))
            <li><a class="dropdown-item dropdown-toggle" href="{{route("categoryposts",["id"=>$subcategory->id])}}">{{$subcategory->title}}</a>
                <ul class="submenu dropdown-menu">
                    @include("home.categorytree",["children"=>$subcategory->children])
                </ul>
            </li>
    @else
        <li><a class="dropdown-item" href="{{route("categoryposts",["id"=>$subcategory->id])}}">{{$subcategory->title}}</a></li>
    @endif
@endforeach
