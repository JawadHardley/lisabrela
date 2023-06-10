<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('tax.home', [
            'listings' => Application::all(),
            'users' => Listing::all()
        ]);
    }

    // Show applications pending page
    public function pendshow () {
        return view('tax.pendingapps', [
            'listings' => Application::all(),
            'users' => Listing::all()
        ]);
    }

    // Show applications pending page
    public function rejectshow () {
        return view('tax.rejectedapps', [
            'listings' => Application::all(),
            'users' => Listing::all()
        ]);
    }

    //to show a single user
    public function appshow(Application $application) {
        // dd($application->id);
        if ($application->region != Auth::user()->region || $application->district != Auth::user()->district) {
            abort(403, 'Unauthorized Action');
        }
        
        $user = TaxController::user_asked($application->user_id);
        $bguser = "bg-warning-lt";
        if ($application->taxed == 1) {
            $bguser = "bg-green-lt";
        }else if ($application->taxed === 0) {
            $bguser = "bg-red-lt";
        }
        return view('tax.applicant', [
            'user' => $user,
            'app' => $application,
            'bg' => $bguser,
        ]);
    }

    //return user to function
    public function user_asked ($id) {
        $backer = "";
        $data = Listing::all();
        foreach ($data as $key) {
            if ($key->id == $id) {
                $backer = $key;
            }
        }
        return $backer;
    }
}
