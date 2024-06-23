<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'content', 'category_id', 'feature_image', 'pdf_url'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
