<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
   public function index(){
   	return view ('backend.course.index');
   }
    public function managecourse(){
   	return view ('backend.course.managecourse');
   }
   public function coursestore(Request $request){

   	$course = new Course;
 
        $course->course_code= $request->get('course_code');
        $course->course_name = $request->get('course_name');
 
        $course->save();
 
        return redirect('/admin');


   }
}
