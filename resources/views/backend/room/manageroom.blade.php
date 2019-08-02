    
@extends('backend.layout.default')
@section('content')


          
           <h1>Manage Room</h1>          
     <table class="table table-bordered" style="margin-right: 50px;">
  <thead style="background-color: black; color: white; line-height: 50px;">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Seater</th>
      <th scope="col">Room no</th>
      <th scope="col">Fee</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

@foreach($allroom as $room)
    <tr>
      <th scope="row">{{$room['id']}}</th>
      <td>{{$room['select_seater']}}</td>
      <td>{{$room['room_no']}}</td>
      <td>{{$room['fee']}}</td>
      
      <td><a href="#">edit</a> | <a href="#">Delete</a></td>     
    </tr>
@endforeach


    
   
  </tbody>
</table>






        


    @stop