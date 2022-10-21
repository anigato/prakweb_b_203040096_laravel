<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded=['id','updated_at','created_at'];

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
