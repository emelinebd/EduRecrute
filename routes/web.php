<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Establishment;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TeacherController;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/welcome', function () {
        return Inertia::render('welcome');
    })->name('welcome');
});


Route::get('/establishments', function () {
    return Establishment::all();
})->name('establishments.index');

Route::get('/search', [SearchController::class, 'search'])->name('search.results');

Route::get('/teachers', [TeacherController::class, 'index']);

Route::get('/teachers/{id}', [TeacherController::class, 'show'])->name('teachers.show');


