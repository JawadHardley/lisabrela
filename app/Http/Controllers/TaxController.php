<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxController extends Controller
{
    // Show applicant login page
    public function login () {
        return view('tax.login');
    }

    // Show applicant register page
    public function register () {
        return view('tax.register');
    }

    // Show applicant register page
    public function index () {
        return view('tax.home');
    }
}
