<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
class RoomController extends Controller
{
     public function index(){

   	return view ('backend.room.room');
   }
    public function manageroom(){
    	$allroom= Room::all()->toArray();

   	return view ('backend.room.manageroom',compact('allroom'));
   }
   public function store(Response $request){
    	Room::create($request->all());

  		return back();

   	
   }
}
