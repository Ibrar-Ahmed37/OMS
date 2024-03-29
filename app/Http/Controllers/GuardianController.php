<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuardianRequest;

class GuardianController extends Controller
{
    /**
     * Show the guardian registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showGuardianRegistrationForm()
    {
        return view('home.guardianRegistrationForm');
    }

    public function submitRegistration(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'mother_name' => 'required|string|max:255',
            'mother_cnic' => 'required|string|max:15',
            'father_name' => 'required|string|max:255',
            'father_cnic' => 'required|string|max:15',
            'parent_contact_number' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'child_name' => 'required|string|max:255',
            'bayform_number' => 'required|string|max:255',
            'child_gender' => 'required|string|in:male,female',
            'reason_to_register' => 'required|string',
            'age' => 'required|string|max:255',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file' => 'mimes:pdf|max:4096' // Add any additional validation rules for the file field
        ]);

        
         // Handle file uploads
        if ($request->hasFile('picture')) {
            $picturePath = $request->file('picture')->storeAs('uploads', 'picture_' . time() . '.' . $request->picture->extension(), 'public');
            $validatedData['picture'] = $picturePath;
        }

        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->storeAs('uploads', 'file_' . time() . '.' . $request->file->extension(), 'public');
            $validatedData['file'] = $filePath;
        }

        // Create a new GuardianRequest record in the database
        $guardianRequest = GuardianRequest::create($validatedData);
        if($guardianRequest)
        {
            return back()->with('success', 'Guardian Request Saved Successfully');
        }
        else{
            return back()->with('fail','Failed to save Guardian Request');
        }

        return redirect('/');
    }
    public function getAllGuardianRegistrations()
    {
        try {
            $guardianRequests = GuardianRequest::all();
            return view('showGuardianRegistration', compact('guardianRequests'));
        } catch (\Exception $e) {
            // Log the error message along with additional information
            \Illuminate\Support\Facades\Log::error('Error in Guardian Registrations: ' . $e->getMessage(), [
                'guardian_requests' => GuardianRequest::all()->toArray(), // Log all guardian requests
                'exception_trace' => $e->getTraceAsString(), // Log the full stack trace
            ]);

            // Return a more detailed error response
            return response()->json(['error' => 'An error occurred. Please check the logs for more details.'], 500);
        }
    }

}
