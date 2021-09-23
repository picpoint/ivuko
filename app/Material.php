<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Material extends Model
{

    use Sluggable;

    protected $fillable = ['title', 'slug'];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    public function product() {
        return $this->hasMany(Product::class);
    }


}
