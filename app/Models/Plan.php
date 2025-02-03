<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'joining',
        'monthly_fee',
        'shortage',
        'coverage',
    ];

    public function benefits()
    {
        return $this->hasMany(Benefit::class);
    }
}
