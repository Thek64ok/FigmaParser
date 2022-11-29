<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotifyModel extends Model
{
    use HasFactory;

    protected $table = 'notify';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
    ];
}
