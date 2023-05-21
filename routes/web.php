<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GvtController;
use App\Http\Controllers\TaxController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\ApplicationsController;

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
Route::get('/applicant/register', [ApplicantController::class, 'register']);
Route::get('/applicant/home', [ApplicantController::class, 'index'])->name('applicant')->middleware('applicant');
Route::get('/applicant/apply', [ApplicantController::class, 'showapply'])->middleware('applicant');


//  for tax officer
Route::get('/tax/login', [TaxController::class, 'login']);
Route::get('/tax/register', [TaxController::class, 'register']);
Route::get('/tax/home', [TaxController::class, 'index'])->name('tax')->middleware('tax');

//  for government official
Route::get('/gvt/login', [GvtController::class, 'login']);
Route::get('/gvt/register', [GvtController::class, 'register']);
Route::get('/gvt/home', [GvtController::class, 'index'])->name('gvt')->middleware('gvt');

 //  for admin
 Route::get('/root/login', [AdminController::class, 'login']);
 Route::get('/root/home', [AdminController::class, 'index'])->name('admin')->middleware('admin');
 Route::get('/root/users', [AdminController::class, 'usermanage'])->name('usermanage')->middleware('admin');

 // Delete Listing
Route::delete('/root/{listing}', [ListingController::class, 'destroy1'])->middleware('admin');
// Update Listing
Route::any('/root/stat/{listing}', [ListingController::class, 'stat'])->middleware('admin');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Applications

// Store Listing Data
Route::post('/applicant/submit', [ApplicationsController::class, 'store'])->middleware('applicant');
Route::get('/applicant/myapps', [ApplicationsController::class, 'index'])->middleware('applicant');