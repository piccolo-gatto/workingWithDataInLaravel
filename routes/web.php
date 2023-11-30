<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RecordController;
use App\Http\Controllers\ServiceController;
use App\Http\Resources;
use App\Models;

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

// Записи
Route::get('/records', [RecordController::class, 'index']);
Route::get('/records/sort', [RecordController::class, 'sort']);
Route::get('/record/add', [RecordController::class, 'add']);
Route::get('/record/{record}', [RecordController::class, 'view']);
Route::delete('/record/{record}/delete', [RecordController::class, 'drop'])->name('records.delete');
Route::get('/record/{record}/edit', [RecordController::class, 'edit']);
Route::post('/record/{record}/edit', [RecordController::class, 'store']);
Route::post('/record/add', [RecordController::class, 'store']);

// Услуги
Route::get('/services', [ServiceController::class, 'index']);
Route::get('/service/add', [ServiceController::class, 'add']);
Route::get('/service/{service}', [ServiceController::class, 'view']);
Route::delete('/service/{service}/delete', [ServiceController::class, 'drop'])->name('services.delete');
Route::get('/service/{service}/edit', [ServiceController::class, 'edit']);
Route::post('/service/{service}/edit', [ServiceController::class, 'store']);
Route::post('/service/add', [ServiceController::class, 'store']);

//API
Route::get('/api/services', function() { return Resources\ServiceResource::collection(Models\Service::all()); });
Route::get('/api/records', function() { return Resources\RecordResource::collection(Models\Record::all()->load("service")); });
