<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GvtController;
use App\Http\Controllers\TaxController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\paymentsController;

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


// for applcant
Route::get('/applicant/login', [ApplicantController::class, 'login']);
Route::get('/applicant/leseni', [ApplicantController::class, 'leseni']);
Route::get('/applicant/register', [ApplicantController::class, 'register']);
Route::get('/applicant/home', [ApplicantController::class, 'index'])->name('applicant')->middleware('applicant');
Route::get('/applicant/apply', [ApplicantController::class, 'showapply'])->middleware('applicant');
Route::get('/applicant/myapp/{application}', [ApplicantController::class, 'appshow'])->middleware('applicant');
Route::any('/applicant/edit/{application}', [ApplicationsController::class, 'update'])->middleware('applicant');
Route::any('/applicant/paycode/edit/{payments}', [paymentsController::class, 'update'])->middleware('applicant');
Route::any('/applicant/delete/{application}', [ApplicationsController::class, 'destroyapp'])->middleware('applicant');
Route::get('/applicant/myapps', [ApplicationsController::class, 'index'])->middleware('applicant');
Route::get('/applicant/goodapps', [ApplicationsController::class, 'goodindex'])->middleware('applicant');
Route::get('/applicant/rejected', [ApplicationsController::class, 'index_reject'])->middleware('applicant');
Route::get('/applicant/pending', [ApplicationsController::class, 'index_pending'])->middleware('applicant');
Route::get('/applicant/license', [ApplicationsController::class, 'index_license'])->middleware('applicant');


//  for tax officer
Route::get('/tax/login', [TaxController::class, 'login']);
Route::get('/tax/register', [TaxController::class, 'register']);
Route::get('/tax/home', [TaxController::class, 'index'])->name('tax')->middleware('tax');
Route::get('/tax/applicant/{application}', [TaxController::class, 'appshow'])->middleware('tax');
Route::get('/tax/applications/pending', [TaxController::class, 'pendshow'])->middleware('tax');
Route::get('/tax/applications/rejected', [TaxController::class, 'rejectshow'])->middleware('tax');

//  for government official
Route::get('/gvt/login', [GvtController::class, 'login']);
Route::get('/gvt/register', [GvtController::class, 'register']);
Route::get('/gvt/home', [GvtController::class, 'index'])->name('gvt')->middleware('gvt');
Route::get('/gvt/applicant/{application}', [GvtController::class, 'appshow'])->middleware('gvt');
Route::any('/gvt/applicant/approve/{application}', [ApplicationsController::class, 'statusgvt'])->middleware('gvt');
Route::any('/gvt/comments', [CommentsController::class, 'storegvt'])->middleware('gvt');
Route::any('/gvt/paycode', [GvtController::class, 'payers'])->middleware('gvt');
Route::any('/gvt/paycode/send', [paymentsController::class, 'sendpay'])->middleware('gvt');
Route::any('/gvt/payment/cancel/{payments}', [paymentsController::class, 'destroy1'])->middleware('gvt');
Route::any('/gvt/payment/deny/{payments}', [paymentsController::class, 'statinvalid'])->middleware('gvt');
Route::any('/gvt/payment/approve/{payments}', [paymentsController::class, 'statapprove'])->middleware('gvt');
Route::any('/gvt/applicant/license/{license}', [LicenseController::class, 'store'])->middleware('gvt');

 //  for admin
 Route::get('/root/login', [AdminController::class, 'login']);
 Route::get('/root/home', [AdminController::class, 'index'])->name('admin')->middleware('admin');
 Route::get('/root/users', [AdminController::class, 'usermanage'])->name('usermanage')->middleware('admin');

 // Delete Listing
Route::delete('/root/{listing}', [ListingController::class, 'destroy1'])->middleware('admin');

// Update user status
Route::any('/root/stat/{listing}', [ListingController::class, 'stat'])->middleware('admin');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Applications

// Store Listing Data
Route::post('/applicant/submit', [ApplicationsController::class, 'store'])->middleware('applicant');
Route::any('/tax/comments', [CommentsController::class, 'store'])->middleware('tax');


// Update application tax clearance status
Route::any('/tax/applicant/approve/{application}', [ApplicationsController::class, 'status'])->middleware('tax');

// Route::get('/generate-pdf', [PDFController::class, 'generatePDF']);
Route::get('/generate-pdf', 'App\Http\Controllers\PDFController@generatePDF');
// Route::get('/generate-pdf', 'App\Http\Controllers\ApplicantController@generatePDF');