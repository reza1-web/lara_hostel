@extends('backend.layout.default')
@section('content')
<section id="content_wrapper">
        
           <h1>Manage Students</h1>

        
     <table class="table table-bordered" style="padding-right: 50px;">
  <thead style="background-color: black; color: white; line-height: 50px;">
    <tr>
      <th scope="col">SNo.#</th>
      <th scope="col">Student Name.</th>
      <th scope="col">Reg.no.</th>
      <th scope="col">Contact No.</th>
      <th scope="col">Room No.</th>
      <th scope="col">Seat No.</th>
      <th scope="col">Staying From</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($allstudent as $student)
    <tr>
      <th scope="row">{{$student->id}}</th>
      <td>{{$student->first_name}}</td>
      <td>{{$student->last_name}}</td>
      <td>{{$student->father_name}}</td>
      <td>{{$student->mother_name}}</td>
      <td>{{$student->seat_no}}</td>
      <td>{{$student->room_no}}</td>
      <td>{{$student->room_no}}</td>
      <td>{{$student->action}}</td>
      
     
    </tr>
    @endforeach
    
   
  </tbody>
</table>

@stop







        

    </section>
    <!-- /Main Wrapper -->
