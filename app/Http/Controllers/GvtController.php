<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GvtController extends Controller
{
    // Show applicant login page
    public function login () {
        return view('gvt.login');
    }

    // Show applicant register page
    public function register () {
        return view('gvt.register');
    }

    // Show applicant register page
    public function index () {
        return view('gvt.home');
    }
}
