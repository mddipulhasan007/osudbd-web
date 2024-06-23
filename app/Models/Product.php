<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'feature_image',
        'squ_no',
        'qty',
        'company_name',
        'regular_price',
        'offer_price',
        'offer_percent',
        'category_id',
        'type_id'
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function type()
    {
        return $this->belongsTo(ProductType::class);
    }
}
