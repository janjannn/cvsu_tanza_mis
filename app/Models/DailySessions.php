<?php

namespace App\Models;

use App\Enums\TimePeriod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailySessions extends Model
{
    use HasFactory;

    protected $fillable = [
        'dtr_id',
        'start_time',
        'end_time',
        'time_period'
    ];

    protected $casts = [
        'time_period' => TimePeriod::class,
    ];
}
