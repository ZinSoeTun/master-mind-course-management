<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    //retrive the courses relative the categories
    public function courses() : HasMany
    {
        return $this->hasMany(Course::class);
    }
}
