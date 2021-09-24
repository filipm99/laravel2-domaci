<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function store(Request $request)
    {
        $input=$request->all();
        Job::create($input);
        return \redirect('/schools/'.$request->school_id);
    }

    public function destroy(Request $request)
    {
        Job::where([
            ['people_id',$request->person_id],
            ['school_id',$request->school_id]
        ])->delete();
        return redirect('/schools/'.$request->school_id);
    }
}
