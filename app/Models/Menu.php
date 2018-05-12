<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function menu_days()
    {
        return $this->hasMany('App\Models\MenuDay');
    }
}