<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title','excerpt','body'
    // ];

    protected $guarded = [
        'id','created_at','published_at'
    ];

    public function category(){
        // relasi one to one post dengan category
        return $this->belongsTo(Category::class);
    }
}
