<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\payments;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('gvt.home', [
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
        
        
        $user = GvtController::user_asked($application->user_id);
        $bguser = "bg-warning-lt";
        if ($application->gvt == 1) {
            $bguser = "bg-green-lt";
        }else if ($application->gvt === 0) {
            $bguser = "bg-red-lt";
        }

        
        $paycode = GvtController::paycode_asked($application->id);
        // dd($paycode);
        $bgpay = "bg-red";
        $userpay = "Pending";

        if ($paycode !== ""){
            if ($paycode->paid == 1) {
                $bgpay = "bg-green";
                $userpay = "Paid";
            }
            if ($paycode->paid == 3) {
                $bgpay = "bg-warning";
                $userpay = "Pending";
            }
        }

        return view('gvt.applicant', [
            'user' => $user,
            'app' => $application,
            'bg' => $bguser,
            'pay' => $paycode,
            'bgpay' => $bgpay,
            'userpay' => $userpay,
        ]);
    }


    //to show a single user
    public function payers() {
        
        $app = GvtController::user_asked2();
        $user = Listing::all();

        return view('gvt.ready', [
            'listings' => $app,
            'users' => $user,
        ]);
    }

    //return payments to function
    public function paycode_asked ($id) {
        $backer = "";
        $data = payments::all();
        foreach ($data as $key) {
            if ($key->app_id === $id) {
                $backer = $key;
            }
        }
        return $backer;
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

    //return user to function
    public function user_asked2 () {
        $backer = [];
        $data = Application::all();
        foreach ($data as $key) {
            if (($key->gvt == 1 && $key->taxed == 1) && $key->district == Auth::user()->district) {
                // dd($data);
                array_push($backer, $key);
            }
        }
        return $backer;
    }


}
