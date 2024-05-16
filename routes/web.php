<?php

use App\Http\Controllers\Layout\LayoutController;
use App\Http\Controllers\Menu\DatasetController;
use App\Http\Controllers\Menu\MakeModelController;
use App\Http\Controllers\Menu\PredictController;
use Illuminate\Support\Facades\Route;

Route::get('/index', function () { return view('layout.index'); });
Route::get('/', [LayoutController::class, 'index'])->name('home');
Route::get('/dataset', [DatasetController::class, 'index'])->name('dataset');
Route::post('/dataset/upload', [DatasetController::class, 'upload'])->name('dataset.upload');
Route::post('/dataset', [DatasetController::class, 'store'])->name('dataset.store');


Route::get('/make-model', [MakeModelController::class, 'index'])->name('make_model');
Route::post('/make-model/train-and-test', [MakeModelController::class, 'trainAndTest'])->name('make_model.train_and_test');
Route::get('/makeshow-model', [MakeModelController::class, 'showModel'])->name('show_model');
Route::get('/prediction', [PredictController::class, 'index'])->name('prediction');
Route::post('/prediction/predict', [PredictController::class, 'predict'])->name('prediction.predict');
