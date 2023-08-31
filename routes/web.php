<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FixerController;
use App\Http\Controllers\ClientController;
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

Route::prefix('admin')->middleware(['auth', 'admin.auth'])->group(function () {
    Route::get('dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.index');
    Route::get('hardware', [AdminDashboardController::class, 'hardware'])->name('admin.hardware');
    Route::get('software', [AdminDashboardController::class, 'software'])->name('admin.software');
    Route::get('pcbuild', [AdminDashboardController::class, 'pcbuild'])->name('admin.pcbuild');
    Route::get('fixer', [FixerController::class, 'index'])->name('admin.fixer.index');
    Route::get('fixer/create', [FixerController::class, 'create'])->name('admin.fixer.create');
    Route::get('fixer/edit/{fixer:id}', [FixerController::class, 'edit'])->name('admin.fixer.edit');
    Route::post('fixer/create/store', [FixerController::class, 'store'])->name('admin.fixer.store');
    Route::put('fixer/edit/{fixer:id}/update', [FixerController::class, 'update'])->name('admin.fixer.update');
    Route::delete('fixer/{fixer:id}/delete', [FixerController::class, 'destroy'])->name('admin.fixer.destroy');

    
    Route::get('client', [ClientController::class, 'index'])->name('admin.client.index');
    Route::get('client/create', [ClientController::class, 'create'])->name('admin.client.create');
    Route::get('client/edit/{client:id}', [ClientController::class, 'edit'])->name('admin.client.edit');
    Route::post('client/create/store', [ClientController::class, 'store'])->name('admin.client.store');
    Route::put('client/edit/{client:id}/update', [ClientController::class, 'update'])->name('admin.client.update');
    Route::delete('client/{client:id}/delete', [ClientController::class, 'destroy'])->name('admin.client.destroy');
    // Route::match(['patch', 'put'],'fixer/edit/{id}/update', [FixerController::class, 'update'])->name('admin.fixer.update');

    
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Route::resource('user', AdminDashboardController::class); 