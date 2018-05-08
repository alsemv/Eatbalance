<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class MenusController extends Controller
{
    public function index()
    {
        return view('admin.menus.index');
    }

    public function create()
    {
        return view('admin.menus.create');
    }
}