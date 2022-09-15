<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function (){
    return view('welcome');
});

Route::get('/login',function (){
    return view('auth.login');
});
Route::post('/fail/{process:uuid}',[\App\Http\Controllers\FrontController::class,'fail'])->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class)->name('fail');
Route::get('/pdf/{process:uuid}',[\App\Http\Controllers\FrontController::class,'pdf'])->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class)->name('pdf');
Route::any('/success/{process:uuid}',[\App\Http\Controllers\FrontController::class,'success'])->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class)->name('success');
Route::post('login',[\App\Http\Controllers\LoginController::class,'login'])->name('login');
Route::post('logout',[\App\Http\Controllers\LoginController::class,'logout'])->name('logout');
Route::get('/{user:uuid}',[\App\Http\Controllers\FrontController::class,'index'])->name('step1');
Route::post('/{user:uuid}/process',[\App\Http\Controllers\FrontController::class,'paymentDetail'])->name('step2');
Route::post('/{process:uuid}',[\App\Http\Controllers\FrontController::class,'payment'])->name('payment');
Route::post('/{process:uuid}/pay',[\App\Http\Controllers\FrontController::class,'pay'])->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class)->name('pay');
Route::any('pay/result',[\App\Http\Controllers\FrontController::class,'result'])->name('pay.result')->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function (){
    Route::get('/home',[\App\Http\Controllers\HomeController::class,'index'])->name('dashboard');
    Route::get('/profile',[\App\Http\Controllers\HomeController::class,'profile'])->name('profile');
    Route::post('/profile/{user}',[\App\Http\Controllers\HomeController::class,'updateProfile'])->name('update-profile');
    Route::resource('users',\App\Http\Controllers\UserController::class);
    Route::get('process/fails',[\App\Http\Controllers\ProcessController::class,'fail'])->name('process.fails');
    Route::get('process/pending',[\App\Http\Controllers\ProcessController::class,'pending'])->name('process.pending');
    Route::get('process/success',[\App\Http\Controllers\ProcessController::class,'success'])->name('process.success');
});

