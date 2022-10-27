<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contactuscontroller;
use app\Http\Controllers\BotManController;



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

// Route::get('/', function () {
//     return view('contact');
// });



Route::post('/send-email',[Contactuscontroller::class,'sendEmail'])->name('Sendemail');

Route::view('/','index');
Route::view('/contact','contact');
Route::view('/about','about')->name('about');
Route::view('/career','career');
Route::view('/solutions','solutions');

Route::match(['get', 'post'], '/botman', 'BotManController@handle');

