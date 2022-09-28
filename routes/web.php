<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontsite\LandingController;
use App\Http\Controllers\Frontsite\AppointmentController;
use App\Http\Controllers\Frontsite\NotificationController;
use App\Http\Controllers\Frontsite\ReportingController;


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

Route::resource('/', LandingController::class);

Route::group(['prefix'=>'backsite', 'as' =>'baclsite.','middleware' =>['auth:sanctum','verified']], function(){

    //appointment pages
    Route::resource('appointment', AppointmentController::class);

    //notification pages
    Route::resource('notification', NotificationController::class);

   //notification pages
   Route::resource('reporting', ReportingController::class);

});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
