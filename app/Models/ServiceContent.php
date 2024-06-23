<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'fire_protect_system',
        'hvac_system',
        'electrical_solu',
        'middle_title_txt',
        'service_img',
        'plumbing_service',
        'elevator_escalator',
        'safety_consult',
    ];
}
