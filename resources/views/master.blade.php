
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Project name</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="https://demo.themefisher.com/quixlab/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="https://demo.themefisher.com/quixlab/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="https://demo.themefisher.com/quixlab/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
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
               <h1>Hotel Booking Management System</h1>
               <hr>
               <br>
         
                
               @yield('content')
                


                <!-- top 4 boxs start-->

                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <h5>something</h5>
                                    <div class="card-body pb-0 d-flex justify-content-between">
                                        <div>
                                            <h4 class="mb-1">Product Sales</h4>
                                            <p>Total Earnings of the Month</p>
                                            <h3 class="m-0">$ 12,555</h3>
                                        </div>
                                        <div>
                                            <ul>
                                                <li class="d-inline-block mr-3"><a class="text-dark" href="#">Day</a></li>
                                                <li class="d-inline-block mr-3"><a class="text-dark" href="#">Week</a></li>
                                                <li class="d-inline-block"><a class="text-dark" href="#">Month</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="chart_widget_2"></canvas>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="w-100 mr-2">
                                                <h6>Pixel 2</h6>
                                                <div class="progress" style="height: 6px">
                                                    <div class="progress-bar bg-danger" style="width: 40%"></div>
                                                </div>
                                            </div>
                                            <div class="ml-2 w-100">
                                                <h6>iPhone X</h6>
                                                <div class="progress" style="height: 6px">
                                                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                

                <div class="row">

            <!-- #/ container -->
        </div>
        
            <!-- Content body end -->
        
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <!-- @include('backend.partials.footer') -->
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="https://demo.themefisher.com/quixlab/plugins/common/common.min.js"></script>
    <script src="https://demo.themefisher.com/quixlab/js/custom.min.js"></script>
    <script src="https://demo.themefisher.com/quixlab/js/gleek.js"></script>
    <script src="https://demo.themefisher.com/quixlab/js/settings.js"></script>
    <script src="https://demo.themefisher.com/quixlab/js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="https://demo.themefisher.com/quixlab/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="https://demo.themefisher.com/quixlab/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="https://demo.themefisher.com/quixlab/plugins/d3v3/index.js"></script>
    <script src="https://demo.themefisher.com/quixlab/plugins/topojson/topojson.min.js"></script>
    <script src="https://demo.themefisher.com/quixlab/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="https://demo.themefisher.com/quixlab/plugins/raphael/raphael.min.js"></script>
    <script src="https://demo.themefisher.com/quixlab/plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="https://demo.themefisher.com/quixlab/plugins/moment/moment.min.js"></script>
    <script src="https://demo.themefisher.com/quixlab/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="https://demo.themefisher.com/quixlab/plugins/chartist/js/chartist.min.js"></script>
    <script src="https://demo.themefisher.com/quixlab/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="https://demo.themefisher.com/quixlab/js/dashboard/dashboard-1.js"></script>

</body>

</html>