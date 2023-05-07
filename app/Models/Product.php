<?php

namespace App\Models;

use App\Models\Review;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Maize\Markable\Markable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'image',
        'description',
        'price',
        'care_instructions'
    ];
    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
