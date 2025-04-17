<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoilAnalysisController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [ProjectController::class, 'index'])->middleware(['auth']);
Route::get('/dashboard', [ProjectController::class, 'index'])->middleware(['auth'])->name('dashboard');


Route::get('/', [ProjectController::class, 'index']);

use App\Http\Controllers\AnalyseController;

Route::get('/analyses', [AnalyseController::class, 'index'])->name('analyses.index');



Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Groep routes die alleen toegankelijk zijn voor geauthenticeerde gebruikers
Route::middleware(['auth'])->group(function () {
    // Resource route voor projects (maakt alle benodigde routes automatisch aan)
    Route::resource('projects', ProjectController::class);

    // Routes voor profielbeheer
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Resource route voor soil analyses (als je die hebt)
    Route::resource('soil-analyses', SoilAnalysisController::class);
});

require __DIR__.'/auth.php';
