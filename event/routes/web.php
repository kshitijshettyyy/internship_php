<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EventsController;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth','admin']], function () {
    Route::get('/dashboard', function () { 
        $user=User::all();
        return view('admin.dashboard')->with('user',$user);
    });
    Route::put('/user_update/{id}',[EventsController::class,'update_user']);
    Route::get('/role-edit/{id}',[EventsController::class,'edit_user']);

});

Route::get('/warden',[EventsController::class,'warden']);




Route::get('/events',[EventsController::class,'index']);
Route::get('/newevent',[EventsController::class,'new']);

Route::post('/save-event',[EventsController::class,'store']);

Route::get('/news',[EventsController::class,'new_news']);
Route::post('/save-news',[EventsController::class,'store_news']);