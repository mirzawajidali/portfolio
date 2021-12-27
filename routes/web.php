<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\Auth;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\Profile;
use App\Http\Controllers\Portfolio\Portfolio;
use App\Models\Skill;
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
//Portfolio Routes
Route::get('/',[Portfolio::class, 'portfolio'])->name('portfolio');

//Admin Routes
Route::prefix('admin')->group(function () {
    //Auth
    Route::get('/',[Auth::class, 'login'])->name('login')->middleware('alreadylogged');
    Route::post('/',[Auth::class, 'logged_in'])->name('login')->middleware('alreadylogged');
    Route::get('/logout',[Auth::class, 'logout'])->name('logout')->middleware('authcheck');
    //Dashboard
    Route::get('/dashboard',[Dashboard::class, 'dashboard'])->name('dashboard')->middleware('authcheck');
    //Profile
    Route::get('/profile',[Profile::class, 'profile'])->name('profile')->middleware('authcheck');
    Route::post('/profile/update',[Profile::class, 'profile_update'])->name('profile_update')->middleware('authcheck');
    //Banner
    Route::get('/banner',[BannerController::class, 'banner'])->name('banner')->middleware('authcheck');
    Route::post('/banner',[BannerController::class, 'banner_update'])->name('banner_update')->middleware('authcheck');
    //About
    Route::get('/about',[AboutController::class, 'about'])->name('about')->middleware('authcheck');
    Route::post('/about',[AboutController::class, 'about_update'])->name('about_update')->middleware('authcheck');
    //Skill
    Route::get('/skill',[AboutController::class, 'skill'])->name('skill')->middleware('authcheck');
    Route::post('/skill',[AboutController::class, 'skill_add'])->name('skill_add')->middleware('authcheck');
    Route::get('/skill_delete/{number}',[AboutController::class,  'skill_delete'])->name('skill_delete')->middleware('authcheck');


});
