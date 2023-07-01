<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\retrieve;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class StundentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Employee::all();
        //return ['timeout' => [$data->toArray()]];
        return view('admin', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $section = $request->input('section');
        $timeIn = $request->input('timein');
        $compareTime = "05:00:00 PM"; // iyang  out 
        $startWork = "08:00:00 PM"; // uyang in
        $outime = "05:10:00 PM";
        $ctime = "5:10:52 PM";
        if (strtotime($timeIn) > strtotime($outime) && strtotime($timeIn) < strtotime($compareTime)) {
            $status = "Late";
        } else if (strtotime($timeIn) > strtotime($startWork) && strtotime($timeIn) < strtotime($outime)) {
            $status = "present";
        } else {
            $status = "absent";
        }

        $Employee = Employee::create([
            'firstname' => $fname,
            'lastname' => $lname,
            'timeIn' => $timeIn,
            'timeOut' => "",
            'status' => $status

        ]);
        //return response()->json(['message' => $Employee->firstname], 200);

        return redirect()->route('show', ['firstname' => $Employee->firstname]);





    }
    public function addemployee(Request $request)
    {
        //
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $timeIn = $request->input('timein');
        $timeOut = $request->input('timeout');
        $Students = Employee::create([
            'firstname' => $fname,
            'lastname' => $lname,
            'timeIn' => $timeIn,
            'timeOut' => $timeOut,
            'status' => "present"

        ]);
        return "successfully created";

    }

    /**
     * Display the specified resource.
     */
    public function show($firstname)
    {
        $users = Employee::where('firstname', $firstname)->get();

        return response()->json(['message' => $users], 200);

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id = $request->input('id');
        $users = Employee::where('id', $id)->get();

        return response()->json(['message' => $users], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        ////
        $id = $request->input('id');

        // Retrieve the resource by ID
        $resource = Employee::findOrFail($id);
        $resource->timeOut = $request->timeOut;
        $resource->save();

        // Update the resource with new data
        return ['timeout' => [$resource->toArray()]];



    }
    public function updateinfo(Request $request)
    {
        $id = $request->input('id');
        $resource = Employee::findOrFail($id);

        $resource->firstname = $request->fname;
        $resource->lastname = $request->lname;
        $resource->timeIn = $request->timein;
        $resource->timeOut = $request->timeout;
        $resource->save();
        return "updated successfully";

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->input('id');

        $resource = Employee::findOrFail($id);
        $retrieve = new retrieve();
        $retrieve->firstname = $resource->Firstname;
        $retrieve->lastname = $resource->Lastname;
        $retrieve->timeIn = $resource->timeIn;
        $retrieve->timeOut = $resource->timeOut;
        $retrieve->status = $resource->status;
        $retrieve->save();
        $resource->delete();
        return "succesfully deleted";
    }
}