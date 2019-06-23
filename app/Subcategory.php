<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $guarded = [];

    public function categoria()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
