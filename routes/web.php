<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactMessageController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);
Route::get('/top-leadership', [PageController::class, 'topLeadership']);
Route::get('/regional-leadership', [PageController::class, 'regionalLeadership']);
Route::get('/compass-awards', [PageController::class, 'compassAwards']);
Route::get('/contact', [PageController::class, 'contact']);
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/global-leaders', [PageController::class, 'globalLeaders']);
Route::get('/partners', [PageController::class, 'partners']);
Route::get('/national-internship-program', [PageController::class, 'nationalInternshipProgram']);
Route::get('/youth-ambassador-program', [PageController::class, 'youthAmbassadorProgram']);

Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout']);

Route::middleware('auth')->group(function () {

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

    Route::get('/admin/news', [AdminController::class, 'news']);
    Route::get('/admin/news/create', [AdminController::class, 'createNews']);
    Route::post('/admin/news', [AdminController::class, 'storeNews']);
    Route::get('/admin/news/{news}/edit', [AdminController::class, 'editNews']);
    Route::put('/admin/news/{news}', [AdminController::class, 'updateNews']);
    Route::delete('/admin/news/{news}', [AdminController::class, 'deleteNews']);
    Route::put('/admin/news/{news}/featured', [AdminController::class, 'setFeaturedNews']);

    Route::get('/admin/about', [AdminController::class, 'editAbout']);
    Route::put('/admin/about', [AdminController::class, 'updateAbout']);

    Route::get('/admin/partners', [AdminController::class, 'editPartners']);
    Route::put('/admin/partners', [AdminController::class, 'updatePartners']);

    Route::get('/admin/account', [AccountController::class, 'edit']);
    Route::put('/admin/account/email', [AccountController::class, 'updateEmail']);
    Route::put('/admin/account/password', [AccountController::class, 'updatePassword']);

    Route::get('/admin/contact', [AdminController::class, 'editContact']);
    Route::put('/admin/contact', [AdminController::class, 'updateContact']);
    Route::get('/admin/contact/messages', [ContactMessageController::class, 'index']);
    Route::get('/admin/contact/messages/{message}', [ContactMessageController::class, 'show']);
    Route::patch('/admin/contact/messages/{message}/read', [ContactMessageController::class, 'toggleRead']);

});