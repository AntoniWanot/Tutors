<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Tutors\TutorsController;

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

Route::middleware(['auth'])->group(function () {
    route::group(['prefix' => '/tutors/', 'as' => 'tutors.'], function () {

        Route::get('list', [App\Http\Controllers\Tutors\TutorsController::class, 'list'])->name('list');
        Route::get('show/{id}', [App\Http\Controllers\Tutors\TutorController::class, 'show'])->name('show');

        Route::post('destroy/{id}', [App\Http\Controllers\Tutors\TutorController::class, 'destroy'])->name('destroy');

        Route::get('create', [App\Http\Controllers\Tutors\TutorController::class, 'getCreateView'])->name('getCreateView');
        Route::post('create', [App\Http\Controllers\Tutors\TutorController::class, 'create'])->name('create');

        Route::get('update/{id}', [App\Http\Controllers\Tutors\TutorController::class, 'getUpdateView'])->name('getUpdateView');
        Route::post('update/{id}', [App\Http\Controllers\Tutors\TutorController::class, 'update'])->name('update');
    });
    Route::get('/{any}', [App\Http\Controllers\HomeController::class, 'HomePage'])->where('any', '.*');;
});
