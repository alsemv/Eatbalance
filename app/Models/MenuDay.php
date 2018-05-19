<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuDay extends Model
{
    protected $fillable = [
        'menu_id', 'week_day_id',
    ];

    public function menu()
    {
        return $this->belongsTo('App\Models\Menu');
    }

    public function meals()
    {
        return $this->belongsToMany('App\Models\Meal', 'week_day_meals');
    }

    public function week_day()
    {
        return $this->belongsTo('App\Models\WeekDay');
    }

    public function meal_times()
    {
        return $this->belongsToMany('App\Models\MealTime', 'week_day_meals');
    }
}