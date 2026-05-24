<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    // Tambahkan baris ini untuk mengizinkan kolom name dan logo_url diisi
    protected $fillable = [
        'name',
        'logo_url'
    ];
}   