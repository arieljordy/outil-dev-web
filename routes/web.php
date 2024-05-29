<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin-welcome', function () {
    return view('admin.welcomeAdmin');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/admin/deposit', function () {
    return view('admin.deposit');
});

Route::get('/admin/deposit', [DocumentController::class, 'index'])->name('document.index');

// Route::get('/admin-welcome', function () {
//     return view('admin.welcomeAdmin');
// });
Route::get('/document', [DocumentController::class, 'index'])->name('document.index');
Route::post('/document', [DocumentController::class, 'save'])->name('document.save');
Route::get('document/edit/{id}', [DocumentController::class, 'edit'])->name('document.edit');
Route::put('document/update/{id}', [DocumentController::class, 'update'])->name('document.update');
Route::delete('document/delete/{id}', [DocumentController::class, 'delete'])->name('document.delete');
