<?php          
  require_once("../controller/product.php");
  $Product_categories = fetched_categories();
?>


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
  <link href="css/side.css" rel="stylesheet">

</head>


<div style="position: fixed;left: 0;" class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
        
        <div style="margin-left:10%" class="navi">
            <ul>
            <a href="../index.php" ><img src="images/logo2.JPG" width="90" alt="logo"></a>
                <li ><a href="./businessDashboard.php"><i style="color:#e11584" class="fa fa-dashboard" ></i><span >Dashboard</span></a></li>
                <li class="active" ><a href="Businessproduct.php"><i style="color:#e11584"  class="fa fa-product-hunt" aria-hidden="true"></i><span class="hidden-xs hidden-sm">products</span></a></li>
                <li><a href="../messaging/chat.php"><i style="color:#e11584"  class="fa fa-envelope" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Messages</span></a></li>

                <li ><a href="investors.php"><i style="color:#e11584"  class="fa fa-money" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Investors</span></a></li>
                <li ><a href="incubators.php"><i style="color:#e11584"  class="fa fa-money" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Incubators</span></a></li>

               <hr>
                                 <br>
               <br>
                <li><a href="../user_login/logout.php"><i style="color:#e11584"  class="fa fa-sign-out" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
                <br>
            </ul>
        </div>
    </div>
    <div style="margin-right:10%;margin-left:20%; " class=" v-align">






     
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

     <div>
    <div class="row d-flex justify-content-center">
        <div >
           <br><h1>New Products</h1>
            <div class="card">
                <h5 class="text-center mb-4">Enter Product details</h5>
                <form class="form-card" method="post" action="../controller_actions/adding_prod.php" enctype="multipart/form-data" id="productForm">


                    <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">product name<span class="text-danger"> *</span></label> <input type="text" id="prodname" name="prodname" placeholder="Enter product name"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">production year<span class="text-danger"> *</span></label> <input type="year" id="id" name="id" placeholder="Enter product year" > </div>
                    </div>

                    <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">color<span class="text-danger"> </span></label> <input type="text" id="cl" name="cl" placeholder="Enter the products color"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Size<span class="text-danger"> </span></label> <input type="number" id="sz" name="sz" placeholder="Enter product size" > </div>
                    </div>
                 

                    
                    <div class="row justify-content-between text-left">
                    
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">price<span class="text-danger"> *</span></label> <input type="number" id="price" name="price" placeholder=""> </div>
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">picture<span class="text-danger"> *</span></label> <input type="file" name="pict" id="pict" placeholder="" > </div>
            </div>

                    <div class="row justify-content-between text-left">

                    <div class="form-group col-6 flex-column d-flex"> <label class="form-control-label px-3">Information<span class="text-danger"> </span></label> <input type="text" id="info" name="info" placeholder="more information..." > </div>

                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">category_name<span class="text-danger"> *</span></label> <select name="catname" > 
                    <option class="form-control-label px-3" value="" ><label class="form-control-label px-3 ">select..</label></option>
                <?php
                foreach($Product_categories as $category){
                    echo "<option value=".$category['category_id'].">".$category['category_name']."</options>";
                }
            ?>
            </select>
                    </div>

                    </div>
          
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-12"> <button type="submit" name="add" class="btn-block btn-primary">Save</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




</div>
        
</div>
  </main>

 


</body>

</html>