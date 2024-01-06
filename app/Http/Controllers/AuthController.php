<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view("login");
    }
    public function modal()
    {
        return view("modal");
    }
    public function signup()
    {
        return view("signup");
    }
    public function validateLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            // Authentication passed
            // Session::put('user', $user);
            $request->session()->put('user',$user); // Replace with your user type logic

            return redirect('/');
        }
        return back()->with('fail', 'Invalid credentials. Please enter Valid credentials');
    }
    // public function submitDonation (Request $request){
    //     // $res = Donation::create([
    //     //     'name' => $request->input('name'),
    //     //     'amount' => $request->input('amount'),
    //     //     'description' => $request->input('description')
    //     // ]);
    // }
    public function registerUser(Request $request)
    {
        // Your registration logic goes here
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'required|date',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required',
            'password' => 'required|min:6|confirmed',
            'gender' => 'required|in:male,female',
        ]);

        $res = User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'date_of_birth' => $request->input('date_of_birth'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'password' => bcrypt($request->input('password')),
            'gender' => $request->input('gender'),
            'user_type' => $request->input('user_type')
        ]);
        if ($res) {
            return back()->with('success', 'Registration successful. Please log in.');
        } else {
            return back()->with('fail', 'Something went wrong');
        }

    }

}
