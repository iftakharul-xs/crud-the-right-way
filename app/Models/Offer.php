<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    /*
     fillable array is used for tackling the mass assignment
     when we are creating a new offer or updating an existing one
     example => $offer = new Offer($request->all());
     if there is a name field in the request, the name field will be filterd out by the fillable array
    */
    protected $fillable = [
        'title',
        'description',
        'price',
        'author_id',
        'status'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function locations()
    {
        return $this->belongsToMany(Location::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    
}
