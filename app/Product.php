<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Sluggable;

    protected $fillable = ['title', 'slug', 'category_id', 'vendor_code', 'material', 'stone', 'weight', 'size', 'price', 'picture'];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }



    public function category() {
        return $this->belongsTo(Category::class);
    }



}
