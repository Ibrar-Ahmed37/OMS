<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view("login");
    }
    public function ngoLogin()
    {
        return view("ngoLogin");
    }
    public function adminLogin()
    {
        return view("adminLogin");
    }
    public function signup(){
        return view("signup");
    }
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
        ]);
        if ($res) {
            return back()->with('success', 'Registration successful. Please log in.');
        } else {
            return back()->with('fail', 'Something went wrong');
        }

    }
}
