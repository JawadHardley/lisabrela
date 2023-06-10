<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\License;
use App\Models\Listing;
use App\Models\Comments;
use App\Models\payments;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicantController extends Controller
{
    // Show applicant login page
    public function leseni () {
        return view('applicant.leseni');
    }

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
        $data = License::all();
        $data2 = [];
        
        foreach ($data as $key) {
            if ($key->user_id == Auth::user()->id) {
                // dd(($data2));
                array_push($data2, $key);
            }
        }
        
        // dd(count($data2));
        return view('applicant.home', [
            'listings' => Application::latest()->paginate(20),
            'license' => count($data2),
        ]);
    }

    // Show applicant apply page
    public function showapply () {
        return view('applicant.apply');
    }

    //to show a single user
    public function appshow(Application $application) {
        // dd($application->id);
        $data2 = "No comment";
        $data3 = "";
        if ($application->taxed == 1 && $application->gvt == 1) {
            $data = "bg-green-lt";
        }else if ($application->taxed === 0 || $application->gvt === 0) {
            $data2 = ApplicantController::comments_asked($application->id);
            $data = "bg-red-lt";   
        }else {
            $data = "bg-yellow-lt";
        }
        
        if ($application->taxed == 1 || $application->gvt == 1) {
            $data3 = "disabled";
        }

        $paycode = ApplicantController::paycode_asked($application->id);
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

        $user = ApplicantController::user_asked($application->user_id);
        return view('applicant.myapp', [
            'user' => $user,
            'app' => $application,
            'status' => $data,
            'comments' => $data2,
            'disabled' => $data3,
            'pay' => $paycode,
            'bgpay' => $bgpay,
            'userpay' => $userpay,
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

    //return comments to function
    public function comments_asked ($id) {
        $backer = "";
        $data = Comments::all();
        foreach ($data as $key) {
            if ($key->app_id == $id) {
                $backer = $key;
                // break;
            }
        }
        return $backer;
    }


    public function index_license() {
        $data = ApplicantController::app_asked();
        // dd($data[0]->district);
        $data3 = ApplicantController::gvt_asked($data[0]->district);
        $data2 = ApplicantController::leseni_asked(Auth::user()->id);

        return view('applicant.license', [
            'listings' => $data,
            'user' => $data3,
            'license' => $data2,
        ]);
    }


    public function app_asked () {
        $backer = "";
        $data = Application::all();
        foreach ($data as $key) {
            if ((($key->gvt == 1 && $key->taxed == 1) && $key->user_id == Auth::user()->id) && $key->paid == 1) {
                // dd($data);
                $backer = $key;
            }
        }
        return $backer;
    }

    //return user to function
    public function gvt_asked ($id) {
        $backer = "";
        $data = User::all();
        foreach ($data as $key) {
            if ($key->district == $id) {
                // dd($data);
                $backer = $key;
            }
        }
        return $backer;
    }

     //return user to function
     public function leseni_asked ($id) {
        $backer = "";
        $data = License::all();
        foreach ($data as $key) {
            if ($key->user_id == $id) {
                // dd($data);
                $backer = $key;
            }
        }
        return $backer;
    }

    // this will help generate pdf file for the applicant
    public function generatePDF()
    {

        $data = ApplicantController::app_asked();
        // dd($data[0]->district);
        $data3 = ApplicantController::gvt_asked($data->district);
        $data2 = ApplicantController::leseni_asked(Auth::user()->id);

        // return view('applicant.license', [
        //     'listings' => $data,
        //     'user' => $data3,
        //     'license' => $data2,
        // ]);
        $send = [
            'listing' => $data,
            'user' => $data3,
            'license' => $data2,
        ]; 
            
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('myPDF', $send);
        // $pdf = PDF::loadView('myPDF', $data);
     
        return $pdf->download('License.pdf');
    }


}
