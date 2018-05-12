@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div id="meals-list" v-cloak>
                            <div class="row py-5 menu">
                                <div v-for="menu in menus" class="btn btn-light" :class="{ 'active': menu.id === current_menu}"
                                        v-on:click="clickMenuBtn" v-bind:attr-menu="menu.id">@{{menu.name}}
                                </div>
                            </div>

                            <div class="row py-5 day-button">
                                <div v-for="(day, index) in menu_days" class="btn btn-light"
                                        :class="{ 'active': day.week_day_id === current_day}" v-on:click="clickBtn"
                                        v-bind:attr-menu="day.menu_id" v-bind:attr-day="day.week_day_id">
                                    @{{ name_days[index] }}
                                </div>
                            </div>


                            <div class="row lists">
                                <div class="col-md-3 list-item" v-for="item in items">
                                    <img v-bind:src="item.image" alt="">
                                    <p>@{{ item.time_name }}, @{{ item.name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
