@extends('layouts.admin')
@section('content')
    <div class="card mb-3 meal">
        <div class="card-header">Редакитировать Блюдо</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <form action="{{route('admin.meal.update')}}" enctype="multipart/form-data" method="POST">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Название</label>
                            <input id="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $meal->name }}">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="calories" class="col-form-label">Калории</label>
                            <input id="calories" class="form-control {{ $errors->has('calories') ? ' is-invalid' : '' }}" name="calories" value="{{ $meal->calories }}">
                            @if ($errors->has('calories'))
                                <span class="invalid-feedback"><strong>{{ $errors->first('calories') }}</strong></span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="weight" class="col-form-label">Вес</label>
                            <input id="weight" class="form-control {{ $errors->has('weight') ? ' is-invalid' : '' }}" name="weight" value="{{ $meal->weight }}">
                            @if ($errors->has('weight'))
                                <span class="invalid-feedback"><strong>{{ $errors->first('weight') }}</strong></span>
                            @endif
                        </div>
                        {{--<div class="form-group">--}}
                            {{--<label for="image">Добавить фото</label>--}}
                            {{--<input type="file" class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}" name="image">--}}
                            {{--@if ($errors->has('image'))--}}
                                {{--<span class="invalid-feedback">{{ $errors->first('image') }}</span>--}}
                            {{--@endif--}}
                        {{--</div>--}}

                        <input type="hidden" name="id" value="{{$meal->id}}">

                        <div class="form-group">
                            <label class="col-form-label">&nbsp;</label><br/>
                            <button type="submit" class="btn btn-light">Обновить</button>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection