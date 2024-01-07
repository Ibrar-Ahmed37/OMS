<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function donation(){
        return view("donationForm");
    }

    public function submitDonation(Request $request){   
        // Validate the form data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'comments' => 'nullable|string',
            'amount' => 'required|numeric',
            'payment_mode' => 'required|string|in:jazzcash,easypaisa,other',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
        ]);
        $validatedData['user_id'] = session('user.id');
        // Save the donation to the database
        $donation = Donation::create($validatedData);
        if($donation)
        {
            return back()->with('success', 'Donation Saved Successfully');
        }
        else{
            return back()->with('fail','Failed to save Donations');
        }
    }
    public function getAllDonations()
    {   
        try {
            $donations = Donation::all();
            return view('showDonation', compact('donations'));
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error($e->getMessage());
            return response()->json(['error' => 'An error occurred.']);
        }
    }
}

