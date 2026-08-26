<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/board-staff', [PageController::class, 'boardStaff']);
Route::get('/compass-awards', [PageController::class, 'compassAwards']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/global-leaders', [PageController::class, 'globalLeaders']);
Route::get('/managing-directors', [PageController::class, 'managingDirectors']);
Route::get('/partners', [PageController::class, 'partners']);
Route::get('/admin', [AdminController::class, 'dashboard']);

Route::get('/admin/services', [AdminController::class, 'services']);
Route::get('/admin/services/create', [AdminController::class, 'createService']);
Route::post('/admin/services', [AdminController::class, 'storeService']);
Route::get('/admin/services/{service}/edit', [AdminController::class, 'editService']);
Route::put('/admin/services/{service}', [AdminController::class, 'updateService']);
Route::delete('/admin/services/{service}', [AdminController::class, 'deleteService']);

Route::get('/admin/banner', [AdminController::class, 'editBanner']);
Route::put('/admin/banner', [AdminController::class, 'updateBanner']);

Route::get('/admin/action', [AdminController::class, 'editAction']);
Route::put('/admin/action', [AdminController::class, 'updateAction']);

Route::get('/admin/resources', [AdminController::class, 'resources']);
Route::get('/admin/resources/create', [AdminController::class, 'createResource']);
Route::post('/admin/resources', [AdminController::class, 'storeResource']);
Route::get('/admin/resources/{resource}/edit', [AdminController::class, 'editResource']);
Route::put('/admin/resources/{resource}', [AdminController::class, 'updateResource']);
Route::delete('/admin/resources/{resource}', [AdminController::class, 'deleteResource']);