<?php
use Illuminate\Support\Facades\Route;use App\Http\Controllers\{DashboardController,ProductController,MovementController,ExportController};
Route::get('/',DashboardController::class)->name('dashboard');Route::resource('products',ProductController::class)->only(['index','create','store']);Route::get('/movements/create',[MovementController::class,'create'])->name('movements.create');Route::post('/movements',[MovementController::class,'store'])->name('movements.store');Route::get('/exports/products',[ExportController::class,'products'])->name('exports.products');
