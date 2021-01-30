<div class="d-inline">
    <input wire:model="search" placeholder="Search for" name="search" type="text" autocomplete="off" class="form-control" list="mylist">
    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">
                    {{$rs->category->title}}
                </option>
            @endforeach
        </datalist>
    @endif
</div>
