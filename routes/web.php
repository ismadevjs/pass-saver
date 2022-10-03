<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
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


Route::get('/', [BackendController::class, 'social'])->name('social');
Route::post('/', [BackendController::class, 'socialPost'])->name('social.post');
Route::post('/update', [BackendController::class, 'socialUpdate'])->name('social.update');
Route::post('/delete', [BackendController::class, 'socialDelete'])->name('social.delete');

Route::get('/authentications', [BackendController::class, 'authentications'])->name('authentications');
Route::post('/authentications', [BackendController::class, 'authenticationsPost'])->name('authentications.post');
Route::post('/authenticationsupdate', [BackendController::class, 'authenticationsUpdate'])->name('authentications.update');
Route::post('/authenticationsdelete', [BackendController::class, 'authenticationsDelete'])->name('authentications.delete');