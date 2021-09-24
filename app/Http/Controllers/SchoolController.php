<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Person;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index()
    {
        return view('schools',['schools'=>School::all()]);
    }

    public function store(Request $request)
    {
        $input=$request->all();
        School::create($input);
        return redirect('/');
    }

    public function edit($id)
    {
        $school=School::find($id);
        $arr=Person::all();
        $people=[];
        foreach($arr as $person){
            $flag=true;
            foreach($school->people as $job){
                if($person->id==$job->person->id){
                    $flag=false;
                    break;
                }
            }
            if($flag){
                $people[]=$person;
            }
        }
        return view('/school',['school'=>$school,'people'=>$people]);
    }

    public function update(Request $request,$id)
    {
        $school=School::find($id);
        if(isset($_POST['delete'])){
            $school->delete();
            return \redirect('/');
        }
        $input=$request->all();
        $school->update($input);
        return  \redirect('/schools/'.$id);
      
    }
}