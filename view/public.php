<?php
require('../controller/product.php');
require('../controller/cart.php');
$Todisplay=fetched_products(); //fetch all products from the database

?>

<!doctype html>
<html class="no-js" lang="zxx">
    
<head>
        <meta charset="utf-8">
        <title>E-commerce page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Modernizr js -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        
    </head>

<style>
    #topbar {
  background: #e11584;
  height: 40px;
  font-size: 14px;
  transition: all 0.5s;
  color: #fff;
  padding: 0;
}
#topbar .contact-info i {
  font-style: normal;
  color: #fff;
}
#topbar .contact-info i a, #topbar .contact-info i span {
  padding-left: 5px;
  color: #fff;
}
#topbar .contact-info i a {
  line-height: 0;
  transition: 0.3s;
  transition: 0.3s;
}
#topbar .contact-info i a:hover {
  color: #fff;
  text-decoration: underline;
}
#topbar .social-links a {
  color: rgba(255, 255, 255, 0.7);
  line-height: 0;
  transition: 0.3s;
  margin-left: 20px;
}
#topbar .social-links a:hover {
  color: white;
}
    .form-inputs {
    position: relative
}

.form-inputs .form-control {
    height: 45px
}

.form-inputs .form-control:focus {
    box-shadow: none;
    border: 1px solid #000
}

.form-inputs i {
    position: absolute;
    right: 10px;
    top: 15px
}

.shop-bag {
    background-color: #000;
    color: #fff;
    height: 50px;
    width: 50px;
    font-size: 25px;
    display: flex;
    border-radius: 50%;
    align-items: center;
    justify-content: center
}

.qty {
    font-size: 12px
}
    </style>
    

    <body>
    
    <header class="section-header">
 
    <section class="header-main border-bottom bg-white">
        <div class="container-fluid">
            <div class="row p-2 pt-3 pb-3 d-flex align-items-center">
                <div class="col-md-2"><a href="../index.php"> <img class="d-none d-md-flex" src="./images/logo2.JPG" width="100"></a></div>
                <div class="col-md-8">
                    <div class="d-flex form-inputs"> <input class="form-control" type="text" placeholder="Search any product..."> <i class="bx bx-search"></i> </div>
                </div>
                <div class="col-md-2">
                    <div class="d-flex d-none d-md-flex flex-row align-items-center"> <span class="shop-bag"><a href="../view/cart.php"><i class='bx bxs-shopping-bag'></i></a></span>
                </div>
            </div>
        </div>
    </section>
    <nav class="navbar navbar-expand-lg navbar-light" style="background: #f343a4; color:white" >
        <div class="container-fluid"> <a class="navbar-brand d-md-none d-md-flex" href="#">Categories</a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav " >
                    <li class="nav-item"> <a style=" color: white" class="nav-link active" aria-current="page" href="#">Clothing</a> </li>
                    <li class="nav-item"> <a style=" color: white" class="nav-link" href="#">Electronics</a> </li>
                    <li class="nav-item"> <a style=" color: white" class="nav-link" href="#">Furnitures</a> </li>
                    <li class="nav-item dropdown"> <a style=" color: white" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Food </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">beverages</a></li>
                            <li><a class="dropdown-item" href="#">snacks</a></li>
                            <li><a class="dropdown-item" href="#">Fruits</a></li>
                            <li><a class="dropdown-item" href="#">breakfast</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>



              
            <!-- Begin Product Area -->
            <div class="product-area pt-60 pb-50">
                <div class="container">
                    
            <!-- Li's Static Banner Area End Here -->
            <section class="product-area li-laptop-product pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span> <?php echo fetched_category(2)['category_name'];?></span>
                                </h2>
                            </div>
              
                            <div class="row">
              
                                <div class="product-active owl-carousel">
                                <?php      
                            $ipadd=FetchIpAddr();
                            $quantity=1;
                            $buyer_id=19;


                foreach($Todisplay as $product){
                    $prodid=$product['product_id'];

                    ?>
                                    <div class="col-lg-12">

                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src=<?php echo $product['picture'] ?> alt="Li's Product Image" width="20" height="120px">
                                                </a>
                                              
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="#"><?php echo $product['information'] ?></a>
                                                        </h5>
                                                        
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html"><?php echo $product['product_name'] ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$<?php echo $product['price'] ?></span>
                                                    </div>
                                                </div>
                                               
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="<?php echo '../controller_actions/adding_cart.php?prodid='.$prodid.'&ipadd='.$ipadd.'&bid='.$buyer_id.'&quantity='.$quantity ?>">Add to cart</a></li>
    

                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                    
                                                </div>
                                                
                                            </div>
                                          
                                        </div>
                                        <!-- single-product-wrap end -->
                                       
                                        
                </div>
                <?php } ?>      

</div>

              
                    </div>
                </div>
       


            <!-- Begin Product Area -->
            <div class="product-area pt-60 pb-50">
                <div class="container">
                    
            <!-- Li's Static Banner Area End Here -->
            <section class="product-area li-laptop-product pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Clothing</span>
                                </h2>
                            </div>
              
                            <div class="row">
              
                                <div class="product-active owl-carousel">
                                <?php      
                            $ipadd=FetchIpAddr();
                            $quantity=1;
                            $buyer_id=19;


                foreach($Todisplay as $product){
                    $prodid=$product['product_id'];

                    ?>
                                    <div class="col-lg-12">

                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src=<?php echo $product['picture'] ?> alt="Li's Product Image" width="20" height="120px">
                                                </a>
                                              
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="#"><?php echo $product['information'] ?></a>
                                                        </h5>
                                                        
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html"><?php echo $product['product_name'] ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$<?php echo $product['price'] ?></span>
                                                    </div>
                                                </div>
                                               
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="<?php echo '../controller_actions/adding_cart.php?prodid='.$prodid.'&ipadd='.$ipadd.'&bid='.$buyer_id.'&quantity='.$quantity ?>">Add to cart</a></li>
    

                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                    
                                                </div>
                                                
                                            </div>
                                          
                                        </div>
                                        <!-- single-product-wrap end -->
                                       
                                        
                </div>
                <?php } ?>      

</div>

              
                    </div>
                </div>


                

            <!-- Begin Product Area -->
            <div class="product-area pt-60 pb-50">
                <div class="container">
                    
            <!-- Li's Static Banner Area End Here -->
            <section class="product-area li-laptop-product pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Clothing</span>
                                </h2>
                            </div>
              
                            <div class="row">
              
                                <div class="product-active owl-carousel">
                                <?php      
                            $ipadd=FetchIpAddr();
                            $quantity=1;
                            $buyer_id=19;


                foreach($Todisplay as $product){
                    $prodid=$product['product_id'];

                    ?>
                                    <div class="col-lg-12">

                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src=<?php echo $product['picture'] ?> alt="Li's Product Image" width="20" height="120px">
                                                </a>
                                              
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="#"><?php echo $product['information'] ?></a>
                                                        </h5>
                                                        
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html"><?php echo $product['product_name'] ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$<?php echo $product['price'] ?></span>
                                                    </div>
                                                </div>
                                               
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="<?php echo '../controller_actions/adding_cart.php?prodid='.$prodid.'&ipadd='.$ipadd.'&bid='.$buyer_id.'&quantity='.$quantity ?>">Add to cart</a></li>
    

                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                    
                                                </div>
                                                
                                            </div>
                                          
                                        </div>
                                        <!-- single-product-wrap end -->
                                       
                                        
                </div>
                <?php } ?>      

</div>

              
                    </div>
                </div>
                
            </section>
          
            
    <!-- ======= footer bar ======= -->
    <section id="topbar" style="margin-bottom:-20%" class="d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div  class="contact-info d-flex align-items-center">
        &copy; Copyright <strong><span> EntreConnect</span></strong>. All Rights Reserved
      </div>

      </div>
      </section>


        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="js/scrollUp.min.js"></script>
        <!-- Main/Activator js -->
        <script src="js/main.js"></script>

        <!-- chatbot-->
        <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="aa60ecf8-d5cb-4d46-9679-24f712dff17e";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
    </body>

<!-- index30:23-->
</html>