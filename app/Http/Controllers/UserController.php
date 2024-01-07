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
        ]);

        // Create a new UserRequest record in the database
        UserRequest::create($validatedData);

        // Redirect to a success page or perform any other actions
        return redirect('/');
    }
}
