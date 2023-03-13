<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('table-fields/{tbl}', [\App\Http\Controllers\CrudController::class, 'tableFields']);
Route::post( 'save-table', [\App\Http\Controllers\CrudController::class, 'saveTable']);
