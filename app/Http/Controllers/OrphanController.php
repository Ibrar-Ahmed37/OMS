<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrphanRequest;

class OrphanController extends Controller
{
    public function showOrphanRegistrationForm()
    {
        return view('home.orphanRegistrationForm');
    }

    public function submitRegistration(Request $request)
    {

        try {
            $validatedData = $request->validate([
                'ngo_name' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'contact_no' => 'required|string|max:15',
                'orphan_name' => 'required|string|max:255',
                'orphan_age' => 'required|string|max:255',
                'orphan_gender' => 'required|string|in:male,female',
                'orphan_description' => 'required|string',
                'city' => 'required|string',
                'orphan_bayform' => 'required|string',
                'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'file' => 'mimes:pdf|max:4096',
            ]);

         // Handle file uploads
            if ($request->hasFile('picture')) {
                $picturePath = $request->file('picture')->storeAs('uploads', 'picture_' . time() . '.' . $request->picture->extension(), 'public');
                $validatedData['picture'] = $picturePath;
            }

            if ($request->hasFile('file')) {
                $filePath = $request->file('file')->storeAs('uploads', 'file_' . time() . '.' . $request->file->extension());
                $validatedData['file'] = $filePath;
            }

            // dd($validatedData);
            $orpahnRequest = OrphanRequest::create($validatedData);
            if($orpahnRequest)
            {
                return back()->with('success', 'Orphan Request Saved Successfully');
            }
            else {
                return back()->with('fail','Failed to save Orphan Request');
            }

            return redirect('/');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Redirect back with validation errors
            return redirect()->back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            // Log other exceptions
            \Illuminate\Support\Facades\Log::error($e->getMessage());
            return redirect()->route('orphan.registration')->with('error', 'An error occurred.');
        }
    }
    public function getAllOrphanRegistrations()
    {   
        try {
            $registrations = OrphanRequest::all();
            return view('showOrphanRegistration', compact('registrations'));
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error($e->getMessage());
            return response()->json(['error' => 'An error occurred.']);
        }
    }
    
    // public function showOrphanPage(){
    //     return view('show');
    // }
}
