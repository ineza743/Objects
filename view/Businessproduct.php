<?php
require('../controller/product.php');
ini_set('display_errors','Off'); //supress some unneeded warnings
session_start();
$login_id = $_SESSION['login_id']; //current businesses id
$Todisplay=fetched_Businessproduct($login_id);



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="css/side.css" rel="stylesheet">

  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <title>Business owner dashboard</title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

</head>


    <!-- side bar -->
    <body class="g-sidenav-show  bg-gray-200">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
        <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
        
        <div class="navi">
            <ul>
            <a href="../index.php" ><img src="images/logo2.JPG" width="90" alt="logo"></a>
                <li ><a href="./businessDashboard.php"><i style="color:#e11584" class="fa fa-dashboard" ></i><span >Dashboard</span></a></li>
                <li class="active"><a href="Businessproduct.php"><i style="color:#e11584"  class="fa fa-product-hunt" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Products</span></a></li>
                <li><a href="../messaging/chat.php"><i style="color:#e11584"  class="fa fa-envelope" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Messages</span></a></li>

                <li ><a href="investors.php"><i style="color:#e11584"  class="fa fa-money" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Investors</span></a></li>
                <li><a href="incubators.php"><i style="color:#e11584" class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Incubators</span></a></li>
               <hr>
                                 <br>
               <br>
                <li><a href="../user_login/logout.php"><i style="color:#e11584"  class="fa fa-sign-out" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
                <br>
            </ul>
        </div>
    </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">



<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<br>

     <h1 style="text-align:center">My Products</h1>
     
  
          

<div class="container mt-5 mb-5">
  
    <div class="d-flex justify-content-center row">
      
        <div style="margin-left:3%" class="col-md-40">   
    <a  style="margin-left:40%; background:white; text-align:center" class="nav-link " href="./product_form.php">
     <i class="fa fa-upload" aria-hidden="true"><span >Click here to Add products</span></i>
          </a><br>

          <?php
                 
                  foreach($Todisplay as $product){
                    $id= $product['category_id'];
                    $catname = implode(fetched_categoryname($id));
                ?>
            <div class="row p-2 bg-white border rounded">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src=<?php echo $product['picture'] ?>></div>
                <div class="col-md-6 mt-1">
                    <h5><?php echo $product['product_name'] ?></h5>
                    <div class="d-flex flex-row">
                     
                        <div style="color:#e11584" class="ratings mr-2"><i class="fa fa-window-minimize"></i><i class="fa fa-window-minimize"></i><i class="fa fa-window-minimize"></i><i class="fa fa-window-minimize"></i></div>
                    </div>
                    <div class="mt-1 mb-1 spec-1"><span><b>Category:</b> <?php echo $catname ?></span></div>
                    <div class="mt-1 mb-1 spec-1"><span>Quality product</span></div>
                    <p class="text-justify para mb-0"><?php echo $product['information'] ?><br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">GHC <?php echo $product['price'] ?></h4>
                    </div>
                    <h6 class="text-success">Delivery available</h6>
                    <div class="d-flex flex-column mt-4"><button class="btn btn-outline-primary btn-sm" type="button">Edit</button>
                    <button class="btn btn-danger btn-sm mt-2"  id="delete"  ><a href="#" data-id='<?=$product['product_id']; ?>' class="delete">Delete</a></button></div>
                </div>
            </div>
                  <?php } ?>
            
  <nav aria-label="Pages">
  <ul class="pagination justify-content-center">
  <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a style="background:#e11584;color:white" class="page-link" href="#">1</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav><br>

<!-- footer -->
<lable style="background:#e11584;color:white" class="form-control fa fa-upload" type="text"> &copy; Copyright <strong><span>EntreConnect</span></strong>. All Rights Reserved</label><br>

        </div>
        
    </div>
    
</div>
</div>

</div>
  </main>


  <script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js'></script>

      
<script type="text/javascript">
$(document).ready(function(){
$(".delete").click(function(){
var id = $(this).data('id');
alert(id);
if(confirm("Are you sure you want to delete this item?"))
{
 $.ajax({
   type: 'POST',
   url: 'delete.php',
   data: { id: id },

   success: function(){
 }
});
  $(this).parents(".show").animate({ backgroundColor: "blue" }, "slow")
  .animate({ opacity: "hide" }, "slow");
 }
 
return false;
});
});
</script>


</body>



</html>