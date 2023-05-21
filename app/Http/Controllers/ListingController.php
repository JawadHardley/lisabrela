<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // Update user Data
    public function stat(Request $request, Listing $listing) {
        // Make sure logged in user is owner
        if(Auth::user()->role != "admin") {
            abort(403, 'Unauthorized Action');
        }
        // dd($user);
        // $formFields = $request->validate([
        //     'verified' => 'required'
        // ]);
        $val = "0";
        if($listing->verified == 0) {
            $val = 1;
        }
        
        DB::table('users')
       ->where('id', $listing->id)
       ->update(['verified' => $val]);
        // dd($listing);
        // $user->update($formFields);

        return back()->with('message', 'User updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing)
    {
        //
    }

    // Delete Listing
    public function destroy1(Listing $listing) {
        // Make sure logged in user is owner
        if(Auth::user()->role != 'admin') {
            abort(403, 'Unauthorized Action');
        }
        
        $listing->delete();
        return redirect('/root/users')->with('message', 'User deleted successfully');
    }
}
