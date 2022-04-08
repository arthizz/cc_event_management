<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Student\StudentProfileController;



Route::get('/profile', [StudentProfileController::class, 'student_profile']);
Route::post('/ajax/{process}', [StudentProfileController::class, 'ajax']);

?>