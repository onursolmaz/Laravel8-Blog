<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $appends=[
        "parent",
    ];

    # her kategorinin birden fazla postu olabilir
    public function posts(){
        return $this->hasMany(Post::class);
    }

    # hangi alt kategoriye ait
    public function parent(){
        return $this->belongsTo(Category::class, "parent_id");
    }
    #alt kategorileri
    public function children(){
        return $this->hasMany(Category::class, "parent_id");
    }

}
