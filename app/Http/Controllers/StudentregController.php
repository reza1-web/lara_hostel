<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentregController extends Controller
{
    public function index(){
   	return view ('backend.registration.studentreg');
   }
   public function managestudent(){
   	return view ('backend.registration.managestudent');
   }
   public function store(Request $request)
    {
        Student::create($request->all());
        return back()->with('success','Student Added Successfully');
    }
}
