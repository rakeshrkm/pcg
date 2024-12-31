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
Route::get('/recruitment-approach', [HomeController::class, 'ourApproach'])->name('ourApproach');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contactUs');
Route::post('/contact-us', [HomeController::class, 'SubmitContact'])->name('ContactSubmit');
Route::post('/enquiry', [HomeController::class, 'enquiry'])->name('enquiry');

Route::get('/blog', [HomeController::class, 'blog'])->name('blogs');
Route::get('/blog/hr-challenges-scaling-management-consulting-india', [HomeController::class, 'hrChallenges'])->name('hrChallenges');
Route::get('/blog/permanent-staffing-companies-building-stable-workforce', [HomeController::class, 'permanentStaffingCompaniesBlog'])->name('permanentStaffingCompaniesBlog');




Route::get('/career', [HomeController::class, 'career'])->name('career');
// services
Route::get('/permanent-staffing', [HomeController::class, 'permanentStaffing'])->name('permanentStaffing');
Route::get('/executive-search', [HomeController::class, 'executiveSearch'])->name('executiveSearch');
Route::get('/leadership-hiring', [HomeController::class, 'leadershipHiring'])->name('leadershipHiring');
Route::get('/head-hunting', [HomeController::class, 'headHunting'])->name('headHunting');
Route::get('/it-non-it-hiring', [HomeController::class, 'ItNonIthiring'])->name('ItNonIthiring');
Route::get('/temporary-staffing', [HomeController::class, 'temporaryStaffing'])->name('temporaryStaffing');
Route::get('/contract-staffing', [HomeController::class, 'contractStaffing'])->name('contractStaffing');
Route::get('/contract-to-hire', [HomeController::class, 'contractToHire'])->name('contractToHire');
Route::get('/payroll-processing', [HomeController::class, 'payrollProcessing'])->name('payrollProcessing');
Route::get('/universities', [HomeController::class, 'universities'])->name('universities');

Route::get('/training-development', [HomeController::class, 'trainingAndDevelopment'])->name('trainingAndDevelopment');
Route::get('/consulting-services', [HomeController::class, 'consultingServices'])->name('consultingServices');
Route::get('/other-services', [HomeController::class, 'otherServices'])->name('otherServices');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/terms-and-condition', [HomeController::class, 'termsAndCondition'])->name('termsAndCondition');
Route::get('/appointment-csv', [HomeController::class, 'downloadAppointment'])->name('downloadAppointment');


// If route not found.
Route::fallback(function () {
    return view('notfound');
});



