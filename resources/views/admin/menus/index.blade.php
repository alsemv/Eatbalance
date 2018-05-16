@extends('layouts.admin')
@section('content')
    <div class="card mb-3 meal">
        <div class="card-header">Список меню</div>
        <div class="card-body">
            @foreach($menus as $menu)
               <a href="{{route('admin.menu.show', ['id' => $menu->id])}}" class="btn btn-light">{{$menu->name}}</a>
            @endforeach
        </div>
    </div>
@endsection