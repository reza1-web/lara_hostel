<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentregController extends Controller
{
    public function index(){
   	return view ('backend.registration.studentreg');
   }
   public function managestudent(){
   	return view ('backend.registration.managestudent');
   }
}
