@extends('layouts.admin')
@section('content')
    <div class="card mb-3 meal">
        <div class="card-header">{{$menu->name}}</div>
        <div class="card-body">

            <form action="{{route('admin.menu.show', ['id' => $menu->id])}}" method="GET">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="id" class="col-form-label">Время</label>
                            <input id="id" class="form-control" name="time" value="{{ request('time') }}">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Название</label>
                            <input id="name" class="form-control" name="name" value="{{ request('name') }}">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="calories" class="col-form-label">День</label>
                            <input id="calories" class="form-control" name="day" value="{{ request('day') }}">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="col-form-label">&nbsp;</label><br/>
                            <button type="submit" class="btn btn-light">Выбрать</button>
                        </div>
                    </div>
                </div>
            </form>

            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Время</th>
                    <th>Фото</th>
                    <th>Название</th>
                    <th>Калории</th>
                    <th>Вес</th>
                    <th>День</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($meals as $meal)
                    <tr>
                        <td class="text-center">{{$meal->time_name}}</td>
                        <td><img class="img-fluid" src="{{$meal->image}}"></td>
                        <td>{{$meal->name}}</td>
                        <td class="text-center">{{$meal->calories}}</td>
                        <td class="text-center">{{$meal->weight}}</td>
                        <td class="text-center">{{$meal->day_name}}</td>
                        <td class="text-center"><a href="{{route('admin.menu.edit', ['day_id' => $meal->day_id, 'meal_id' => $meal->meal_id, 'time_id' => $meal->time_id, 'menu_id' => $menu->id])}}">Ред.</a></td>
                        <td class="text-center"><a href="{{route('admin.menu.item.delete', ['id' => $meal->week_day_meals_id])}}" onclick="return confirm('Вы действительно хотите удалить?')">Удалить</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $meals->links() }}

        </div>
    </div>
@endsection