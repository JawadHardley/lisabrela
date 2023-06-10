<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\License;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LicenseController extends Controller
{
    //
    public function store(Request $request) {
        $formFields = $request->validate([
            'user_id' => 'required',
            'app_id' => 'required',
        ]);

        $num = 'AAA111AA11';
        $leseni = License::latest()->first();

        if ($leseni != NULL) {
            $num = $leseni->license_number++;
        }
        $formFields['license_number'] = $num;

        DB::table('application')
       ->where('id', $request->app_id)
       ->update(['paid' => 1]); 

        $currentTime = Carbon::now();
        // dd($currentTime->toArray());

        $year = $currentTime->toArray()['year'] + 1;
        $month = $currentTime->toArray()['month'];
        $day = $currentTime->toArray()['day'];
        $date = $year . "-" . $month . "-" . $day;
        // dd($num++);

        $formFields['expire'] = $date;

        License::create($formFields);

        return back()->with('message', 'License created successfully!');
    }
}
