<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    
    public function index()
    {
        //select *from students;
        $showStudents =Student::all();
        return view ('students',compact('showStudents'));
    }
    public function store (Request $request)
    {
        //1.validate
    
        try{
            $this->validate($request,
        [
            'name'=>['required','string'],
            'regno'=>['required','min:4','max:4'],
            'bio'=>['required']
        ]);
        //2. form input fields
        //3.store
        Student::create($request->all());
        return back();
        // dd($request->all());

        }catch (\throwable $th){
            throw $th;

        }

    }
}
