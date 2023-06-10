<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\License;
use App\Models\payments;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return view('applicant.myapps', [
            'listings' => Application::latest()->paginate(20)
        ]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index_license() {
        $data = ApplicationsController::app_asked();
        // dd($data[0]->district);
        $data3 = ApplicationsController::gvt_asked($data[0]->district);
        $data2 = ApplicationsController::leseni_asked(Auth::user()->id);

        return view('applicant.license', [
            'listings' => $data,
            'user' => $data3,
            'license' => $data2,
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function goodindex() {
        $data = ApplicationsController::app_asked();
        $data2 = ApplicationsController::pay_asked();
        return view('applicant.goodapps', [
            'listings' => $data,
            'pay' => $data2,
        ]);
    }

    //return user to function
    public function app_asked () {
        $backer = [];
        $data = Application::all();
        foreach ($data as $key) {
            if (($key->gvt == 1 && $key->taxed == 1) && $key->user_id == Auth::user()->id) {
                // dd($data);
                array_push($backer, $key);
            }
        }
        return $backer;
    }

    //return payments to function
    public function pay_asked () {
        $backer = "";
        $data = payments::all();
        foreach ($data as $key) {
            if ($key->user_id == Auth::user()->id) {
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


    /**
     * Display a listing of the resource.
     */
    public function index_reject() {
        return view('applicant.rejectapps', [
            'listings' => Application::latest()->paginate(20)
        ]);
    }

        /**
     * Display a listing of the resource.
     */
    public function index_pending() {
        return view('applicant.pendingapps', [
            'listings' => Application::latest()->paginate(20)
        ]);
    }

    /**

     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $formFields = $request->validate([
            'entity' => 'required',
            'sector' => 'required',
            'category' => 'required',
            'type' => 'required',
            'nationality' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'region' => 'required',
            'district' => 'required',
        ]);

        if($request->hasFile('citizen_doc')) {
            $formFields['citizen_doc'] = $request->file('citizen_doc')->store('applications', 'public');
        }

        if($request->hasFile('memo_doc')) {
            $formFields['memo_doc'] = $request->file('memo_doc')->store('applications', 'public');
        }

        if($request->hasFile('tin_doc')) {
            $formFields['tin_doc'] = $request->file('tin_doc')->store('applications', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Application::create($formFields);

        return redirect('/applicant/home')->with('message', 'Application submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Application $application)
    {
        // Make sure logged in user is owner
        if($application->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        // dd($request);
        $formFields = $request->validate([
            'entity' => 'required',
            'sector' => 'required',
            'category' => 'required',
            'type' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'region' => 'required',
            'district' => 'required',
        ]);

        if($request->hasFile('citizen_doc')) {
            $formFields['citizen_doc'] = $request->file('citizen_doc')->store('applications', 'public');
            DB::table('application')
            ->where('id', $application->id)
            ->update(['taxed' => NULL]);

            DB::table('application')
            ->where('id', $application->id)
            ->update(['gvt' => NULL]);
        }

        if($request->hasFile('memo_doc')) {
            $formFields['memo_doc'] = $request->file('memo_doc')->store('applications', 'public');
            DB::table('application')
            ->where('id', $application->id)
            ->update(['taxed' => NULL]);
            
            DB::table('application')
            ->where('id', $application->id)
            ->update(['gvt' => NULL]);
        }

        if($request->hasFile('tin_doc')) {
            $formFields['tin_doc'] = $request->file('tin_doc')->store('applications', 'public');
            DB::table('application')
            ->where('id', $application->id)
            ->update(['taxed' => NULL]);

            DB::table('application')
            ->where('id', $application->id)
            ->update(['gvt' => NULL]);
        }

        $application->update($formFields);

        return back()->with('message', 'Application updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        //
    }


     /**
     * Update the specified resource in storage.
     */
    // Update user Data
    public function status(Request $request, Application $application) {
        // Make sure logged in user is owner
        if(Auth::user()->role != "tax") {
            abort(403, 'Unauthorized Action');
        }
        // dd(Auth::user()->role);
        // dd($user);
        // $formFields = $request->validate([
        //     'verified' => 'required'
        // ]);
        $val = NULL;
        if($application->taxed === NULL) {
            $val = 1;
        }
        // dd($application->id);
        DB::table('application')
       ->where('id', $application->id)
       ->update(['taxed' => $val]);
        // dd($listing);
        // $user->update($formFields);
        if ($val === NULL) {
            return back()->with('message', 'Application revoked successfully!');
        }else {
            return back()->with('message', 'Application verified successfully!');
        }
    }


    public function statusgvt(Request $request, Application $application) {
        // Make sure logged in user is owner
        if(Auth::user()->role != "gvt") {
            abort(403, 'Unauthorized Action');
        }
        // dd(Auth::user()->role);
        // dd($user);
        // $formFields = $request->validate([
        //     'verified' => 'required'
        // ]);
        $val = NULL;
        if($application->gvt === NULL) {
            $val = 1;
        }
        // dd($application->id);
        DB::table('application')
       ->where('id', $application->id)
       ->update(['gvt' => $val]);
        // dd($listing);
        // $user->update($formFields);
        if ($val === NULL) {
            return back()->with('message', 'Application revoked successfully!');
        }else {
            return back()->with('message', 'Application verified successfully!');
        }
    }


    // Delete Listing
    public function destroyapp(Application $application) {
        // Make sure logged in user is owner
        if(Auth::user()->role != 'applicant') {
            abort(403, 'Unauthorized Action');
        }
        
        $application->delete();
        return back()->with('message', 'Application deleted successfully');
    }



}
