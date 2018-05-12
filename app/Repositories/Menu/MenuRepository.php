<?php

namespace App\Reposotories\Menu;

use App\Models\Menu;
use App\Reposotories\Repository;
use Illuminate\Support\Facades\DB;

class MenuRepository extends Repository
{
    public function __construct()
    {
        parent::__construct(new Menu());
    }

    public function first($id)
    {
        return $this->model::find($id);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function first_menu()
    {
        $first_menu = $this->model::all()->first();
        $day_id = date('N', time());

        return $this->list_meals_menu_day($first_menu->id, $day_id);
    }

    public function start_menu()
    {
        $first_menu = $this->model::all()->first();

        $current_day = (int) date('N', time());

        $days_names = [];
        foreach(($list_menu_days = $first_menu->menu_days) as $day){
            $days_names[] = $day->week_day()->first()->name;
        }

        /**
         * array with start menu
         */
        $response = [];

        $response['list_menus'] = $this->model::all();
        $response['list_meals'] = $this->list_meals_menu_day($first_menu->id, $current_day);
        $response['list_days_names'] = $days_names;
        $response['list_menu_days'] = $list_menu_days;
        $response['current_menu'] = $first_menu->id;
        $response['current_day'] = $current_day;

        return $response;
    }

    public function select_menu($id)
    {
        $first_menu = $this->model::find($id);

        $current_day = (int) date('N', time());

        $days_names = [];
        foreach(($list_menu_days = $first_menu->menu_days) as $day){
            $days_names[] = $day->week_day()->first()->name;
        }

        /**
         * array with start menu
         */
        $response = [];

        $response['list_menus'] = $this->model::all();
        $response['list_meals'] = $this->list_meals_menu_day($id, $current_day);
        $response['list_days_names'] = $days_names;
        $response['list_menu_days'] = $list_menu_days;
        $response['current_menu'] = $first_menu->id;
        $response['current_day'] = $current_day;

        return $response;
    }

    /**
     * @param $menu_id
     * @param $day_id
     * @collection of objects with attributes [meal_times.name, meals.name, meals.calories, meals.weight]
     */
    public function list_meals_menu_day($menu_id, $day_id)
    {
        return DB::table('menus')->where('menus.id', '=', $menu_id)
            ->join('menu_days', 'menus.id', '=', 'menu_days.menu_id')
            ->where('menu_days.week_day_id', '=', $day_id)
            ->join('week_day_meals', 'menu_days.id', '=', 'week_day_meals.menu_day_id')
            ->join('meal_times', 'week_day_meals.meal_time_id', '=', 'meal_times.id')
            ->join('meals', 'week_day_meals.meal_id', '=', 'meals.id')
            ->orderBy('meal_times.order', 'asc')
            ->select('meal_times.name as time_name', 'meals.name', 'meals.calories', 'meals.weight', 'meals.image')
            ->get();
    }
}