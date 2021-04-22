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

Route::get('/was/{arg}', function ($args) {
    $name =DB::table('users')->where('name',$args)->first();
    return $name->email;
});

Route::get('/was/', function () {
    $name =DB::table('users')->where('name','Wassim')->first();
    return $name->email;
});

Route::get('/cont/{arg}', 'App\Http\Controllers\InfosController@show');
Route::get('/insert/{arg}', 'App\Http\Controllers\UserCommentController@addRecords');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
