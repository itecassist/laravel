<?php

use App\Http\Livewire\UserManagement\Permissions;
use App\Http\Livewire\UserManagement\Roles;
use App\Http\Livewire\UserManagement\Users;
use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::prefix('admin')->middleware(['auth','web'])->group(function(){
    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'selectCompany'])->name('home');
    Route::post('/home', [\App\Http\Controllers\HomeController::class, 'setCompany'])->name('home.select');
});
Route::middleware(['web','auth', 'company'])->group(function(){
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::prefix('user-management')->as('user-management.')->group(function(){
        Route::get('users', Users::class)->name('users');
        Route::get('permissions', Permissions::class)->name('permissions');
        Route::get('roles', Roles::class)->name('roles');
    });
});

