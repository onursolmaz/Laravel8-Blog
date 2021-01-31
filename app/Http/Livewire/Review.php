<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Review extends Component
{
    public $record,$comment,$post_id;

    public function mount($id){
        $this->record=Post::findOrFail($id);
        $this->post_id=$this->record->id;
    }

    public function render()
    {
        return view('livewire.review');
    }

    private function resetInput(){
        $this->comment=null;
        $this->post_id=null;
    }

    public function store(){
        $this->validate([
            "comment"=>"required|min:5"
        ]);

        \App\Models\Review::create([
            "post_id"=>$this->post_id,
            "user_id"=>Auth::id(),
            "comment"=>$this->comment
        ]);
        session()->flash("message","Comment Send Succussfully.");
        $this->resetInput();

    }




}
