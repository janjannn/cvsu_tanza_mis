<?php

namespace App\Models;

use App\Enums\TimePeriod;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dtr extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dailySessions(): HasMany
    {
        return $this->hasMany(DailySessions::class);
    }

    public function isSameDay($day): bool
    {
        return Carbon::parse($this->date)->format('m') == $day;
    }

    public function getSession($period)
    {

        $sessions = $this->dailySessions->filter(function ($session) use ($period){
            return $session->time_period === TimePeriod::from($period);
        });

        return empty($sessions) ? [] : $sessions->first();
    }

}
