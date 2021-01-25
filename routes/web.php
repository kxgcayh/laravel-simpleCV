<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\UserController;
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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::put('/user/update', [UserController::class, 'update'])->name('user.update');
Route::post('/education/store', [EducationController::class, 'store'])->name('education.store');
Route::post('/experience/store', [ExperienceController::class, 'store'])->name('experience.store');
Route::get('/resume/index', [ResumeController::class, 'index'])->name('resume');
Route::get('/getMyCV/{id}', [ResumeController::class, 'getPDF'])->name('getPDF');
