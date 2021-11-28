
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>hbms</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="{{url('/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet"  href="{{url('/css/chartist.min.css')}}" >
    <link rel="stylesheet"  href="{{url('/css/chartist-plugin-tooltip.css')}}">
    <!-- Custom Stylesheet -->
    <link  rel="stylesheet" href="{{url('/css/style.css')}}">
    <link href="https://demo.themefisher.com/quixlab/css/style.css" rel="stylesheet">


</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        
           
        
        <!-- head start -->
        @include('backend.partials.header')
        <!-- head end -->
        

            <!-- Sidebar start -->
        
      @include('backend.partials.sidebar')
        
            <!-- Sidebar end -->
        

       
            <!-- Content body start -->
        
        <div class="content-body">

            <div class="container-fluid mt-3">
               <!-- <h1>Hotel Booking Management System</h1> -->
               <!-- <hr> -->
               <br>
         
                
               @yield('content')
                
<!-- 
                <div class="row">

        </div>
      -->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{url('/js/common.min.js')}}"></script>
    <script src="{{url('/js/custom.min.js')}}" ></script>
    <script src="{{url('/js/settings.js')}}"></script>
    <script src="{{url('/js/gleek.js')}}"></script>
    <script src="{{url('/js/styleSwitcher.js')}}"></script>

    <!-- Chartjs -->
    <script src="{{url('/js/Chart.bundle.min.js')}}"></script>
    <!-- Circle progress -->
    <script src="{{url('/js/circle-progress.min.js')}}"></script>
    <!-- Datamap -->
    <script src="{{url('/js/index.js')}}"></script>
    <script src="{{url('/js/topojson.min.js')}}"></script>
    <script src="{{url('/js/datamaps.world.min.js')}}"></script>
    <!-- Morrisjs -->
    <script src="{{url('/js/raphael.min.js')}}"></script>
    <script src="{{url('/js/morris.min.js')}}"></script>
    <!-- Pignose Calender -->
    <script src="{{url('/js/moment.min.js')}}"></script>
    <script src="{{url('/js/pignose.calendar.min.js')}}"></script>
    <!-- ChartistJS -->
    <script src="{{url('/js/chartist.min.js')}}"></script>
    <script src="{{url('/js/chartist-plugin-tooltip.min.js')}}"></script>



    <script src="{{url('/js/dashboard-1.js')}}"></script>
</body>

</html>