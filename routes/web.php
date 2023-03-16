<?php

//use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\SaveDBController;
use App\Http\Controllers\ExtractFromDBController;

Route::get('/', [PageController::class, 'index']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/help', [PageController::class, 'help']);
Route::get('/create_form', [PageController::class, 'create_form']);

Route::get('/about', [PageController::class, 'about']);
Route::get('/success', [PageController::class, 'success']);
Route::get('/authorization_error', [PageController::class, 'authorization_error']);



Route::post('/request', [RequestController::class, 'request']);
Route::post('/custom_request', [RequestController::class, 'custom_request']);

Route::get('/orders', [ExtractFromDBController::class, 'orders']);
Route::get('/extract_clients', [ExtractFromDBController::class, 'extract_clients']);
//Route::get('/extract_products', [ExtractFromDBController::class, 'extract_products']);
Route::get('/extract_products_expensive_or_cheap', [ExtractFromDBController::class, 'extract_products_expensive_or_cheap']);

Route::get('/savedb_clients', [SaveDBController::class, 'savedb_clients']);
Route::get('/savedb_products', [SaveDBController::class, 'savedb_products']);

