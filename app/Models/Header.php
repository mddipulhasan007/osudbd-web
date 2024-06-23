<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'email',
        'phone',
        'address',
        'facebook',
        'linkedin',
        'youtube',
        'whatsapp',
        'contact_email',
        // Add other fields if needed
    ];

    public static function getContactEmail()
    {
        $header = self::first();
        return $header ? $header->contact_email : config('mail.from.address');
    }
}
