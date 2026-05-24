<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Pastikan ada 'slug' di dalam array fillable ini
    protected $fillable = ['name', 'slug'];

    // Relasi ke Event (jika ada)
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}