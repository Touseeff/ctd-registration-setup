<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('dashboard', function () {
//     return view('dashboard');
// });


Route::get('/', [AuthController::class, 'create'])->name('login');
Route::post('/login', [AuthController::class, 'auth'])->name('user.login');
Route::get('/forgot', [AuthController::class,'forgot'])->name('forgot.create');
Route::post('password/forgot', [AuthController::class,'forgotMatch'])->name('forgot.match');
Route::get('password/reset', [AuthController::class,'passwordReset'])->name('reset.create');
Route::post('reset/password/store', [AuthController::class,'resetPasswordStore'])->name('reset.store');


Route::prefix('user/')->group(function () {
    Route::get('create', [UserController::class, 'create'])->name('user.create');
    Route::post('store', [UserController::class, 'store'])->name('user.store');
    Route::get('logout/{id}', [UserController::class, 'logout'])->name('user.logout');
}); 






Route::middleware('isUser')->group(function () {
    Route::get('user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    // Route::get('user/forgot', [UserController::class, 'forgot'])->name('forgot.create');
});
