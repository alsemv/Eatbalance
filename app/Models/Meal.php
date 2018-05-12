<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    public function menu_days()
    {
        return $this->belongsToMany('App\Models\MenuDay', 'week_day_meals');
    }

    public function meal_times()
    {
        return $this->belongsToMany('App\Models\MealTime', 'week_day_meals');
    }
}