<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}