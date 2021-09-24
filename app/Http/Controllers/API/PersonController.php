<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        return \response()->json(Person::all(),200);
    }

    public function store(Request $request)
    {
        $input=$request->all();
        $person=Person::create($input);
        return \response()->json($person,200);
    }

    public function show(Person $person)
    {
        return \response()->json($person,200);
    }

    public function update(Request $request, Person $person)
    {
        
        $person->update($request->all());
        return \response()->json($person,200);
    }

    public function destroy(Person $person)
    {
        $person->delete();
        return \response()->json('',200);
    }
}
