<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Meal\CreateRequest;
use App\Http\Requests\Admin\Meal\UpdateRequest;
use App\Models\Meal;
use App\Reposotories\Meal\MealRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function create()
    {
        return view('admin.meal.create');
    }

    public function store(CreateRequest $request)
    {
        $path = Storage::putFile('uploads/meals', $request->file('image'));

        Meal::create([
            'name' => $request['name'],
            'calories' => $request['calories'],
            'weight' => $request['weight'],
            'image' => '/' . $path,
        ]);

        return redirect()->route('admin.meal.index');
    }

    public function update(UpdateRequest $request)
    {
        Meal::where('id', $request['id'])
            ->update([
                'name' => $request['name'],
                'calories' => $request['calories'],
                'weight' => $request['weight'],
            ]);

        $this->updateImage($request);

        return redirect()->route('admin.meal.index');
    }

    public function updateImage(UpdateRequest $request): void
    {
        if ($request->has('image'))
        {
            $meal = Meal::findOrFail($request['id']);

            Storage::delete($meal->image);
            $path = Storage::putFile('uploads/meals', $request->file('image'));

            $meal->update([
                'image' => '/' . $path,
            ]);
        }

    }

    public function edit($id)
    {
        $meal = Meal::findOrFail($id);

        return view('admin.meal.edit', ['meal' => $meal]);
    }

    public function delete($id)
    {
        $meal = Meal::findOrFail($id);

        Storage::delete($meal->image);
        $meal->delete();

        return redirect()->route('admin.meal.index');
    }
}