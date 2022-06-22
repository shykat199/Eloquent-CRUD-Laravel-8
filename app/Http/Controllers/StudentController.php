<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //

    public function student()
    {

        return view('add-student');
    }

    public function createStudent(Request $request)
    {

        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->number = $request->number;
        $student->address = $request->address;

        $student->save();

        return back()->with('student_added', 'Student Added Successfully');
    }

    public function showStudent(Request $request)
    {

        $search = $request['key'] ?? "";

        if ($search!=""){

            $data=Student::where('name','LIKE',"%".$search."%")->paginate(10);
            //$data=appends($request->all());
            return view('show-student', compact('data'));

        }else{
            $data = Student::OrderBy('id','desc')->paginate(10);
            return view('show-student', compact('data'));

        }

        //return view('show-student', compact('data','search'));
    }

    public function editStudent($id)
    {

        $student = Student::where('id', $id)->first();
        return view('edit-student', compact('student'));
    }

    public function updateStudent(Request $request)
    {

        $student = Student::find($request->id);

        $student->name = $request->name;
        $student->email = $request->email;
        $student->number = $request->number;
        $student->address = $request->address;

        $student->save();


        return back()->with('post_update', 'Record has updated Successfully');
    }

    public function deleteStudent($id)
    {

        Student::where('id', $id)->delete();

        return back()->with('post_deleted', 'Record has deleted Successfully');
    }
}
