<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MedicamentController;
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

Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('delete.user');
Route::delete('/medicament/{id}', [MedicamentController::class, 'destroy'])->name('delete.medicament');
Route::get('/medicaments/{medicament}/edit', [MedicamentController::class, 'edit'])->name('edit.medicament');
Route::post('/medicaments/create', [MedicamentController::class, 'store'])->name('create.medicament');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(["auth",'admin'])->group(function(){
    Route::get('/admin/index', [AdminController::class, 'showIndex'])->name('admin.index');
});
Route::middleware(["auth",'patient'])->group(function(){
    Route::get('/patient/index', [PatientController::class, 'showIndex'])->name('patient.index');
    Route::get('/patient/profile', [PatientController::class, 'showProfile'])->name('patient.profile');
});
Route::middleware(["auth",'medecin'])->group(function(){
    Route::get('/medecin/index', [MedecinController::class, 'showIndex'])->name('medecin.index');
    Route::get('/medecin/profile', [MedecinController::class, 'showProfile'])->name('medecin.profile');
});



require __DIR__.'/auth.php';
