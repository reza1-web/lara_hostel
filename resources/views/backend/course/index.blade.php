@extends('backend.layout.default')
@section('content')
<header id="topbar" class="alt">
    <div class="topbar-left">
        <ol class="breadcrumb">
            <li class="breadcrumb-link">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-current-item">Content fixed</li>
        </ol>
    </div>
</header>
<section id="content" class="table-layout animated fadeIn">
    
           <h1>Manage course</h1>          
     <table class="table table-bordered" style="margin-right: 50px;">
  <thead style="background-color: black; color: white; line-height: 50px;">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Course code</th>
      <th scope="col">Course title</th>
      
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

@foreach($allcourse as $course)
    <tr>
      <th scope="row">{{$course['id']}}</th>
      <td>{{$course['course_code']}}</td>
      <td>{{$course['course_name']}}</td>
      
      
      <td><a href="#">edit</a> | <a href="#">Delete</a></td>     
    </tr>
@endforeach


    
  



</section>
@stop


