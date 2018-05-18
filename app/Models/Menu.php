<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name', 'price',
    ];

    public function menu_days()
    {
        return $this->hasMany('App\Models\MenuDay');
    }
}