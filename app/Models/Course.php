<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'price',
        'duration',
        'description',
        'image',
        'students_count',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
