<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'left_about_txt',
        'read_more_text',
        'read_more_url',
        'bottom_text_1',
        'bottom_text_2',
        'bottom_text_3',
        'bottom_text_4',
        'right_values_txt',
        'safety_text',
        'safety_txt',
        'service_text',
        'service_txt',
        'integrity_text',
        'integrity_txt',
    ];
}
