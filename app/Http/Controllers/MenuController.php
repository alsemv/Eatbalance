<?php

namespace App\Http\Controllers;

use App\Reposotories\Menu\MenuRepository;

class MenuController extends Controller
{
    protected $menu_repository;

    public function __construct()
    {
        $this->menu_repository = new MenuRepository();
    }

    public function start_menu_json()
    {
        return response()->json($this->menu_repository->start_menu());
    }

    public function meals_list_json($menu_id, $day_id)
    {
        $meals = $this->menu_repository->list_meals_menu_day($menu_id, $day_id);
        return response()->json($meals);
    }

    public function select_menu_json($id)
    {
        return response()->json($this->menu_repository->select_menu($id));
    }
}