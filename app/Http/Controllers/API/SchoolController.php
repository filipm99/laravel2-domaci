<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index()
    {
        return \response()->json(Movie::all(),200);
    }

    public function store(Request $request)
    {
        $input=$request->all();
        $school=School::create($input);
        return \response()->json($school,200);
    }

    public function show(School $school)
    {
        return \response()->json($school,200);
    
    }

    public function update(Request $request, School $school)
    {
        $school->update($request->all());
        return \response()->json($school,200);
    }

    public function destroy(School $school)
    {
        $school->delete();
        return \response()->json('',200);
    }
}