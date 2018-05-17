<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MealTime;
use App\Models\WeekDay;
use App\Models\WeekDayMeal;
use App\Reposotories\Menu\MenuRepository;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    protected $menu_repository;

    public function __construct()
    {
        $this->menu_repository = new MenuRepository();
    }

    public function index()
    {
        $menus = $this->menu_repository->all();

        return view('admin.menus.index', ['menus' => $menus]);
    }

    public function show(Request $request, $id)
    {
        $menu = $this->menu_repository->first($id);
        $meals_list = $this->menu_repository->search($request, $id);

        return view('admin.menus.show', ['menu' => $menu, 'meals' => $meals_list]);
    }

    public function create()
    {
        return view('admin.menus.create');
    }

    public function edit($day_id, $meal_id, $time_id)
    {
        $week_days = WeekDay::pluck('id', 'name');
        $meal_times = MealTime::pluck('id', 'name');

        $menu_meal = $this->menu_repository->meal($day_id, $meal_id, $time_id);

        return view('admin.menus.edit', ['week_days' => $week_days, 'meal_times' => $meal_times, 'menu_meal' => $menu_meal]);
    }

    public function update(Request $request)
    {
        WeekDayMeal::where('id', $request['id'])
            ->update([
                //'menu_day_id' => $request['day_id'],
                'meal_time_id' => $request['time_id'],
            ]);

        return redirect()->route('admin.menu.edit');
    }
}