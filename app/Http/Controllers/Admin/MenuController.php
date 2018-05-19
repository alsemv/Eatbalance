<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateRequest;
use App\Models\Menu;
use App\Models\MenuDay;
use App\Reposotories\Menu\MenuRepository;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    private $menu_repository;

    private $week_days = [
        'Понедельник' => 1,
        'Вторник' => 2,
        'Среда' => 3,
        'Четверг' => 4,
        'Пятница' => 5,
        'Субботу' => 6,
        'Воскресенье' => 7
    ];

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

    public function store(CreateRequest $request)
    {
        $menu = Menu::create([
            'name' => $request['name'],
            'price' => $request['price'],
        ]);

        $this->assignMenuToWeekDays($menu->id);

        return redirect()->route('admin.menu.index');
    }

    private function assignMenuToWeekDays($menu_id): void
    {
        foreach ($this->week_days as $day)
        {
            MenuDay::create([
                'menu_id' => $menu_id,
                'week_day_id' => $day,
            ]);
        }
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);

        return view('admin.menus.edit', ['menu' => $menu]);
    }

    public function update(CreateRequest $request)
    {
        Menu::where('id', $request['id'])->update([
                'name' => $request['name'],
                'price' => $request['price'],
            ]
        );

        return redirect()->route('admin.menu.index');
    }

    public function delete($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->route('admin.menu.index');
    }
}