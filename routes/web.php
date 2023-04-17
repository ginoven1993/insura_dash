<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\PartnerController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('home'); 
})->middleware(['auth', 'role:admin'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth', 'role:admin')->group(function () {
    Route::controller(DashboardController::class)->group(function() {

    });

});



Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::post('/store/clients', [ClientController::class, 'store'])->name('clients.store');


Route::get('/forms', [FormsController::class, 'index'])->name('clients.forms.create');
Route::post('/store/forms', [FormsController::class, 'store'])->name('clients.forms.store');

Route::get('/insurances', [InsuranceController::class, 'index'])->name('insurance.create');
Route::post('/store/insurances', [InsuranceController::class, 'store'])->name('insurance.store');

Route::get('/partners', [PartnerController::class, 'index'])->name('partners.create');
Route::post('/store/partners', [PartnerController::class, 'store'])->name('partners.store');





