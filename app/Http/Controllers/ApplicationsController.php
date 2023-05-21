<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        //
    }
}
