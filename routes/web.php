<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\db;


Route::get('/', function () {
    return view('welcome');
});
Route::view('/index', 'demo');
