<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Stone extends Model
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
        return $this->belongsToMany(Product::class);
    }


}
