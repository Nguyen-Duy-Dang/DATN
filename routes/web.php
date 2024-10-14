<?php
use App\Http\Controllers\SinhVienController;
use App\Http\Controllers\LopHocController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\db;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\duydang;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin');
