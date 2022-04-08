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

use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailVerificationController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Artisan;

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

Route::prefix('/student')->middleware(['auth', 'verified'])->group(function(){

    include (__DIR__ . '/student/student.php');

});

Route::prefix('/administrator')->middleware(['auth', 'verified'])->group(function(){

    include(__DIR__. '/admin/admin.php');

});

Route::get('/', [FrontendController::class, 'index']);

Route::get('/register', [RegistrationController::class, 'register']);
Route::post('/register-process', [RegistrationController::class, 'register_process']);

Route::get('/email/verify-required', [EmailVerificationController::class, 'verify_required'])->middleware(['auth']);
Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify_user'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::get('/verified/user', [EmailVerificationController::class, 'verified_user'])->middleware(['auth', 'verified']);
Route::get('/email/resend', [EmailVerificationController::class, 'resend_email'])->middleware(['auth']);
Route::get('/event/calendar', [FrontendController::class, 'calendar']);
Route::get('/event/events',[FrontendController::class, 'event_list']);


//========================================================================//
Route::get('/roles_permission', [AuthController::class, 'roles_permission']);

Route::get('/clear-app', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');

    return 'Clear App';
});
