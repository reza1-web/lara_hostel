@extends('backend.layout.default')
@section('content')
<header id="topbar" class="alt">
    <div class="topbar-left">
        <ol class="breadcrumb">
            <li class="breadcrumb-link">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-current-item">Add Course</li>
        </ol>
    </div>
</header>
<section id="content" class="table-layout animated fadeIn">
 <div class="allcp-form theme-primary tab-pane mw600"  role="tabpanel">
                            <div class="panel">
                                <div class="panel-heading">
                                    <span class="panel-title pn">Add Course</span>
                                </div>
                                <!-- /Panel Heading -->

                                <form method="post" action="{{route('course.store')}}" >
                                    <div class="panel-body pn">
                                       {{csrf_field()}} 
                                        <div class="section">
                                            <label for="email5" class="field prepend-icon">
                                                <input type="text" name="course_code" id="email5" class="gui-input"
                                                       placeholder="Course Code">
                                                <span class="field-icon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            </label>
                                        </div>
                                        <!-- /section -->

                                        <div class="section">
                                            <label for="username2" class="field prepend-icon">
                                                <input type="text" name="course_name" id="username2" class="gui-input"
                                                       placeholder="Course Title">
                                                <span class="field-icon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            </label>
                                        </div>
                                        <!-- /section -->                                      
                                        <input type="submit" class="btn btn-primary" value="Add Course">
                                    </div>
                                    <!-- /Form -->
                                    <div class="panel-footer"></div>
                                </form>
                            </div>
                            <!-- /Panel -->
                        </div>
                    </section>
@stop