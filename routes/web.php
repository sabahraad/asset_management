<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', [App\Http\Controllers\Admin\demoController::class, 'dashboard']);

Route::get('/add-outlet', [App\Http\Controllers\Admin\demoController::class, 'addOutlet'])->name('addOutlet');

Route::get('/kiosk-rebranding-list', [App\Http\Controllers\Admin\demoController::class, 'kioskRebrandinglist'])->name('kioskRebrandinglist');

Route::get('/maintenance-list', [App\Http\Controllers\Admin\demoController::class, 'maintenanceList'])->name('maintenanceList');

Route::get('/rebranding-list', [App\Http\Controllers\Admin\demoController::class, 'rebrandingList'])->name('rebrandingList');

Route::get('/outlet-list', [App\Http\Controllers\Admin\demoController::class, 'outletList'])->name('outletList');

Route::get('/dashboard', [App\Http\Controllers\Admin\demoController::class, 'dashboard'])->name('dashboard');

Route::get('/deployment-list', [App\Http\Controllers\Admin\demoController::class, 'deploymentList'])->name('deploymentList');
   
