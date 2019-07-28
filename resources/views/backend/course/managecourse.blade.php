@extends('backend.layout.default')
@section('content')
    <section id="content_wrapper">
        
           <h1>Manage Course</h1>

          
     <table class="table table-bordered" style="padding-right: 50px;">
  <thead style="background-color: black; color: white; line-height: 50px;">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
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

@stop


