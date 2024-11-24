<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineFuneral extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_name',
        'room_password',
        'cam_link',
        'is_active',
    ];
}
