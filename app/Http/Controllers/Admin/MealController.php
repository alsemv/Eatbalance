<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Reposotories\Meal\MealRepository;
use Illuminate\Http\Request;

class MealController extends Controller
{
    private $repository;

    public function __construct()
    {
        $this->repository = new MealRepository();
    }

    public function index(Request $request)
    {
        $meals = $this->repository->search($request);

        return view('admin.meal.index', ['meals' => $meals]);
    }
}