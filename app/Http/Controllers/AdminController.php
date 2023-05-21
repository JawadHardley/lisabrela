<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Show login Form
    public function login () {
        return view('admin.login');
    }

    // Show admin home page
    public function index () {
        return view('admin.home');
    }

    // Show admin user management page
    // Show all listings
    public function usermanage () {
        return view('admin.usermanage', [
            'listings' => Listing::latest()->paginate(20)
        ]);
    }

    

}
