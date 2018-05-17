@extends('layouts.admin')
@section('content')
    <div class="card mb-3 meal">
        <div class="card-header">Редактировать {{$menu_meal->menu_name}} - {{$menu_meal->meal_name}} <a class="btn btn-light float-right" href="{{ URL::previous() }}">Назад</a></div>
        <div class="card-body">
            <form action="{{route('admin.menu.update', ['id' => $menu_meal->week_day_meal_id ])}}" method="POST">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="time_id" class="col-form-label">Время</label>
                            <select class="form-control" name="time_id" id="time_id">
                                @foreach($meal_times as $key => $value)
                                    <option value="{{$value}}" {{$value == $menu_meal->meal_time_id ? "selected='selected'":""}}>{{$key}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="day" class="col-form-label">День</label>
                            <select class="form-control" name="day_id" id="day">
                                @foreach($week_days as $key => $value)
                                    <option value="{{$value}}" {{$value == $menu_meal->week_day_id ? "selected='selected'":""}}>{{$key}}</option>
                                @endforeach
                            </select>

                            @csrf
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
        </div>
    </div>
@endsection