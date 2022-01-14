<?php

namespace App\Http\Controllers;

use App\Imports\StudentsImport;
use App\Models\Student;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('welcome',compact('students'));
    }
    public function import(Request $req){
        Excel::import(new StudentsImport,$req->file('student_file'));
        return back();
    }
}
