<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registrations/create', [RegistrationController::class, 'create']);
Route::post('/registrations', [RegistrationController::class, 'store']);
