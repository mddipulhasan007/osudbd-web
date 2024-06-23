<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'title', 'slug', 'content', 'pdf_url', 'feature_image'];

    public function category()
    {
        return $this->belongsTo(ProjectCategory::class);
    }
}
