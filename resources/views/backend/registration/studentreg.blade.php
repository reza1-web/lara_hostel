@extends('backend.layout.default')
@section('content')


        
           <h1>Student Registration</h1>

          
    

<section id="content" class="table-layout">

            

            <!-- Column Center -->
            <div class="chute chute-center" >
                <div class="chute-scroller mw1000 center-block">

                    <div class="tab-content mw900 center-block center-children">

                        <!-- Comment Form -->
                        <div class=" theme-primary tab-pane mw600 active" id="comment" role="tabpanel">
                            <div class="panel ">
                                <div class="panel-heading">
                                    <span class="panel-title pn">Leave a comment</span>
                                </div>
                                <!-- /Panel Heading -->

                               <form class="form-horizontal" action="{{route('student.store')}}"method="post">
                            {{csrf_field()}}
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="firstname" placeholder="First Name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="lastname" placeholder="Last Name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" name="email" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Father Name*</label>
                    <div class="col-sm-9">
                        <input type="text" name="fathername" placeholder="Enter Name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Mother Name*</label>
                    <div class="col-sm-9">
                        <input type="text" name="mothername" placeholder="Enter Name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                    <div class="col-sm-9">
                        <input type="date" name="date of birth" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" name="phoneNumber" placeholder="Phone number" class="form-control">
                        <span class="help-block">Your phone number won't be disclosed anywhere </span>
                    </div>
                </div>
                <div class="form-group">
                        <label for="Height" class="col-sm-3 control-label">Seat No.* </label>
                    <div class="col-sm-9">
                        <input type="number" name="number" placeholder="Please write your number" class="form-control">
                    </div>
                </div>
                 <div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">Room No.* </label>
                    <div class="col-sm-9">
                        <input type="number" name="number" placeholder="Please write your number" class="form-control">
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form>
                                <!-- /Form -->
                            </div>
                            <!-- /Panel -->
                        </div>
                        <!-- /Comment Form -->

                        

                    </div>

                </div>
            </div>
            <!-- /Column Center -->

        </section>






     

    <!-- /Main Wrapper -->
    @stop