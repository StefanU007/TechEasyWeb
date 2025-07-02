<?php

use App\Http\Controllers\LogoUploadController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Index');
})->name('editor');

Route::get('/templates/{template}', [TemplateController::class, 'show'])->name('templates.show');
Route::post('/templates', [TemplateController::class, 'store'])->name('templates.store');

Route::post('/logo-upload', LogoUploadController::class);
Route::post('/orders', [OrderController::class, 'store']);
