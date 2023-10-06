<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Models\Category;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

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
    return view('skudetto.index');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/member',[MemberController::class, 'show']);
Route::get('/member/{id}/divisi', [CategoryController::class, 'profile']);
Route::get('/member/tambah',[MemberController::class, 'tambah']);
Route::post('/member/simpan',[MemberController::class, 'simpan']);
Route::get('/member/{id}/ubah',[MemberController::class, 'ubah']);
Route::put('/member/{id}',[MemberController::class, 'update']);
Route::delete('/member/{id}',[MemberController::class, 'destroy']);

Route::get('/manager', function () {
    return view('member.manager');
});

