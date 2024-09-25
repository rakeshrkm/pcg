<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'service'])->name('services');
Route::get('/industries-we-serve', [HomeController::class, 'industriesWeServe'])->name('industriesWeServe');
Route::get('/our-approach', [HomeController::class, 'ourApproach'])->name('ourApproach');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contactUs');
Route::get('/career', [HomeController::class, 'career'])->name('career');
Route::get('/recruitment-services', [HomeController::class, 'recruitmentServices'])->name('recruitmentServices');
Route::get('/training-development', [HomeController::class, 'trainingAndDevelopment'])->name('trainingAndDevelopment');
Route::get('/consulting-services', [HomeController::class, 'consultingServices'])->name('consultingServices');
Route::get('/other-services', [HomeController::class, 'otherServices'])->name('otherServices');

