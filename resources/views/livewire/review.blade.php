<div>
    @if(session()->has("message"))
        <div class="alert alert-success">
            {{session("message")}}
        </div>
    @endif
    <div class="card-body">
        <form wire:submit.prevent="store">
            <div class="form-group">
                <textarea class="form-control" rows="3" wire:model="comment" ></textarea>
            </div>
            @auth
                <button type="submit" class="btn btn-primary">Submit</button>
            @else
                <a href="/login" class="btn btn-primary disabled">You must be login</a>
            @endauth

        </form>
    </div>
</div>
