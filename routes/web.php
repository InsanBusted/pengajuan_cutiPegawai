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
        Route::delete('/divisi/delete/{id}', [ADMIN\DivisiController::class, "destroy"])->name('divisi.delete');
        Route::put('/divisi/{id}', [ADMIN\DivisiController::class, "update"])->name('divisi.update');
        Route::get('/divisi/edit/{id}', [ADMIN\DivisiController::class, "edit"])->name('divisi.edit');
        // User
        Route::get('/users', [ADMIN\UsersController::class, 'index'])->name('users.index');
        Route::get('/users/create', [ADMIN\UsersController::class, "create"])->name('users.create');
        Route::post('/users/store', [ADMIN\UsersController::class, "store"])->name('users.store');
        Route::delete('/users/delete/{id}', [ADMIN\UsersController::class, "destroy"])->name('users.delete');
        Route::put('/users/{id}', [ADMIN\UsersController::class, "update"])->name('users.update');
        Route::get('/users/edit/{id}', [ADMIN\UsersController::class, "edit"])->name('users.edit');

        
    });

    // Pegawai
    Route::prefix('/pegawai')->group(function() {

        // Pegawai  
        Route::get('/create', [ADMIN\PegawaiController::class, "create"])->name('pegawai.create');
        Route::post('/store', [ADMIN\PegawaiController::class, "store"])->name('pegawai.store');
        Route::delete('/delete/{id}', [ADMIN\PegawaiController::class, "destroy"])->name('pegawai.delete');
        Route::put('/{id}', [ADMIN\PegawaiController::class, "update"])->name('pegawai.update');
        Route::get('/edit/{id}', [ADMIN\PegawaiController::class, "edit"])->name('pegawai.edit');

       

    // Pengajuan Cuti
        Route::get('/PengajuanCuti/create', [ADMIN\PengajuanCutiController::class, "create"])->name('pengajuanCuti.create');
        Route::post('/PengajuanCuti/store', [ADMIN\PengajuanCutiController::class, "store"])->name('pengajuanCuti.store');
        Route::delete('/PengajuanCuti/delete/{id}', [ADMIN\PengajuanCutiController::class, "destroy"])->name('pengajuanCuti.delete');
        Route::put('/PengajuanCuti/{id}', [ADMIN\PengajuanCutiController::class, "update"])->name('pengajuanCuti.update');
        Route::get('/PengajuanCuti/edit/{id}', [ADMIN\PengajuanCutiController::class, "edit"])->name('pengajuanCuti.edit');

    // Jatah Cuti
        Route::get('/JatahCuti/create', [ADMIN\JatahCutiController::class, "create"])->name('jatahCuti.create');
        Route::post('/JatahCuti/store', [ADMIN\JatahCutiController::class, "store"])->name('jatahCuti.store');
        Route::delete('/JatahCuti/delete/{id}', [ADMIN\JatahCutiController::class, "destroy"])->name('jatahCuti.delete');
        Route::put('/JatahCuti/{id}', [ADMIN\JatahCutiController::class, "update"])->name('jatahCuti.update');
        Route::get('/JatahCuti/edit/{id}', [ADMIN\JatahCutiController::class, "edit"])->name('jatahCuti.edit');

    });
    
});    

Route::middleware(['auth', 'verified', 'role:pegawai|admin'])->group(function() {
    Route::get('/pegawai', [ADMIN\PegawaiController::class, 'index'])->name('pegawai');
    Route::get('/pegawai/PengajuanCuti', [ADMIN\PengajuanCutiController::class, 'index'])->name('pengajuanCuti.index');
    Route::get('/pegawai/JatahCuti', [ADMIN\JatahCutiController::class, 'index'])->name('jatahCuti.index');

});


require __DIR__.'/auth.php';
