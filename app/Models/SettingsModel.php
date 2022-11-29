<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingsModel extends Model
{
    use HasFactory;

    protected $table = 'settings';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'name',
        'time_check',
        'count_pages',
        'check_ideal',
        'text_ideal',
        'check_olx',
        'text_olx',
        'check_fb',
        'text_fb',
    ];
}
