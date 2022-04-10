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
use App\Http\Controllers\Admin\BackendController;
use App\Http\Controllers\Admin\EventController;

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

Route::get('/dashboard', [BackendController::class, 'index']);
Route::get('/user-page', [BackendController::class, 'users_page']);
Route::get('/event-management-page', [BackendController::class, 'event_management']);
Route::get('/department-list-page', [BackendController::class, 'department_list']);
Route::post('/backend-ajax/{action}', [BackendController::class, 'backend_ajax']);