@extends('layouts.admin')
@section('content')
    <div class="card mb-3 meal">
        <div class="card-header">Редактировать меню</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <form action="{{route('admin.menu.update', ['id' => $menu->id])}}" method="POST">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Название</label>
                            <input id="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                   name="name" value="{{ $menu->name }}">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="price" class="col-form-label">Цена</label>
                            <input id="price" class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}"
                                   name="price" value="{{ $menu->price }}">
                            @if ($errors->has('price'))
                                <span class="invalid-feedback"><strong>{{ $errors->first('price') }}</strong></span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">&nbsp;</label><br/>
                            <button type="submit" class="btn btn-light">Добавить</button>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection