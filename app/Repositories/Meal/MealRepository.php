<?php

namespace App\Reposotories\Meal;

use App\Models\Meal;
use App\Reposotories\Repository;
use Illuminate\Http\Request;

class MealRepository extends Repository
{
    public function __construct()
    {
        parent::__construct(new Meal());
    }

    public function search(Request $request)
    {
        $query = $this->model::orderBy('id', 'asc');

        if (!empty($value = $request->get('id')))
            $query->where('id', $value);

        if (!empty($value = $request->get('name')))
            $query->where('name', 'like', '%' . $value . '%');

        if (!empty($value = $request->get('calories')))
            $query->where('calories', $value);

        if (!empty($value = $request->get('weight')))
            $query->where('weight', $value);

        return $query->paginate(10);
    }
}