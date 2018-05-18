@extends('layouts.admin')
@section('content')
    <div class="card mb-3 meal">
        <div class="card-header">Список меню</div>
        <div class="card-body">
            <a class="btn btn-light mb-3" href="{{ route('admin.menu.create') }}">Добавить меню</a>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Название</th>
                    <th>Цена за день</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($menus as $menu)
                    <tr>
                        <td class="text-center">{{$menu->id}}</td>
                        <td>{{$menu->name}}</td>
                        <td class="text-center">{{$menu->price}}</td>
                        <td class="text-center"><a href="{{route('admin.menu.show', ['id' => $menu->id])}}">Перейти</a></td>
                        <td class="text-center"><a href="{{route('admin.menu.edit', ['id' => $menu->id])}}">Ред.</a></td>
                        <td class="text-center"><a href="{{route('admin.menu.delete', ['id' => $menu->id])}}" onclick="return confirm('Вы действительно хотите удалить?')">Удалить</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection