<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\retrieve;
use App\Models\Employee;

class retrieveStudent extends Controller
{
    public function index()
    {
        $data = retrieve::all();
        //return ['timeout' => [$data->toArray()]];
        return view('delemployee', compact('data'));


    }
    public function edit(Request $request)
    {
        $id = $request->input('id');
        $users = retrieve::where('id', $id)->get();

        return response()->json(['message' => $users], 200);
    }
    public function destroy(Request $request)
    {
        //
        $id = $request->input('id');

        $resource = retrieve::findOrFail($id);
        $retrieve = new Employee();
        $retrieve->firstname = $resource->Firstname;
        $retrieve->lastname = $resource->Lastname;
        $retrieve->section = $resource->Section;
        $retrieve->timeIn = $resource->timeIn;
        $retrieve->timeOut = $resource->timeOut;
        $retrieve->status = $resource->status;
        $retrieve->save();
        $resource->delete();
        return "succesfully retrieve";
    }
    public function permanent(Request $request)
    {
        //
        $id = $request->input('id');

        $resource = retrieve::findOrFail($id);
        $resource->delete();
        return "succesfully deleted";
    }

}