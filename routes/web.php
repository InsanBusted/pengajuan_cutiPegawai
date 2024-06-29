<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin as ADMIN;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [ADMIN\DashboardController::class, "index"])->name('dashboard');
    
    Route::prefix('/dashboard')->group(function() {
        // Divisi
        Route::get('/divisi', [ADMIN\DivisiController::class, 'index'])->name('divisi.index');
        Route::get('/divisi/create', [ADMIN\DivisiController::class, "create"])->name('divisi.create');
        Route::post('/divisi/store', [ADMIN\DivisiController::class, "store"])->name('divisi.store');
        Route::delete('/divisi/delete/{id}', [ADMIN\DivisiController::class, "delete"])->name('divisi.delete');
        Route::get('/divisi/edit/{id}', [ADMIN\DivisiController::class, "edit"])->name('divisi.edit');

        
    });

    // Pegawai
    Route::prefix('/pegawai')->group(function() {
        Route::get(
            '/create',
            [ADMIN\PegawaiController::class, 'create']
        )->name('pegawai.create');
        Route::post('/update', [ADMIN\PegawaiController::class, 'store'])->name('pegawai.tambah');
        Route::get('/{id}/edit', [ADMIN\PegawaiController::class, 'edit'])->name('pegawai.edit');
        Route::put('/{id}', [ADMIN\PegawaiController::class, 'update'])->name('pegawai.update');
        Route::delete('/{id}', [ADMIN\PegawaiController::class, 'destroy'])->name('pegawai.delete');
    });
    
});    

Route::middleware(['auth', 'verified', 'role:pegawai|admin'])->group(function() {
    Route::get('/pegawai', [ADMIN\PegawaiController::class, 'index'])->name('pegawai');
});


require __DIR__.'/auth.php';
