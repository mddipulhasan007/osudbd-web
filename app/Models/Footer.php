<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'logo',
        'about_txt',
        's_menu_url1',
        's_menu_url2',
        's_menu_url3',
        's_menu_url4',
        's_menu_url5',
        's_menu_url6',
        'copyright_txt',
        'foo_menu_url1',
        'foo_menu_url2',
        'foo_menu_url3',
        'foo_menu_url4',
    ];
}
