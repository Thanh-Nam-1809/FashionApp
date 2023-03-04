<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'content', 'image_path', 'price', 'gender', 'description', 'detail', 'condition'
    ];

    public function banner()
    {
        return $this->belongsTo(Banners::class);
    }
}
