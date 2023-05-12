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

Route::get('/', function () {
    return view('welcome');
});

// for applcant
Route::get('/applicant/login', function () {
    return view('applicant.login');
 });

 Route::get('/applicant/register', function () {
    return view('applicant.register');
 });

//  for tax officer
 Route::get('/tax/login', function () {
    return view('tax.login');
 });

 Route::get('/tax/register', function () {
    return view('tax.register');
 });

//  for government official
 Route::get('/gvt/login', function () {
    return view('gvt.login');
 });

 Route::get('/gvt/register', function () {
    return view('gvt.register');
 });

 //  for admin
 Route::get('/root/login', function () {
    return view('admin.login');
 });