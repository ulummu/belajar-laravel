<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard',['title'=>'sinau laravel']);
});

Route::get('home', function () {
    return view('home');
});

Route::redirect('/coba','/user');
Route::get('user/{name?}', function ($name = 'ulum'){
    return $name;
});

