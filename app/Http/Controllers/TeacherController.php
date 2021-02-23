<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teachers;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    //authenticate student page
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //select *from students;
        //select from students order by created_at desc;
        //$showTeachers =Teachers::all();
        $showTeachers =Teachers::OrderBy('created_at','desc')->paginate(3);
        $countTeachers=Teachers::count();
        return view ('teacher.index',compact('showTeachers','countTeachers'));
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
        //grabbing loggedin user
        $request['create_by']=Auth::user()->name;
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
