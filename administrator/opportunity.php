<?php
require('../controller/supporter.php');
require('../controller/opportunity.php');

$oppo = fetched_opportunities();
if(isset($_GET['email'])){
    $email = $_GET['email'];
    $Todisplay=selecting_investor($email);
   
}
if(isset($_GET['email2'])){
    $email = $_GET['email2'];
    $Todisplay=selecting_incubator($email);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>User details </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="./images/logo.png" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
       
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div  >
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4 style="color:#e11584">User's details!</h4>
                        </div>
                    </div>
    
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile">
                            <div class="profile-head">
                                <div class="photo-content">
                                   
                                    <div class="profile-photo">
                                        <img src=<?php echo $Todisplay['document'] ?> class="img-fluid rounded-circle" alt="">
                                    </div>
                                </div>
                                <div class="profile-info">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-8">
                                            <div class="row">
                                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                    <div class="profile-name">
                                                        <h4 style="color:#e11584"><?php echo $Todisplay['first_name']," ", $Todisplay['last_name'] ?></h4>
                                                        <p>User's Name</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                    <div class="profile-email">
                                                        <h4 class="text-muted"><?php echo $Todisplay['email'] ?></h4>
                                                        <p>Email</p>
                                                    </div>
                                                </div>
                                                 <div  class=" prf-col">
                                                    <div style="padding-left:90%" class="profile-call">
                                                        <h4  class="text-muted">+<?php echo $Todisplay['phone'] ?></h4>
                                                        <p>Phone.</p>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-statistics">
                                    <div class="text-center mt-4 border-bottom-1 pb-3">
                              
                                        <div   class="mt-4"> <a href="javascript:void()"  class="btn btn-outline-primary pl-5 pr-5 mb-4">Send
                                                Message</a>
                                        </div>
                                    </div>
                                </div>

                                
                                <div  class="profile-news mt-4 pb-3">
                                    <div class="media pt-3 pb-3">
                                        <div style="text-align:center" class="media-body">
                                            <h5 class="m-b-5">Occupation Name</h5>
                                            <p><?php echo $Todisplay['occupation'] ?></p>
                                        </div>
                                    </div>

                                    <div class="media pt-3 pb-3">
                                        <div style="text-align:center" class="media-body">
                                            <h5 class="m-b-5">Address</h5>
                                            <p><?php echo $Todisplay['address'] ?></p>
                                        </div>
                                    </div>

                                    <div class="media pt-3 pb-3">
                                        <div style="text-align:center" class="media-body">
                                            <h5 class="m-b-5">Type of Business They support</h5>
                                            <p><?php echo $Todisplay['business_type'] ?></p>
                                        </div>
                                    </div>
                               
                         
                                </div>

                                <div style="text-align:center" class="profile-blog pt-3 border-bottom-1 pb-1">
                                    <h4>More details</h4>
                                    <p><?php echo $Todisplay['details'] ?>.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link active show">Opportunities</a>
                                            </li>
                                          
                                        </ul>
                                        <div class="tab-content">
                                            <div id="my-posts" class="tab-pane fade active show">
                                                <div class="my-post-content pt-3">
                                                 <?php  foreach($oppo as $investor){ ?>
                                                    <div style="color:rgb(109, 77, 100);" class="profile-uoloaded-post border-bottom-1 pb-5">
                                                        <img src="images/profile/8.jpg" alt="" class="img-fluid">
                                                        <a class="post-title" href="javascript:void()">
                                                            <h4><?php echo $investor['opportunity_name'] ?></h4>
                                                        </a>
                                                        <p>The deadline for this opportunity is: <b><?php echo $investor['deadline'] ?> </b>.<br> <?php echo $investor['details'] ?>.<br>The reward for participating is:<b><?php echo $investor['reward'] ?> GHC</b>
                                                    <br> </p>
                                                        <a href="<?php echo $investor['apply'] ?>"><button style="background:#e11584; color:white" class="btn mr-3"><span class="mr-3"><i
                                                                    class="fa fa-heart"></i></span>Apply</button></a>
                                                                    
  
                                                    </div>
                                                 <?php } ?>

                                                  
                                                    <div class="text-center mb-2"><a href="javascript:void()" style="background:#e11584; color:white" class="btn">Load More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p> © <a href="#" target="_blank">EntreConnect</a> 2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>
    

</body>

</html>