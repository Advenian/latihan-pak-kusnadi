<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FixerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AppointmentsController;

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
Route::get('/aabc', function () {
    return view('admin.appointment-details');
});

Route::get('/user/profile', function () {
    return view('user.profile');
})->middleware(['auth', 'verified'])->name('profile');



Route::post('software/store', [AppointmentsController::class, 'software_store'])->name('user.software.store');
Route::prefix('administrator')->middleware(['auth', 'admin.auth'])->group(function () {
    Route::get('/', [AdminDashboardController::class, 'dashboard'])->name('admin.index');
    Route::get('user-page', [AdminDashboardController::class, 'user'])->name('admin.user-page');



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

    Route::post('software/{id}/pdf', [AppointmentsController::class, 'pdf_report'])->name('pdf.report');
    Route::get('software', [AppointmentsController::class, 'software_index'])->name('admin.software.index');
    Route::patch('software/assign/{id}', [AppointmentsController::class, 'software_assignFixer'])->name('admin.software.assign');
    Route::get('software/{softwareAppointment}/detail', [AppointmentsController::class, 'software_detail'])->name('admin.software.detail');
    Route::delete('software/{softwareAppointment}/destroy', [AppointmentsController::class, 'software_destroy'])->name('admin.software.destroy');


    Route::get('hardware', [AppointmentsController::class, 'hardware_index'])->name('admin.hardware.index');


    Route::get('diagnostic', [AppointmentsController::class, 'diagnostic_index'])->name('admin.diagnostic.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


// Route::resource('user', AdminDashboardController::class); 