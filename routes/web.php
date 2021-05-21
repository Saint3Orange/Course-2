<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/


/*Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return 'About page';
});*/

/*Route::group(['prefix' => 'my'], function () {
    Route::get('/route/{name}', function ($name) {
        echo $name;
    });

});*/


use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'show']);

use App\Http\Controllers\test\FirstTestController;
use App\Http\Controllers\test\SecondTestController;

Route::group(['prefix' => 'test'], function () {
    Route::get('/1', [\App\Http\Controllers\FirstTestController::class, 'index']);
    Route::get('/2', [\App\Http\Controllers\SecondTestController::class, 'index']);
});

use App\Http\Controllers\UserController;

Route::get('/user/{name?}', [UserController::class, 'showName']);
Route::post('/user/store', [UserController::class, 'store']);

use App\Http\Controllers\MyController;

Route::group(['prefix' => 'my'], function () {
    Route::get('/route/{name}', [MyController::class, 'index']);
    Route::get('/controller', [MyController::class, 'get']);
    Route::get('/view', [MyController::class, 'sendView']);
});

use App\http\Controllers\TaskController;

Route::post('/task/store', [TaskController::class, 'store']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

use Illuminate\Support\Facades\Auth;

Route::get('/my/auth-user', function(){
    if (Auth::check()) {
        dump($user = Auth::user());
    }
    else dump("Требуется авторизация");
});
