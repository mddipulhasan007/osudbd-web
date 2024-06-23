<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    use HasFactory;
    protected $fillable = [
        'bdcmb_banner_img',
        'bdcmb_show_hide',
        'teams_show_hide',
        'left_about_txt',
        'total_projects_count',
        'staff_members_count',
        'running_project_count',
        'dist_exp_count',
        'about_img',
        'integrity_txt',
    ];
}
