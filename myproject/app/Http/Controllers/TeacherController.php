<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function get()
    {
        $teachdata = Teacher::all();

        return view('Teachers.index', compact('teachdata'));
    }

    public function insert()
    {
        return view('Teachers.insert');
    }

    public function teachstore(Request $req)
    {
        $teacher = new Teacher;

        $teacher->techer_name = $req->name;
        $teacher->save();

        return redirect()->route('teacher.get');
    }

    public function edit($id){
        $teacher=Teacher::find($id);

        return view('Teachers.edit',compact('teacher'));
    }

    public function teachupdate(Request $req,$id){

        $teacher=Teacher::find($id);
        $teacher->techer_name=$req->name;
        $teacher->save();

        return redirect()->route('teacher.get');

    }

    public function delete($id){
            $teacher=Teacher::find($id);
            $teacher->delete();

            return redirect()->route('teacher.get');
    }
}
