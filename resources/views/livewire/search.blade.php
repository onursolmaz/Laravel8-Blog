<div>
    <input wire:model="search" name="search" type="text" autocomplete="off" class="form-control" list="mylist" placeholder="Search for..."  />
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
