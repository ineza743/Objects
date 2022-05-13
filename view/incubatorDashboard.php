<?php

ini_set('display_errors','Off'); //supress some unneeded warnings
session_start();
$login_id = $_SESSION['login_id']; //current businesses id

require('../controller/supporter.php');
require('../controller/business.php');
require('../controller/opportunity.php');
$businesses=implode(selecting_total()); //total number of businesses
$investors=implode(total_investor());  //total number of incubators
$opportunities=implode(total_opportunity($login_id));  //total number of incubators



?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="css/side.css" rel="stylesheet">

<html>

<head>
  <meta charset="utf-8">
  <title>Incubators</title>
  <base target="_self">
  <meta name="description" content="A Bootstrap 4 admin dashboard theme that will get you started. The sidebar toggles off-canvas on smaller screens. This example also include large stat blocks, modal and cards. The top navbar is controlled by a separate hamburger toggle button."
  />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google" value="notranslate">

  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />

  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <style type="text/css">
    body,
    html {
      height: 100%;
    }
    
    body.modal-open {
      padding-right: 0 !important;
    }
    
    #sidebar {
      padding-left: 0;
    }
    
    @media screen and (max-width: 48em) {
      .row-offcanvas {
        position: relative;
        -webkit-transition: all 0.25s ease-out;
        -moz-transition: all 0.25s ease-out;
        transition: all 0.25s ease-out;
      }
      .row-offcanvas-left .sidebar-offcanvas {
        left: -33%;
      }
      .row-offcanvas-left.active {
        left: 33%;
        margin-left: -6px;
      }
      .sidebar-offcanvas {
        position: absolute;
        top: 0;
        width: 33%;
        height: 100%;
      }
    }
    
    @media screen and (max-width: 34em) {
      .row-offcanvas-left .sidebar-offcanvas {
        left: -45%;
      }
      .row-offcanvas-left.active {
        left: 45%;
        margin-left: -6px;
      }
      .sidebar-offcanvas {
        width: 45%;
      }
    }
    
    .card {
      overflow: hidden;
    }
    
    .card-block .rotate {
      z-index: 8;
      float: right;
      height: 100%;
    }
    
    .card-block .rotate i {
      color: rgba(20, 20, 20, 0.15);
      position: absolute;
      left: 0;
      left: auto;
      right: -10px;
      bottom: 0;
      display: block;
      -webkit-transform: rotate(-44deg);
      -moz-transform: rotate(-44deg);
      -o-transform: rotate(-44deg);
      -ms-transform: rotate(-44deg);
      transform: rotate(-44deg);
    }
  </style>

</head>

<body>
<div class="container-fluid display-table">
        <div class="row display-table-row">
        <div style="position: fixed; left:0" class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
        
        <div class="navi">
            <ul>
            <a href="../index.php" ><img src="images/logo2.JPG" width="90" alt="logo"></a>
                <li class="active"><a href="./investor_dashboard.php"><i style="color:#e11584" class="fa fa-dashboard" ></i><span >Dashboard</span></a></li>
                <li ><a href="opportunity_upload.php"><i style="color:#e11584"  class="fa fa-product-hunt" aria-hidden="true"></i><span class="hidden-xs hidden-sm">My opportunities</span></a></li>
                <li><a href="../messaging/chat.php"><i style="color:#e11584"  class="fa fa-envelope" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Messages</span></a></li>

                <li ><a href="businesses.php"><i style="color:#e11584"  class="fa fa-money" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Businesses</span></a></li>
               <hr>
                                 <br>
               <br>
               <li><a href="../user_login/logout.php"><i style="color:#e11584"  class="fa fa-sign-out" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
                <br>
            </ul>
        </div>
        </div>




  

      <div style="padding-left:3%;margin-left:15%" class="col-md-4 col-lg-10 main">
        <h1 class="display-2 hidden-xs-down">
            Incubators Dashboard
            </h1><br>



        <div class="row mb-3">
          <div class="col-xl-4 col-lg-6">
            <div class="card card-inverse card-info">
              <div class="card-block bg-info">
                <div class="rotate">
                  <i class="fa fa-user fa-5x"></i>
                </div>
                <h6 class="text-uppercase">Total Businesses</h6>
                <h1  class="display-1"><?php echo intval($businesses) ?></h1>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6">
            <div class="card card-inverse card-secondary">
              <div class="card-block bg-secondary">
                <div class="rotate">
                  <i class="fa fa-list fa-4x"></i>
                </div>
                <h6  class="text-uppercase">My opportunities</h6>
                <h1  class="display-1"><?php echo intval($opportunities) ?></h1>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6">
            <div style="background:#e11584" class="card card-inverse card">
              <div style="background:#e11584" class="card-block bg">
                <div class="rotate">
                  <i class="fa fa-user fa-5x"></i>
                </div>
                <h6  class="text-uppercase">Total Investors</h6>
                <h1 class="display-1"><?php echo intval($investors) ?></h1>
              </div>
            </div>
          </div>
       
          
        </div>

    

        <a id="features"></a>
        <hr>

          <!-- charts -->
      <div class="row mt-5">

<div class="col-lg-12 col-md-12 ">
    <div class="card z-index-2  ">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
        <div class="bg-gradient shadow-success border-radius-lg py-3 pe-1">
          <div class="chart">
          <canvas id="myChart" style="width:100%; height:300px"></canvas>
          </div>
        </div>
      </div>
      <div class="card-body">
        <h6 class="mb-0 "> High performing businesses </h6>
        <p class="text-sm ">  The above chart presents the most three profitable businesses for the past 7 days.</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <i class="material-icons text-sm my-auto me-1">schedule</i>
          <p class="mb-0 text-sm"> updated chart </p>
        </div>
      </div>
    </div>
  </div>

</div>

       
        <hr>
  
        <div >
        <div >
        </div>
      </div>
           
    </div>
        <lable style="background:#e11584;color:white; text-align:center" type="text"> &copy; Copyright <strong><span>EntreConnect</span></strong>. All Rights Reserved</label><br>

  
  </div>

      <!--   JS Files   -->
      <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  

  <script>
    
    new Chart("myChart", {
  type: "line",
  data: {
    labels: ["Mon", "Tues", "Wed", "Thurs", "Fri","sat", "sun"],
    datasets: [{
      label: "fruitera",
      data: [860,1140,1060,1060,1070,1110,1330],
      borderColor: "red",
      fill: false
    },{
      label: "cado company",
      data: [1600,1700,1700,1900,2000,2700,4000],
      borderColor: "green",
      fill: false
    },{
      label: "tehx",
      data: [300,700,2000,5000,6000,4000,2000],
      borderColor: "blue",
      fill: false
    }]
  },
  options: {
    legend: {display: false}
  }
});

  </script>


</body>

</html>