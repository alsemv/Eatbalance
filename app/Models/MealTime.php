<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealTime extends Model
{
    public function meals()
    {
        return $this->belongsToMany('App\Models\Meal', 'week_day_meals');
    }

    public function menu_days()
    {
        return $this->belongsToMany('App\Models\MenuDay', 'week_day_meals');
    }
}