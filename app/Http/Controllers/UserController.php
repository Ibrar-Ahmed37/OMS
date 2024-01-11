<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRequest;

class UserController extends Controller
{
    /**
    * Show the user registration form.
    *
    * @return \Illuminate\View\View
    */
    public function showUserRegistrationForm()
    {
        return view('home.userRegistrationForm');
    }
    
    public function submitRegistration(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'user_name' => 'required|string|max:255',
            'user_contact_number' => 'required|string|max:15',
            'user_gender' => 'required|string|in:male,female',
            'user_cnic' => 'required|string|max:15',
            'orphan_name' => 'required|string|max:255',
            'orphan_gender' => 'required|string|in:male,female',
            'rescue_location' => 'required|string',
            'age' => 'required|string|max:255',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        // Handle file uploads
        if ($request->hasFile('picture')) {
            $picturePath = $request->file('picture')->storeAs('uploads', 'picture_' . time() . '.' . $request->picture->extension(), 'public');
            $validatedData['picture'] = $picturePath;
        }
        // Create a new UserRequest record in the database
        $userRequest = UserRequest::create($validatedData);
        if($userRequest)
        {
            return back()->with('success', 'User Request Saved Successfully');
        }
        else {
            return back()->with('fail','Failed to save User Request');
        }
        // Redirect to a success page or perform any other actions
        return redirect('/');
    }
    public function getAllUserRegistrations(){
        try {
            $userRequests = UserRequest::all();
            return view('showUserRegistration', compact('userRequests'));
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error($e->getMessage());
            return response()->json(['error' => 'An error occurred.']);
        }
    }
}
