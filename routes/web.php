<?php

use App\Http\Livewire\StockControl\StockCategories;
use App\Http\Livewire\StockControl\StockItems;
use App\Http\Livewire\StockControl\StockUnits;
use App\Http\Livewire\UserManagement\Permissions;
use App\Http\Livewire\UserManagement\Roles;
use App\Http\Livewire\UserManagement\Users;
use App\Http\Livewire\UserSettings;
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
    Route::view('home', 'home');
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('user-settings', UserSettings::class)->name('user-settings');
    Route::prefix('user-management')->as('user-management.')->group(function(){
        Route::get('users', Users::class)->name('users');
        Route::get('permissions', Permissions::class)->name('permissions');
        Route::get('roles', Roles::class)->name('roles');
    });
    Route::prefix('settings')->as('settings.')->group(function (){
        Route::get('counters', \App\Http\Livewire\Settings\Counters::class)->name('counters');
        Route::get('lookups', \App\Http\Livewire\Settings\Enums::class)->name('enums');
    });
    Route::prefix('stock-control')->as('stock-control.')->group(function(){
        Route::get('categories', StockCategories::class)->name('categories');
        Route::get('units', StockUnits::class)->name('units');
        Route::get('items', StockItems::class)->name('items');
        Route::get('items/form/{id?}', \App\Http\Livewire\StockControl\StockItemForm::class)->name('items.form');
    });
    Route::get('crud', [\App\Http\Controllers\CrudController::class, 'index'])->name('crud.index');
});

