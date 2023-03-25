<?php

use App\Http\Controllers\OwnerController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth', 'check.role:admin'])->group(function () {
    Route::post('/owners/save',[OwnerController::class, 'save'])->name('owners.save');
    Route::get('/owners/{id}/edit',[OwnerController::class, 'edit'])->name('owners.edit');
    Route::post('/owners/{id}/update',[OwnerController::class,'update'])->name('owners.update');
    Route::get('/owners/{id}/delete',[OwnerController::class,'delete'])->name('owners.delete');
    Route::get('/owners/create',[OwnerController::class, 'create'])->name('owners.create');

    Route::post('/cars/save',[CarController::class, 'save'])->name('cars.save');
    Route::get('/cars/{id}/edit',[CarController::class, 'edit'])->name('cars.edit');
    Route::post('/cars/{id}/update',[CarController::class,'update'])->name('cars.update');
    Route::get('/cars/{id}/delete',[CarController::class,'delete'])->name('cars.delete');
    Route::get('/cars/create',[CarController::class, 'create'])->name('cars.create');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/owners',[OwnerController::class, 'index'])->name('owners.index');
    Route::post('/owners/search',[OwnerController::class,'search'])->name('owners.search');

    Route::get('/cars',[CarController::class, 'index'])->name('cars.index');
    Route::post('/cars/search',[CarController::class,'search'])->name('cars.search');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
