<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    # Her post bir kategoriye ait
    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public function Reviews(){
        return $this->hasMany(Review::class);
    }


}
