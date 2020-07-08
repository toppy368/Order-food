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

//訪問 /foo 路由，會取得並顯示 Hello world 文字
Route::get('foo', function () {
    return 'Hello world';
});

//user:usercontroll
//Error: 少了控制user 的 conteroller,未來需補齊
//Route::get('/user', 'UserController@index');

//練習設定 /user/id 的 id function
//此段稍早在 conterllers 新增的 User function 相同
//若執行正確，訪問 /user/id 會顯示 id 字樣
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

//訪問 /user/name，name作為 ID 已設定為 null，畫面應該顯示 null 字串 
Route::get('user/{name?}', function ($name = null) {
    return $name;
});


//練習重定向，輸入 /here 路徑，頁面將自動跳轉到 /there
Route::redirect('/here', '/there');

//重定向 ROC 到 Taiwin (302 Found)
//若尾部數字更改為 301 將永久遷移路徑，例如網站更換網域可以使用 301 永久變更網域並自動跳轉
Route::redirect('/roc', '/taiwan', 302);

//訪問 /welcome ，顯示 laravel 歡迎視圖
//Route::view('/welcome', 'welcome');

//測試 /wolcome 頁面回傳參數
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
