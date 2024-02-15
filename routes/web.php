<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MedicamentController;
use App\Http\Controllers\SpecialiteController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RatingController;
use App\Models\Comment;
use App\Models\Specialite;
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
    return view('auth.login');
});

Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('delete.user');
Route::delete('/medicament/{id}', [MedicamentController::class, 'destroy'])->name('delete.medicament');
Route::delete('/specialite/{id}', [SpecialiteController::class, 'destroy'])->name('delete.specialite');
Route::get('/medicaments/{medicament}/edit', [MedicamentController::class, 'edit'])->name('edit.medicament');
Route::post('/medicaments/create', [MedicamentController::class, 'store'])->name('create.medicament');
Route::post('/specialites/create', [SpecialiteController::class, 'store'])->name('create.specialite');
Route::patch('/medicament/{id}', [MedicamentController::class, 'update'])->name('medicament.update');
Route::patch('/specialite/{id}', [SpecialiteController::class, 'update'])->name('specialite.update');
Route::get('/specialites/{id}/medecins', [SpecialiteController::class, 'showMedecins'])->name('specialites.medecins');
Route::get('/medecin/{id}', [MedecinController::class, 'showProfile'])->name('medecins.profile');
Route::post('/medecin/comment', [CommentController::class, 'storeComment'])->name('medecin.comment');
Route::post('/rating/store', [RatingController::class, 'storeRating'])->name('rating.store');









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
