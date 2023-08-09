<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminDashboardController;

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

Route::get('/', function () {
    return view('user.home');
})->name('user.home');

Route::get('/user/profile', function () {
    return view('user.profile');
})->middleware(['auth', 'verified'])->name('profile');

Route::prefix('admin')->group(function () {
    
    Route::get('dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.index');
    Route::get('hardware', [AdminDashboardController::class, 'hardware'])->name('admin.hardware');
    Route::get('software', [AdminDashboardController::class, 'software'])->name('admin.software');
    Route::get('pcbuild', [AdminDashboardController::class, 'pcbuild'])->name('admin.pcbuild');
    
})->middleware(['auth', 'admin.auth']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
