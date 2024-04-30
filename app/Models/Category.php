<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [
        'id',
    ];

    public function categoryTags()
    {
        return $this->hasMany(CategoryTag::class)
            ->orderBy('name');
    }


    public function buildings()
    {
        return $this->hasMany(Building::class);
    }

    public $timestamps = false;
}
