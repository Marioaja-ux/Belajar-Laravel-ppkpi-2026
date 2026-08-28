<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class product extends Model
{
    //
    protected $fillable = ['category_id', 'name', 'price', 'description'];

    // banyak product memiliki 1 buah category
    // belongsTo
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
