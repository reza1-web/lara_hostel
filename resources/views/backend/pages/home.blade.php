@extends('backend.layout.default')
@section('content')   
<!-- Topbar -->
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

            <!-- Column Center -->
            <div class="chute chute-center">

                <div class="chute-scroller">

                    <h4> Welcome to Admin IDB Hostel </h4>
                    <hr class="alt short">
                    <img style="width:100%;" src="{{URL::to('backend/assets/img/dsb.jpg')}}" alt="">
                    <!-- Scroll DEMO -->
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                </div>

            </div>
            <!-- /Column Center -->

        </section>
@stop