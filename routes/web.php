<?php

use App\Http\Controllers\LogoUploadController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Index');
})->name('editor');


Route::apiResource('/templates', TemplateController::class);

Route::post('/logo-upload', LogoUploadController::class);
