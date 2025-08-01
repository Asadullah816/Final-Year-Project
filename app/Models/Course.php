<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
