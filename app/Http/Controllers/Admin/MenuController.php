<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateRequest;
use App\Models\Menu;
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

    public function store(CreateRequest $request)
    {
        Menu::create([
            'name' => $request['name'],
            'price' => $request['price'],
        ]);

        /**
         * Добавить в таблицу menu_days все дни для нового меню
         */

        return redirect()->route('admin.menu.index');
    }

    public function edit($id)
    {

    }

    public function update(Request $request)
    {

    }

    public function delete($id)
    {

    }
}