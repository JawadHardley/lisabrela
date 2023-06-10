<?php

namespace App\Http\Controllers;

use App\Models\payments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class paymentsController extends Controller
{
    //
    
    /**
     * Store a newly created resource in storage.
     */
    public function sendpay(Request $request) {
        $formFields = $request->validate([
            'user_id' => 'required',
            'app_id' => 'required',
            'amount' => 'required',
        ]);

        $formFields['paid'] = 0;
        // dd($formFields);

        payments::create($formFields);

        return back()->with('message', 'Payment request sent successfully!');
    }

    // Delete Listing
    public function destroy1(payments $payments) {
        // Make sure logged in user is owner
        if(Auth::user()->role != 'gvt') {
            abort(403, 'Unauthorized Action');
        }
        
        $payments->delete();
        return back()->with('message', 'Payment details deleted successfully');
    }

    // Update user Data
    public function statinvalid(Request $request, payments $payments) {
        // Make sure logged in user is owner
        if(Auth::user()->role != "gvt") {
            abort(403, 'Unauthorized Action');
        }
    
        
        DB::table('payments')
       ->where('id', $payments->id)
       ->update(['paid' => 2]);
        // dd($listing);
        // $user->update($formFields);

        return back()->with('message', 'Payment denied successfully!');
    }

    // Update user Data
    public function statapprove(Request $request, payments $payments) {
        // Make sure logged in user is owner
        if(Auth::user()->role != "gvt") {
            abort(403, 'Unauthorized Action');
        }
    
        
        DB::table('payments')
       ->where('id', $payments->id)
       ->update(['paid' => 1]);
        // dd($listing);
        // $user->update($formFields);

        return back()->with('message', 'User updated successfully!');
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, payments $payments)
    {
        // Make sure logged in user is owner
        if($payments->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        // dd($request);
        $formFields = $request->validate([
            'method' => 'required',
        ]);
        $formFields['paid'] = 3;
        if($request->hasFile('file')) {
            $formFields['file'] = $request->file('file')->store('payments', 'public');
        }
        $payments->update($formFields);

        return back()->with('message', 'Payment receipt uploaded successfully!');
    }


}
