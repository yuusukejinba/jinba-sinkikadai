<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'store']);
Route::get('/admin/profile', [ContactController::class, 'profile']);
Route::post('/admin/register', [ContactController::class, 'register']);



Route::middleware('auth')->group(function () {
         Route::get('/admin', [ContactController::class, 'admin']);
         Route::get('/admin/contact/{id}', [ContactController::class, 'show']);
         Route::get('/admin/search', [ContactController::class, 'search']);
     });




