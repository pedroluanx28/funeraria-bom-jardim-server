<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineFuneral extends Model
{
    use HasFactory;

    static function boot()
    {
        parent::boot();

        static::created(function ($model) {
            $model->chat()->create([
                'online_funeral_id' => $model->id,
            ]);
        });
    }

    protected $fillable = [
        'room_name',
        'room_password',
        'cam_link',
        'is_active',
    ];

    public function chat()
    {
        return $this->hasOne(Chat::class);
    }
}
