@extends('layouts.admin')
@section('content')
    <div class="card mb-3">
        <div class="card-header">Список Блюд</div>
        <div class="card-body">

            <form action="{{route('admin.meal.index')}}" method="GET">
                <div class="row">
                    <div class="col-sm-1">
                        <div class="form-group">
                            <label for="id" class="col-form-label">№</label>
                            <input id="id" class="form-control" name="id" value="{{ request('id') }}">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">

                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Название</label>
                            <input id="name" class="form-control" name="name" value="{{ request('name') }}">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="calories" class="col-form-label">Калории</label>
                            <input id="calories" class="form-control" name="calories" value="{{ request('calories') }}">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="weight" class="col-form-label">Вес</label>
                            <input id="weight" class="form-control" name="weight" value="{{ request('weight') }}">
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
                    <th>№</th>
                    <th>Фото</th>
                    <th>Название</th>
                    <th>Калории</th>
                    <th>Вес</th>
                </tr>
                </thead>
                <tbody>
                @foreach($meals as $meal)
                    <tr>
                        <td>{{$meal->id}}</td>
                        <td><img class="img-fluid" src="{{$meal->image}}"></td>
                        <td>{{$meal->name}}</td>
                        <td>{{$meal->calories}}</td>
                        <td>{{$meal->weight}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $meals->links() }}

        </div>
    </div>
@endsection