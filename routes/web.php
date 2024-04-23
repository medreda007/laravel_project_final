<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckinController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProfileController::class, 'index'])->name('home.index');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware("role:admin");


Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');

Route::middleware('auth')->group(function () {

    // ? reservation start
    Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');
    Route::post('/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');
    Route::get("/calendar/show" , [ReservationController::class , "show"]);
    // ? reservation end

    // todo checkin start
    Route::get('/check-in/{menu}', [CheckinController::class, 'index'])->name('checkin.index');
    // todo checkin end

    Route::get('/test', [ProfileController::class, 'test'])->name('home.test');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// promote users to staff
Route::post('/promote/{id}', [AdminController::class, 'promote'])->name('profil.promote');



require __DIR__.'/auth.php';