<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//Hello world
Route::get('foo', function () {
    return 'Hello world';
});

//user:usercontroll
//Error: 少了控制user 的 conteroller,未來需補齊
Route::get('/user', 'UserController@index');

//練習重定向
Route::redirect('/here', '/there');

//重定向 ROC 到 Taiwin (302 Found)
Route::redirect('/roc', '/taiwan', 302);

//訪問 /welcome ，顯示 laravel 歡迎視圖
Route::view('/welcome', 'welcome');
