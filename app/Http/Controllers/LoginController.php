<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class LoginController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    // public function check(Request $request)
    // {

    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required',


    //     ]);

    //     if (\Auth::attempt($request->only('email', 'password', 'role'))) {

    //         $users = new User();

    //         return $users->role;


    //     }
    //     return $request;
    // }
    public function check(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            $role = $user->role;

            if ($role == 'users') {
                return view('employee', ['user' => $user]);


            } else {

                return redirect()->route('index');

            }
        }

        return $request;
    }
    public function account()
    {
        $data = User::all();
        //return ['timeout' => [$data->toArray()]];
        return view('account', compact('data'));

    }
    public function edit(Request $request)
    {
        $id = $request->input('id');
        $users = User::where('id', $id)->get();

        return response()->json(['message' => $users], 200);

    }

    public function permanent(Request $request)
    {
        $id = $request->input('id');

        $resource = User::findOrFail($id);
        $resource->delete();
        return "succesfully deleted";
    }

}