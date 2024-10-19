<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CashierController;
use App\Http\Controllers\Admin\DoctorController;
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

    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/admin/users/admins', [AdminController::class, 'index'])->name('admins');
    Route::get('/admin/users/admins/delete/{id}', [AdminController::class, 'destroy'])->name('admin.delete');
    Route::get('/admin/users/admins/edit/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::post('/admin/users/admins', [AdminController::class, 'store'])->name('admin.store');

    Route::get('/admin/doctors', [DoctorController::class, 'index'])->name('doctors');
    Route::get('/admin/doctors/delete/{id}', [DoctorController::class, 'destroy'])->name('doctor.delete');
    Route::get('/admin/doctors/edit/{id}', [DoctorController::class, 'update'])->name('doctor.update');
    Route::post('/admin/doctors', [DoctorController::class,'store'])->name('doctor.store');

    Route::get('/admin/cashiers', [CashierController::class, 'index'])->name('cashiers');
    Route::get('/admin/cashiers/delete/{id}', [CashierController::class, 'destroy'])->name('cashier.delete');
    Route::get('/admin/cashiers/edit/{id}', [CashierController::class, 'update'])->name('cashier.update');
    Route::post('/admin/cashiers', [CashierController::class,'store'])->name('cashier.store');
    

});

require __DIR__.'/auth.php';
