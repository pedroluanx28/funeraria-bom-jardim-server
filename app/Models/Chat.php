<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = ['online_funeral_id'];

    public function onlineFuneral()
    {
        return $this->belongsTo(OnlineFuneral::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
