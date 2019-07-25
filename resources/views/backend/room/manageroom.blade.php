<!DOCTYPE html>
<html>

<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>AdminK - A Responsive Bootstrap 3 Admin Dashboard Template</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="description" content="AdminK - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('backend/assets/img/favicon.png')}}">

    <!-- Angular material -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/skin/css/angular-material.min.css')}}">
    
    <!-- Icomoon -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/fonts/icomoon/icomoon.css')}}">    
    
    <!-- AnimatedSVGIcons -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/fonts/animatedsvgicons/css/codropsicons.css')}}">


    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/js/plugins/magnific/magnific-popup.css')}}">

    <!-- c3charts -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/js/plugins/c3charts/c3.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/allcp/forms/css/forms.css')}}">

    <!-- mCustomScrollbar -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css')}}">

    <!-- CSS - theme -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/skin/default_skin/less/theme.css')}}">

</head>

<body class="dashboard-page with-customizer">


<div id="main">

    <!-- Header  -->
@includes('backend.layout.header')
    <!-- /Header -->

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
                            <div>Admin<span class="text-info">K</span></div>
                        </div>
                    </div>
                </div>

            </header>
            <!-- /Sidebar Header -->

            <!-- Sidebar Menu  -->
         <ul class="nav sidebar-menu">
                <li class="sidebar-label pt30">Navigation</li>
                <li>
                    <a class="accordion-toggle menu-open" href="{{url('admin')}}">
                        <span class="caret"></span>
                        <span class="sidebar-title">Dashboard</span>
                        <span class="sb-menu-icon fa fa-home"></span>
                    </a>
                    
                </li>
                <li class="sidebar-label pt25">Courses</li>
                <li>
                    <a class="accordion-toggle" href="{{url('admin/course')}}">
                        <span class="caret"></span>
                        <span class="sidebar-title">Add courses</span>
                        <span class="sb-menu-icon fa fa-share-square-o"></span>
                    </a>
                    <a class="accordion-toggle" href="{{url('admin/course/manage')}}">
                        <span class="caret"></span>
                        <span class="sidebar-title">Manage courses</span>
                        <span class="sb-menu-icon fa fa-share-square-o"></span>
                    </a>

                     <li class="sidebar-label pt25">Rooms</li>
                <li>
                    <a class="accordion-toggle" href="{{url('admin/room')}}">
                        <span class="caret"></span>
                        <span class="sidebar-title">Add Rooms</span>
                        <span class="sb-menu-icon fa fa-share-square-o"></span>
                    </a>
                    <a class="accordion-toggle" href="{{url('admin/room/manage')}}#">
                        <span class="caret"></span>
                        <span class="sidebar-title">Manage Rooms</span>
                        <span class="sb-menu-icon fa fa-share-square-o"></span>
                    </a>
                    
                </li> 
                <li class="sidebar-label pt30"> Students Record</li>
                 <li>
                    <a class="accordion-toggle menu-open" href="{{url('admin/registration')}}">
                        <span class="caret"></span>
                        <span class="sidebar-title">Student Registration</span>
                        <span class="sb-menu-icon fa fa-home"></span>
                    </a>
                    
                </li>
                  
                 <li>
                    <a class="accordion-toggle menu-open" href="{{url('admin/registration/manage')}}">
                        <span class="caret"></span>
                        <span class="sidebar-title">Manage Students</span>
                        <span class="sb-menu-icon fa fa-home"></span>
                    </a>
                    
                </li>
 

            </ul>
            <!-- /Sidebar Menu  -->

        </div>
        <!-- /Sidebar Left Wrapper  -->

    
    </aside>
    <!-- /Sidebar -->
    <!-- Main Wrapper -->
    <section id="content_wrapper">
        
           <h1>Manage Room</h1>

          
     <table class="table table-bordered" style="padding-right: 50px;">
  <thead style="background-color: black; color: white; line-height: 50px;">
    <tr>
      <th scope="col">SNo.#</th>
      <th scope="col">Seater</th>
      <th scope="col">Room no</th>
      <th scope="col">Fee</th>
      <th scope="col">Posting Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
     
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>jonh</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
     
    </tr>
   
  </tbody>
</table>







        

    </section>
    <!-- /Main Wrapper -->

</div>






<!-- /Body Wrap  -->

<!-- Scripts -->

<!-- jQuery -->
<script src="{{('assets/js/jquery/jquery-1.12.3.min.js')}}"></script>
<script src="{{('assets/js/jquery/jquery_ui/jquery-ui.min.js')}}"></script>

<!-- AnimatedSVGIcons -->
<script src="{{('assets/fonts/animatedsvgicons/js/snap.svg-min.js')}}"></script>
<script src="{{('assets/fonts/animatedsvgicons/js/svgicons-config.js')}}"></script>
<script src="{{('assets/fonts/animatedsvgicons/js/svgicons.js')}}"></script>
<script src="{{('assets/fonts/animatedsvgicons/js/svgicons-init.js')}}"></script>

<!-- Scroll -->
<script src="{{('assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<script src="{{('assets/js/plugins/highcharts/highcharts.js')}}"></script>

<script src="{{('backend/assets/js/plugins/magnific/jquery.magnific-popup.js')}}"></script>

<script src="{{asset('backend/assets/js/plugins/c3charts/d3.min.js')}}"></script>
<script src="{{asset('backend/assets/js/plugins/c3charts/c3.min.js')}}"></script>

<script src="{{asset('backend/assets/js/plugins/circles/circles.js')}}"></script>


<script src="{{asset('backend/assets/js/plugins/jvectormap/jquery.jvectormap.min.js')}}"></script>
<script src="{{asset('backend/assets/js/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js')}}"></script>
<script src="{{asset('backend/assets/js/plugins/jvectormap/assets/jquery-jvectormap-world-mill-en.js')}}"></script>

<script src="{{asset('backend/assets/js/utility/utility.js')}}"></script>
<script src="{{asset('backend/assets/js/demo/demo.js')}}"></script>
<script src="{{asset('backend/assets/js/main.js')}}"></script>
<script src="{{asset('backend/assets/js/demo/widgets_sidebar.js')}}"></script>

<script src="{{asset('backend/assets/js/pages/dashboard1.js')}}"></script>

<script src="{{asset('backend/assets/js/demo/widgets.js')}}"></script>

</body>

</html>


