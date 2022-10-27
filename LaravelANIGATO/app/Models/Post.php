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

    // relasi one to one | satu post hanya ada satu category
    public function category(){
        return $this->belongsTo(Category::class);
    }

    // relasi one to one | satu post hanya ditulis satu user
    public function user(){
        return $this->belongsTo(User::class);
    }
}
