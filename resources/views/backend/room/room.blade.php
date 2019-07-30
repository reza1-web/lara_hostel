@extends('backend.layout.dafault')
@section('content')

<section id="content_wrapper">
        
           <h1>Add a room</h1>

           <form>
  <div class="form-group">
    <label for="exampleFormControlSelect1"> select seater</label>
    <select class="form-control" >

      <option>select one</option>
      <option value="single seat">single seat</option>
      <option value="double seat">double seat</option>
      <option value="three seat">three seat</option>
      
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Room No.</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Your room">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Fee (per student)</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Your amount">
  </div>
  
  <button type="submit" class="btn btn-primary">Create  room</button>
</form>
       





        

    </section>
    <!-- /Main Wrapper -->
@stop