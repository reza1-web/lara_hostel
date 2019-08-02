    <!-- Sidebar  -->
    <aside id="sidebar_left" class="nano affix">

        <!-- Sidebar Left Wrapper  -->
        <div class="sidebar-left-content nano-content">

            <!-- Sidebar Header -->
            <header class="sidebar-header">

                <!-- Sidebar - Logo -->
                <div class="sidebar-widget logo-widget">
                    <div class="media">
                        <a class="logo-image" href="index.html">
                            <img src="assets/img/logo.png" alt="" class="img-responsive">
                        </a>

                        <div class="logo-slogan">
                            <div>Admin<span class="text-info">Hostel</span></div>
                        </div>
                    </div>
                </div>

            </header>
            <!-- /Sidebar Header -->

              <!-- Sidebar Menu  -->
         <ul class="nav sidebar-menu">
                <li class="sidebar-label pt30">Navigation</li>
                <li>
                    <a  href="{{url('admin')}}">
                        <span class="caret"></span>
                        <span class="sidebar-title">Dashboard</span>
                        <span class="sb-menu-icon fa fa-home"></span>
                    </a>
                    
                </li>
                <li class="sidebar-label pt25">Courses</li>
                <li>
                    <a  href="{{route('course.create')}}">
                        <span class="caret"></span>
                        <span class="sidebar-title">Add courses</span>
                        <span class="sb-menu-icon fa fa-share-square-o"></span>
                    </a>
                    <a  href="{{route('course.index')}}">
                        <span class="caret"></span>
                        <span class="sidebar-title">Manage courses</span>
                        <span class="sb-menu-icon fa fa-share-square-o"></span>
                    </a>

                     <li class="sidebar-label pt25">Rooms</li>
                <li>
                    <a  href="{{route('room.create')}}">
                        <span class="caret"></span>
                        <span class="sidebar-title">Add Rooms</span>
                        <span class="sb-menu-icon fa fa-share-square-o"></span>
                    </a>
                    <a  href="{{route('room.index')}}">
                        <span class="caret"></span>
                        <span class="sidebar-title">Manage Rooms</span>
                        <span class="sb-menu-icon fa fa-share-square-o"></span>
                    </a>
                    
                </li> 
                <li class="sidebar-label pt30"> Students Record</li>
                 <li>
                    <a  href="{{route('student.create')}}">
                        <span class="caret"></span>
                        <span class="sidebar-title">Student Registration</span>
                        <span class="sb-menu-icon fa fa-home"></span>
                    </a>
                    
                </li>
                  
                 <li>
                    <a  href="{{route('student.index')}}">
                        <span class="caret"></span>
                        <span class="sidebar-title">Manage Students</span>
                        <span class="sb-menu-icon fa fa-home"></span>
                    </a>
                    
                </li>
 

            </ul>
            <!-- /Sidebar Menu  -->
            <!-- /Sidebar Menu  -->

        </div>
        <!-- /Sidebar Left Wrapper  -->

    </aside>
    <!-- /Sidebar -->