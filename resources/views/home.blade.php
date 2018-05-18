@extends('layouts.app')

@section('yellow')
    <div class="wraper">
        <div class="container-fluid">
            <div class="justify-content-center">
                <div class="col-md-12">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-5 col-xl-5 col-sm-12 offset-lg-1">
                            <h1 style="margin-top: 8vw" class="havka col-sm-12 text-center text-md-left text-lg-left text-xl-left">
                                Правильное питание с доставкой на дом
                            </h1>
                            <div class="no_limits col-sm-12 text-center text-md-left text-lg-left text-xl-left">
                                Без диет и ограничений <b>24/7</b>
                            </div>
                            <div class="col-sm-12">
                                <img class="d-block d-sm-block d-md-none d-lg-none d-xl-none img-fluid" src="/uploads/figures/lunch_box.png"
                                     alt="lunch_box" style="margin-bottom: 50px; margin-top: 10px; margin-left: 5px">
                            </div>
                            <div style="margin-top: 4vw;" class="d-block d-sm-block d-md-none d-lg-none d-xl-none">
                                <button class="raise" style="background-color: black; color: white; width: 100%; height: 8vmax">Заказать</button>
                            </div>
                            <div style="margin-top: 4vw; margin-left: 15px" class="d-none d-sm-none d-md-block">
                                <button class="raise" style="background-color: black; color: white; width: 200px;">Заказать</button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div style="margin-top: 15vw;">
                                <img class="d-none d-sm-none d-md-block img-fluid" src="/uploads/figures/lunch_box.png"
                                     alt="lunch_box" style="margin-bottom: 50px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

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
                                <div class="col-md-12">
                                    <div v-for="menu in menus" class="btn btn-light"
                                         :class="{ 'active': menu.id === current_menu}"
                                         v-on:click="clickMenuBtn" v-bind:attr-menu="menu.id">@{{menu.name}}
                                    </div>
                                </div>
                            </div>

                            <div class="row py-5 day-button">
                                <div class="col-md-12">
                                    <div v-for="(day, index) in menu_days" class="btn btn-light"
                                         :class="{ 'active': day.week_day_id === current_day}" v-on:click="clickBtn"
                                         v-bind:attr-menu="day.menu_id" v-bind:attr-day="day.week_day_id">
                                        @{{ name_days[index] }}
                                    </div>
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
