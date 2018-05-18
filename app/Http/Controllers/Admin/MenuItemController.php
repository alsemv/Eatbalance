<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Meal;
use App\Models\MealTime;
use App\Models\MenuDay;
use App\Models\WeekDayMeal;
use App\Reposotories\Menu\MenuRepository;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{

    protected $menu_repository;

    public function __construct()
    {
        $this->menu_repository = new MenuRepository();
    }

    public function create($menu_id)
    {
        $week_days = MenuDay::where('menu_id', $menu_id)->with('week_day')->get();
        $meal_times = MealTime::pluck('id', 'name');
        $meals_list = Meal::select('id', 'name', 'image')->get();

        return view('admin.menus.item.create', ['week_days' => $week_days, 'meal_times' => $meal_times, 'meals_list' => $meals_list, 'menu_id' => $menu_id]);
    }

    public function store(Request $request)
    {
        WeekDayMeal::create([
            'menu_day_id' => $request['day_id'],
            'meal_time_id' => $request['time_id'],
            'meal_id' => $request['meal_id'],
        ]);

        return redirect()->route('admin.menu.show', ['id' => $request['menu_id']]);
    }

    public function edit($day_id, $meal_id, $time_id, $menu_id)
    {
        $week_days = MenuDay::where('menu_id', $menu_id)->with('week_day')->get();
        $meal_times = MealTime::pluck('id', 'name');
        $meals_list = Meal::select('id', 'name', 'image')->get();

        $menu_meal = $this->menu_repository->meal($day_id, $meal_id, $time_id);

        return view('admin.menus.item.edit', ['week_days' => $week_days, 'meal_times' => $meal_times, 'menu_meal' => $menu_meal, 'meals_list' => $meals_list]);
    }

    public function update(Request $request)
    {
        WeekDayMeal::where('id', $request['id'])
            ->update([
                'menu_day_id' => $request['day_id'],
                'meal_time_id' => $request['time_id'],
                'meal_id' => $request['meal_id'],
            ]);

        return redirect()->route('admin.menu.show', ['id' => $request['menu_id']]);
    }

    public function delete($id)
    {
        $menu_item = WeekDayMeal::findOrFail($id);
        $menu_item->delete();

        return redirect()->back();
    }
}