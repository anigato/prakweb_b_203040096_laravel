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
        'id', 'created_at', 'published_at'
    ];

    protected $with = ['category', 'author'];

    // local scope untuk melakukan filter
    public function scopeFilter($query, array $filters)
    {
        // if ($filters['search']) {$filters['search']} else {false}
        // ($filters['search']) ? $filters['search'] : false
        // $filters['search'] ?? false
        // mereka semua diatas sama

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        // $query->when($filters['author'] ?? false, fn($query, $author) =>
        //     $query->whereHas('author', fn($query) => 
        //         $query->where('username',$author)
        //     )
        // );
        $query->when($filters['author'] ?? false, function ($query, $author) {
            $query->whereHas('author', function ($query) use ($author) {
                $query->where('username', $author);
            });
        });
    }
    // relasi one to one | satu post hanya ada satu category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // relasi one to one | satu post hanya ditulis satu user
    // public function user(){
    //     return $this->belongsTo(User::class);
    // }

    //membuat alias user menjadi author
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
