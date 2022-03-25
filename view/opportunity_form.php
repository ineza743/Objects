

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <title>Business owner dashboard</title>
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

<!-- side bar -->
<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
              <i class="material-icons opacity-10">person</i>

        <span class="ms-1 font-weight-bold text-white">EntreConnect</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active " href="./businessDashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white bg-gradient-primary" href="./Businessproduct.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Product page</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/billing.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Messages</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/virtual-reality.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Potential partners</span>
          </a>
        </li>
     
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/notifications.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>
        <hr class="horizontal light mt-0 mb-2">
       <br>
        
       <li class="nav-item">
          <a class="nav-link text-white " href="./pages/sign-in.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">home</i>
            </div>
            <span class="nav-link-text ms-1">home</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/sign-in.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">logout</i>
            </div>
            <span class="nav-link-text ms-1">logout</span>
          </a>
        </li>
        
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">

    </div>
  </aside>
<!-- End side bar -->





  <!-- navbar -->
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  <nav style="padding:2%" class="navbar navbar-expand-lg navbar-light bg-light">
                
      <div class="input-group" style=" margin-left:20%">
      <div class="form-outline">
        <input type="search" id="form1" class="form-control" />
        <label class="form-label" for="form1" aria-label="Search">Search</label>
      </div>
      <button type="button" class="btn btn-primary">
        <i class="fas fa-search"></i>
      </button>
    </div>
    </nav>
    <br>
     <!--  The end of navbar -->


     
<style>
  body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-repeat: no-repeat;
    background-size: 100% 100%
}

.card {
    padding: 30px 40px;
    margin-top: 60px;
    margin-bottom: 60px;
    border: none !important;
    box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2)
}

.blue-text {
    color: #00BCD4
}

.form-control-label {
    margin-bottom: 0
}

input,
textarea,
button {
    padding: 8px 15px;
    border-radius: 5px !important;
    margin: 5px 0px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    font-size: 18px !important;
    font-weight: 300
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #00BCD4;
    outline-width: 0;
    font-weight: 400
}

.btn-block {
    text-transform: uppercase;
    font-size: 15px !important;
    font-weight: 400;
    height: 43px;
    cursor: pointer
}

.btn-block:hover {
    color: #fff !important
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}
</style>

     <div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
           
            <div class="card">
                <h5 class="text-center mb-4">Enter opportunity details</h5>
                <form class="form-card" method="post" action="../controller_actions/adding_opp.php" enctype="multipart/form-data" id="opportunityForm">


                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Opportunity name<span class="text-danger"> *</span></label> <input type="text" id="name" name="name" placeholder="Enter opportunity name" > </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">reward<span class="text-danger"> *</span></label> <input type="number" id="reward" name="reward" placeholder="Enter reward"> </div>
                    </div>

                    
                    <div class="row justify-content-between text-left">
                    
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">deadline<span class="text-danger"> *</span></label> <input type="date" id="deadline" name="deadline" placeholder=""> </div>
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">apply_link<span class="text-danger"> *</span></label> <input type="text" name="link" id="link" placeholder="Enter application link" > </div>
            </div>

                    <div class="row justify-content-between text-left">

                    <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">details<span class="text-danger"> </span></label> <input type="text" id="info" name="info" placeholder="more information..." > </div>

              

                    </div>
          
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-12"> <button type="submit" name="add" class="btn-block btn-primary">Save</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




      <!--footer -->
      <footer class="footer py-4  ">
      <div style="background-color:rgb(233, 233, 250); margin-bottom:-10%; padding:2%">
    <footer >
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item text">
                    <h3>Contacts</h3>
                    <ul>
                        <li><p>Email: Entreconnect@gmail.com</p></li>
                        <li><p>Number: 233 890 183 6542</p></li>
                        <li><p>Location: 1, university avenue</p></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Ecommerce</a></li>
                        <li><a href="#">Incubation</a></li>
                        <li><a href="#">Funding</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Vision </h3>
                    <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                </div>
 
    </footer>
</div>
        
</div>
  </main>

 


</body>

</html>