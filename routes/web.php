<?php
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;


Route::get('/calcs/{value1}/{operator}/{value2}', [Controller::class, 'result']);

