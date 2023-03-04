<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'content', 'image_path'
    ];

    public function product()
   {
       return $this->belongsTo(Products::class);
   }
}
