<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'day_of_week',
        'user_id',
        'max_working_hour',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
