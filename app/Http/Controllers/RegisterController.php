<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('welcome');
    }

    // public function store(Request $request)
    // {
    //     $input = $request->all();

    //     // User::create([
    //     //     'name' => $input['name'],
    //     //     'email' => $input['email'],
    //     //     'password' => 'password',
    //     //     'role' => 'users'


    //     // ]);
    //     return $request;
    // }
    public function store(Request $request)
    {
        // $fname = $request->input('fname');
        // $lname = $request->input('lname');
        // $user1 = $request->input('user1');
        // $pwd1 = $request->input('pwd1');
        // $users = new User();
        // $users->name = $fname;
        // $users->email = $user1;
        // $users->password->password;
        // $users->role = "hacker";
        // $users->save();
        // // Process the data and save to the database or perform other actions
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $email = $request->input('email');
        $password = $request->input('password');
        $section = $request->input('section');
        // $users = new User();
        // $users->name = $fname;
        // $users->email = $email;
        // $users->password->$password;
        // $users->role = "hacker";
        // $users->save();
        // Process the data, save it to the database, etc.
        User::create([
            'firstname' => $fname,
            'lastname' => $lname,
            'email' => $email,
            'section' => $section,
            'password' => Hash::make($password),
            'role' => 'users'

        ]);
        return response()->json(['message' => $fname], 200);


    }

    public function formSubmit(Request $request)
    {
        return response()->json([$request->all()]);
    }
}