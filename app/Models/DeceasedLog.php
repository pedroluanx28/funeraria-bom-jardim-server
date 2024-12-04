<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeceasedLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'online_funeral_id',
        'start_date',
        'end_date',
        'deceased_name',
    ];

    public function onlineFuneral()
    {
        return $this->belongsTo(OnlineFuneral::class);
    }
}
