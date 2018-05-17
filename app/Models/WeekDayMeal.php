<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeekDayMeal extends Model
{
    protected $fillable = [
        'menu_day_id', 'meal_time_id',
    ];
}