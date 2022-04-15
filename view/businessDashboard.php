<?php

ini_set('display_errors','Off'); //supress some unneeded warnings
session_start();
$login_id = $_SESSION['login_id']; //current businesses id

require('../controller/supporter.php');
require('../controller/cart.php');
$investors=implode(total_investor()); //total number of investors
$incubators=implode(total_incubator());  //total number of incubators
$sales=implode(sales($login_id));  //total number of incubators
$dailysoldproducts = implode(dailyquantitySold($login_id));
$chart1 = weeklysalesChart($login_id);
$chart2 = saleschart($login_id);

 
$name = array();
$price = array();
foreach($chart2 as $chart) {
 $name[] = $chart['category_name'];
 $price[] = $chart['sum(product.price)'];
}
$category_name = json_encode( $name );
$amount = json_encode( $price );



$day = array();
$total = array();
foreach($chart1 as $chart) {
  $total[] = $chart['sum(order_details.Pamount)'];
  $day[] = $chart['DAYNAME(product_order.porder_date)'];
}
$days = json_encode( $day );
$Dailysales = json_encode( $total );
?>


<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link href="css/side.css" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Business dashboard
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
  
  
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
        
                <div class="navi">
                    <ul>
                    <a href="../index.php" ><img src="images/logo2.JPG" width="90" alt="logo"></a>
                        <li class="active" ><a href="./businessDashboard.php"><i style="color:#e11584" class="fa fa-dashboard" ></i><span >Dashboard</span></a></li>
                        <li><a href="Businessproduct.php"><i style="color:#e11584"  class="fa fa-product-hunt" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Products</span></a></li>
                        <li><a href="messages.php"><i style="color:#e11584"  class="fa fa-envelope" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Messages</span></a></li>

                        <li ><a href="investors.php"><i style="color:#e11584"  class="fa fa-money" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Investors</span></a></li>
                        <li><a href="incubators.php"><i style="color:#e11584" class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Incubators</span></a></li>
                       <hr>
                                         <br>
                       <br>
                        <li><a href="#"><i style="color:#e11584"  class="fa fa-sign-out" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
                        <br>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
               
                


  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <br><br>
  <span style="color:black; font-size: 40px">Business Dashboard</span>
  <hr>

  <div class="container-fluid py-4">
      <div class="row mt-3">

          <!--total sales-->
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Today's sales (GHC)</p>
                <h4 class="mb-0"><?php echo intval($sales);?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
      

            </div>
          </div>
        </div>

        <!--investor-->
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Available investors</p>
                <h4 class="mb-0"><?php echo intval($investors);?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            <div class="text-center">

              </div>
            </div>
          </div>
        </div>


        <!--incubators-->
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Available incubator</p>
                <h4 class="mb-0"><?php echo intval($incubators);?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            <div class="text-center">
              </div>
            </div>
            </div>
            </div>
     


            <!--income-->
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Today's Sold products</p>
                <h4 class="mb-0"><?php echo intval($dailysoldproducts) ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
      

            </div>
          </div>
        </div>
        

        <!-- charts -->
      <div class="row mt-5">

      <div class="col-lg-6 col-md-12 ">
          <div class="card z-index-2  ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 "> Product/sales </h6>
              <p class="text-sm ">  The above chart compares how your products by category are sold today.</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> updated chart </p>
              </div>
            </div>
          </div>
        </div>

        <!-- montly sales  -->
        <div class="col-lg-6 col-md-12">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 ">Weekly sales</h6>
              <p class="text-sm ">The above is graph of your daily sales for the past 7 days</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> updated chart </p>
              </div>
            </div>
          </div>
        </div>
      </div>

  
  
  
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © Copyright EntreConnect.  All Rights Reserved
              
              </div>
            </div>
      
          </div>
        </div>
      </footer>
    </div>
  </main>

    <!--   JS Files   -->
    <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>


  <script>
    // chart1 
    var ctx = document.getElementById("chart-bars").getContext("2d");
    new Chart(ctx, {
      type: "bar",
      data: {
        labels: <?php echo $days ?>,
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: <?php echo $Dailysales ?>,
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    //chart2
    var ctx2 = document.getElementById("chart-line").getContext("2d");
    new Chart(ctx2, {
      type: "line",
      data: {
        labels: <?php echo $category_name ?>,
        datasets: [{
          label: "daily sales",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: <?php echo $amount ?>,
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>

</body>

</html>