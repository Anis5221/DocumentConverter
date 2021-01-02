<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PdftoDocController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\WebRegiController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);
Route::get('view-user{id}',[App\Http\Controllers\AdminController::class, 'view_user']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/watherapp', [App\Http\Controllers\HomeController::class, 'Wather']);
// Route::get('/sample', [App\Http\Controllers\HomeController::class, 'sampleview']);

// Route::get('/simple-regi', [WebRegiController::class, 'index']);
// Route::get('/simple-out', [WebRegiController::class, 'logout']);
// Route::post('/simple-register', [WebRegiController::class, 'store']);
// Route::get('/simple-login', [WebRegiController::class, 'indexlog']);
// Route::post('/simple-login-to-view', [WebRegiController::class, 'login']);

Route::get('/doctopdf', [DocumentController::class, 'index'])->name('doctopdf');
Route::get('/ppttopdf', [DocumentController::class, 'pptindex'])->name('ppttodoc');
Route::get('/imagetopdf', [DocumentController::class, 'imageindex'])->name('imagetodoc');
Route::get('/pdftodoc', [PdftoDocController::class, 'index'])->name('pdftodoc');
Route::get('/pdftotext', [PdftoDocController::class, 'index2'])->name('pdftodoc');
Route::get('/text-to-pdf', [DocumentController::class, 'index_text']);
Route::post('file-name{id}', [DocumentController::class, 'pdfConvert']);
Route::post('ppt-name{id}', [DocumentController::class, 'pptConvert']);
Route::post('image-name{id}', [DocumentController::class, 'imageConvert']);
Route::post('text-name{id}', [DocumentController::class, 'textConvert']);
Route::post('pdf-name{id}', [PdftoDocController::class, 'docConvert']);
Route::post('txt-name{id}', [PdftoDocController::class, 'textConvert']);
Route::post('video-name', [PdftoDocController::class, 'videoConvert'])->name('video-name');
