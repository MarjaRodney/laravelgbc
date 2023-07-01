<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StundentController;
use App\Http\Controllers\retrieveStudent;
use App\Models\Students;

// Route::get('/', [RegisterController::class, 'create']);
Route::get('/', [RegisterController::class, 'create']);
Route::get('/students', [RegisterController::class, 'create']); // Add this line to allow GET method
Route::post('/students', [RegisterController::class, 'store']);

Route::get('/', [LoginController::class, 'index']); // Change this line to use GET method
Route::get('/teacher', [LoginController::class, 'index']); // Change this line to use GET method
Route::post('/teacher', [LoginController::class, 'check'])->name('teacher.login');
// Add this line to allow GET method
Route::post('/timeInstudents', [StundentController::class, 'store']);
Route::get('/show/{firstname}', [StundentController::class, 'show'])->name('show');
Route::match(['get', 'put', 'post'], '/timeOutstudents', [StundentController::class, 'update'])->name('update');
// -------------------TABLE ALL STUDENTS---------------->
Route::get('/index', [StundentController::class, 'index'])->name('index');
Route::post('/create', [StundentController::class, 'addstudents'])->name('addstudents');
Route::post('/edit', [StundentController::class, 'edit'])->name('edit');
Route::post('/update', [StundentController::class, 'updateinfo'])->name('update');
Route::post('/delete', [StundentController::class, 'destroy'])->name('delete');
Route::get('/deletedaccounts', [retrieveStudent::class, 'index'])->name('deletedaccounts');
Route::post('/retrieve', [retrieveStudent::class, 'destroy'])->name('retrieve');
Route::post('/display', [retrieveStudent::class, 'edit'])->name('display');
Route::post('/permanent', [retrieveStudent::class, 'permanent'])->name('permanent');

Route::get('/account', [LoginController::class, 'account'])->name('account');
Route::post('/display', [LoginController::class, 'edit'])->name('display');
Route::post('/deletedaccount', [LoginController::class, 'permanent'])->name('deletedaccount');