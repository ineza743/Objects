<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<?php
require('../controller/product.php');
require('../controller/cart.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <style>


.title {
    margin-bottom: 5vh
}

.card {
    margin: auto;
    max-width: 950px;
    width: 90%;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 1rem;
    border: transparent
}

@media(max-width:767px) {
    .card {
        margin: 3vh auto
    }
}

.cart {
    background-color: #fff;
    padding: 4vh 5vh;
    border-bottom-left-radius: 1rem;
    border-top-left-radius: 1rem
}

@media(max-width:767px) {
    .cart {
        padding: 4vh;
        border-bottom-left-radius: unset;
        border-top-right-radius: 1rem
    }
}

.summary {
    background-color: #ddd;
    border-top-right-radius: 1rem;
    border-bottom-right-radius: 1rem;
    padding: 4vh;
    color: rgb(65, 65, 65)
}

@media(max-width:767px) {
    .summary {
        border-top-right-radius: unset;
        border-bottom-left-radius: 1rem
    }
}

.summary .col-2 {
    padding: 0
}

.summary .col-10 {
    padding: 0
}

.row {
    margin: 0
}

.title b {
    font-size: 1.5rem
}

.main {
    margin: 0;
    padding: 2vh 0;
    width: 100%
}

.col-2,
.col {
    padding: 0 1vh
}

a {
    padding: 0 1vh
}

.close {
    margin-left: auto;
    font-size: 0.7rem
}

img {
    width: 3.5rem
}

.back-to-shop {
    margin-top: 4.5rem
}

h5 {
    margin-top: 4vh
}

hr {
    margin-top: 1.25rem
}

form {
    padding: 2vh 0
}

select {
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1.5vh 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247)
}

input {
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247)
}

input:focus::-webkit-input-placeholder {
    color: transparent
}

.btn {

    color: white;
    width: 100%;
    font-size: 0.7rem;
    margin-top: 4vh;
    padding: 1vh;
    border-radius: 0
}

.btn:focus {
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    -webkit-box-shadow: none;
    -webkit-user-select: none;
    transition: none
}

.btn:hover {
    color: white
}

a {
    color: black
}

a:hover {
    color: black;
    text-decoration: none
}

#code {
    background-repeat: no-repeat;
    background-position-x: 95%;
    background-position-y: center
}


</style>
</head>
<body>
<nav class="navbar navbar-expand-lg  " style="background: #f343a4; padding:-20%">
  <a style="color:white" class="navbar-brand" href="#">EntreConnect</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div id="navbarSupportedContent">
    <ul class=" navbar-nav mr-auto">
      <li class=" nav-item active">
        <a  style="color:white; " class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a style="color:white" class="nav-link" href="public.php">Shop</a>
      </li>
 
   
    </ul>

  </div>
</nav>
<br><br>


<div class="card">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                    

                        <h4><b>Items on Cart</b></h4>
                    </div>
                </div>
            </div>

            <form class="paystack" id="paystack">
            <?php  

                $ipadd = FetchIpAddr();
                $items = displayingCart('19');
                $Total = cartTotal('19');
                 
            foreach ($items as $product){
            ?>
            <div >
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src=<?php echo $product['picture'];?>></div>
                    <div class="col">
                        <div id="product" class="row"><?=$product['product_name'];?></div>
                        <div class="row text-muted"><?=$product['information'];?></div>
                        
                    </div>
                    <div class="col" style=" margin-bottom: -39px">
                    <input class="col" type="number"  min=1 data-qty="<?= $product['quantity_nbr'];?>" value="<?php echo $product['quantity_nbr']  ?>" 
                 >
               
                </div>
                    <div class="col">&dollar; <?=$product['price'];?><span class="close"></span></div>
                    <div><a href="#" style=" color: #E34724;" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></div>
                 
                </div>
            </div>
   
            
            <?php }?>  
            
        </div>
        <div class="col-md-4 summary">
            <div>
                <h5><b>FINAL DETAILS</b></h5>
            </div>            
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">TOTAL (GHC)</div>
                <input class="col" id="total" name="total" value= <?=$Total["total"];?>  required disabled/>

            </div>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">Enter name</div>
                <input class="col" id="name" name="B_name"   required />
            </div>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">Enter email</div>
                <input class="col" id="email" name="email"   required />
            </div>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">Enter address</div>
                <input class="col" id="address" name="address"   required />
            </div>
            <hr>
             <button type="button" onclick="pay()" class="btn btn-success">CHECKOUT</button>
            <button type="button" class="btn btn-primary" ><a style="color:white;" href="public.php">BACK TO SHOP</a></button>
        </form>
    </div>
   
</div>
</div>
<br> 
<nav class="navbar navbar-expand-lg align-items-center" style="background: #f343a4; padding:-20%; color:white; ">
&copy; Copyright <strong><span> EntreConnect</span></strong>. All Rights Reserved
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">


  </div>
</nav>


<script src="https://js.paystack.co/v1/inline.js"></script> 
<script src="js/paystack.js"></script>

</body>

</html>