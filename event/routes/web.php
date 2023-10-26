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
});


Route::get('/events',[EventsController::class,'index']);
Route::get('/newevent',[EventsController::class,'new']);

Route::post('/save-event',[EventsController::class,'store']);
