<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Sluggable;

    protected $fillable = ['title', 'slug', 'category_id', 'vendor_code', 'material_id', 'stone_id', 'weight', 'size', 'price', 'picture'];


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

    public function material() {
        return $this->belongsTo(Material::class);
    }

    public function stone() {
        return $this->belongsTo(Stone::class);
    }



}
