<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FactoryController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\WorkerController;


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
})->name('welcome');
//factory
Route::get('factories' , [FactoryController::class , 'index'])->name('factories.index');
Route::get('factories/create' , [FactoryController::class , 'create'])->name('factories.create');
Route::post('factories/store' , [FactoryController::class , 'store'])->name('factories.store');
Route::get('factories/{id}/edit', [FactoryController::class, 'edit'])->name('factories.edit');
Route::post('factories/{id}/update', [FactoryController::class, 'update'])->name('factories.update');
Route::get('factories/{id}/delete', [FactoryController::class, 'delete'])->name('factories.delete');
//country
Route::get('countries' , [CountryController::class , 'index'])->name('countries.index');
Route::get('countries/create' , [CountryController::class , 'create'])->name('countries.create');
Route::post('countries/store' , [CountryController::class , 'store'])->name('countries.store');
Route::get('countries/{id}/edit', [CountryController::class, 'edit'])->name('countries.edit');
Route::post('countries/{id}/update', [CountryController::class, 'update'])->name('countries.update');
Route::get('countries/{id}/delete', [CountryController::class, 'delete'])->name('countries.delete');
//worker
Route::get('workers' , [WorkerController::class , 'index'])->name('workers.index');
Route::get('workers/create' , [WorkerController::class , 'create'])->name('workers.create');
Route::post('workers/store' , [WorkerController::class , 'store'])->name('workers.store');
