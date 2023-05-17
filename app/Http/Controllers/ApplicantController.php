<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    // Show applicant login page
    public function login () {
        return view('applicant.login');
    }

    // Show applicant register page
    public function register () {
        return view('applicant.register');
    }

    // Show applicant register page
    public function index () {
        return view('applicant.home');
    }
}
