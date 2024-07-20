<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\License;
use App\Models\Listing;
use Barryvdh\DomPDF\PDF;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Barryvdh\DomPDF\Facade as PDF;

class PDFController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function generatePDF()
    {
        $data = PDFController::app_asked();
        // dd($data[0]->district);
        $data3 = PDFController::gvt_asked($data->district);
        $data2 = PDFController::leseni_asked(Auth::user()->id);
        $data4 = PDFController::user_asked(Auth::user()->id);

        // return view('applicant.license', [
        //     'listings' => $data,
        //     'user' => $data3,
        //     'license' => $data2,
        // ]);
        $send = [
            'listing' => $data,
            'user' => $data3,
            'license' => $data2,
            'owner' => $data4,
        ]; 
            
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('myPDF', $send);
        // $pdf = PDF::loadView('myPDF', $data);
        // dd($data4);
        return $pdf->download('License' . $data2['license_number'] . '.pdf');
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

    public function user_asked () {
        $backer = "";
        $data = Listing::all();
        foreach ($data as $key) {
            if ($key->id == Auth::user()->id) {
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

    
}
