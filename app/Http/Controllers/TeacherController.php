<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teachers;

class TeacherController extends Controller
{
    public function index()
    {
        //select *from students;
        //select from students order by created_at desc;
        //$showTeachers =Teachers::all();
        $showTeachers =Teachers::OrderBy('created_at','desc')->get();
        return view ('teachers',compact('showTeachers'));
    }
    public function store (Request $request)
    {
        //1.validate
    
        try{
            $this->validate($request,
        [
            'teacherNames'=>['required','string'],
            'phoneNumber'=>['required','min:10','max:10'],
            'bio'=>['required']
            
        ]);
        Teachers::create($request->all());
        //return back();
        return back()->with('message','Student Registered Successfully');
        // dd($request->all());

        }catch (\throwable $th){
            throw $th;

        }

    }
    //
}
