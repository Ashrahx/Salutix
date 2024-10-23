<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\TurnController;


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminCashierController;
use App\Http\Controllers\Admin\AdminDoctorController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin/users/admins', [AdminController::class, 'index'])->name('admins');
    Route::get('/admin/users/admins/delete/{id}', [AdminController::class, 'destroy'])->name('admin.delete');
    Route::get('/admin/users/admins/edit/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::post('/admin/users/admins', [AdminController::class, 'store'])->name('admin.store');

    Route::get('/admin/doctors', [AdminDoctorController::class, 'index'])->name('doctors');
    Route::get('/admin/doctors/delete/{id}', [AdminDoctorController::class, 'destroy'])->name('doctor.delete');
    Route::get('/admin/doctors/edit/{id}', [AdminDoctorController::class, 'update'])->name('doctor.update');
    Route::post('/admin/doctors', [AdminDoctorController::class,'store'])->name('doctor.store');

    Route::get('/admin/cashiers', [AdminCashierController::class, 'index'])->name('cashiers');
    Route::get('/admin/cashiers/delete/{id}', [AdminCashierController::class, 'destroy'])->name('cashier.delete');
    Route::get('/admin/cashiers/edit/{id}', [AdminCashierController::class, 'update'])->name('cashier.update');
    Route::post('/admin/cashiers', [AdminCashierController::class,'store'])->name('cashier.store');
    

});

Route::middleware(['auth', 'cashier'])->group(function () {
    Route::get('/cashier', [CashierController::class, 'index'])->name('cashier');
    Route::post('/cashier', [CashierController::class, 'store'])->name('patients.store');
    Route::get('turns/assign/{patient}', [TurnController::class, 'assignTurn'])->name('turns.assign');
});

Route::get('lobby', [TurnController::class, 'index'])->name('lobby');

require __DIR__.'/auth.php';
