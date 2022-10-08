<?php

use Illuminate\Support\Facades\Route;

//frontsite
use App\Http\Controllers\Frontsite\LandingController;
use App\Http\Controllers\Frontsite\AppointmentController;
use App\Http\Controllers\Frontsite\NotificationController;
use App\Http\Controllers\Frontsite\ReportingController;
use App\Http\Controllers\Frontsite\SuccessRegisterController;

//backsite

//Input your backsite controller here
use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Backsite\PermissionController;
use App\Http\Controllers\Backsite\RoleController;
use App\Http\Controllers\Backsite\UserController;
use App\Http\Controllers\Backsite\TypeUserController;
use App\Http\Controllers\Backsite\AppointmentBacksiteController;
use App\Http\Controllers\Backsite\ReportingContainerController;
use App\Http\Controllers\Backsite\NotificationsBacksiteController;

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

Route::group(['middleware' =>['auth:sanctum','verified']], function(){
        //appointment pages
        Route::resource('appointment', AppointmentController::class);

        //notification pages
        Route::resource('notification', NotificationController::class);

       //notification pages
       Route::resource('reporting', ReportingController::class);
});

Route::group(['prefix' => 'backsite', 'as' => 'backsite.', 'middleware' => ['auth:sanctum', 'verified']], function () {

    // Dashboard Page di backsite
    Route::resource('dashboard', DashboardController::class);

    // permission Page di backsite
    Route::resource('permission', PermissionController::class);

    // role Page di backsite
    Route::resource('role', RoleController::class);

    // user Page di backsite
    Route::resource('user', UserController::class);

    // type user Page di backsite
    Route::resource('type_user', TypeUserController::class);

    // Appointment backsite Page di backsite
    Route::resource('appointment', AppointmentBacksiteController::class);

    // Notifications backsite Page di backsite
    Route::resource('notifications', NotificationsBacksiteController::class);

    // Notifications backsite Page di backsite
    Route::resource('reporting', ReportingContainerController::class);

    //success pages
    Route::resource('successregister', SuccessRegisterController::class);


});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
