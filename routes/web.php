<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Candidate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Candidate::class, 'home']);
Route::post('/getJobs', [Candidate::class, 'getJobs']);
Route::get('/apply', [Candidate::class, 'apply']);

