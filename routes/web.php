<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckinController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProfileController::class, 'index'])->name('home.index');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



// !staff start
Route::get('/staff', [StaffController::class, 'index'])->name('staff.index')->middleware(["role:staff|admin"]);
Route::put('/staff/{reservation}', [StaffController::class, 'updateTable'])->name('edit.table');
Route::delete('/staff/delete/{reservation}', [StaffController::class, 'destroy'])->name('delete.reservation');
// !staff end


// ^^ menu start
Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
// ^^ menu end

Route::middleware('auth')->group(function () {
    // && admin start
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware("role:admin");
    Route::post('admin/create/table', [AdminController::class, 'storeTable'])->name('table.create');
    Route::post('/menu/create', [AdminController::class, 'storeMenu'])->name('menu.create');
    Route::put('/menu/edit/{menu}', [AdminController::class, 'editMenu'])->name('menu.edit');
    Route::delete('/menu/delete/{menu}', [AdminController::class, 'destroy'])->name('menu.delete');

    Route::delete('/table/delete/{table}', [AdminController::class, 'destroyTable'])->name('table.delete');

    // promote / demote users to staff
    Route::post('/promote/{id}', [AdminController::class, 'promote'])->name('profil.promote');
    Route::post('/demote/{id}', [AdminController::class, 'demote'])->name('profil.demote');
    // && admin end

    // ? reservation start
    Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');
    Route::post('/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');
    Route::get("/calendar/show", [ReservationController::class, "show"]);
    // ? reservation end

    // * order / cart start
    Route::get('/cart', [CartController::class, "index"])->name('cart.index');
    Route::post('/cart/add/{menu}', [CartController::class, 'addToCart'])->name('cart.add');

    Route::post('/cart/update/add/{cartId}', [CartController::class, 'updateCartadd'])->name('cart.update.add');
    Route::post('/cart/update/minus/{cartId}', [CartController::class, 'updateCartminus'])->name('cart.update.minus');
    Route::post('/cart/delete/', [CartController::class, 'destroy'])->name('cart.delete');
    // Route::post('/', [CartController::class, 'test'])->name('cart.delete');
    // * order / cart end


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// ~~ stripe route start
Route::get('/session', [StripeController::class, 'session'])->name('stripe.session');
Route::get('/success', [StripeController::class, 'success'])->name('success');
// ~~ stripe route ends 

Route::get('/contact', function () {
    return view('Contact.contact');
})->name('contact.index');

Route::get('/about', function () {
    return view('About.about');
})->name('about.index');

require __DIR__ . '/auth.php';
