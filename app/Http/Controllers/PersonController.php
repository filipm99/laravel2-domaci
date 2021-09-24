<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        return view('people',['people'=>Person::all()]);
    }

    public function store(Request $request)
    {
        $input=$request->all();
        Person::create($input);
        return \redirect('/people');
    }

    public function destroy($id)
    {
        $person=Person::find($id);
        $person->delete();
        return \redirect('/people');
    }
}