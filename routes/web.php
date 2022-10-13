<?php

// use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Livewire\Admin\AdminIndex;
use App\Http\Livewire\Dashboard\DashboardLayout;
// use App\Http\Livewire\Deposit\DepositLayout;
use App\Http\Livewire\Student\StudentLayout;

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


// Route::resource('/', CategoryController::class);

// Route::get('/', function () {
//     return view('student.index');
// });
Route::get('/dashboard', DashboardLayout::class)->middleware('auth');

route::get('/', DashboardLayout::class)->middleware('auth');
route::get('/santri', StudentLayout::class)->middleware('auth');
// route::get('/home', DashboardLayout::class);
Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout'])->middleware('auth');
// route::get('deposit', DepositLayout::class)->name('deposit');
route::get('deposit/{student}', [DepositController::class, 'index'])->name('deposit.index');
route::get('admin', AdminIndex::class)->name('home')->middleware('auth', 'can:isAdmin');
