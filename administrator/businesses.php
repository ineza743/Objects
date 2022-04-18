<?php
require('../controller/business.php');

$Todisplay=selecting_businesses();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Administrator </title>

    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="./css/style.css" rel="stylesheet">
    



</head>

<body>

   


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="./vendor/avatar.png" alt=""> <h4 class="brand-logo">Afsanat Ineza</h4>
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
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
            <ul class="metismenu" id="menu">
               
               <li><a href="./index.php">Dashboard</a></li>

               <li><a href="businesses.php">Users</a></li>

<hr>
               <li><a href="index.php"><i class="fa fa-sign-out" >Logout</i></a></li>


  
      
   </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div  class="content-body">
            <div  class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4 style="color:black; text-align:center">List of Businesses in the system</h4>
                        </div>
                    </div>
                  
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead style="background-color:#e11584; color:white;">
                                            <tr >
                                                <th style="color:white;">Business</th>
                                                <th style="color:white;">User name</th>
                                                <th style="color:white;">role</th>
                                                <th style="color:white;">Email</th>
                                                <th style="color:white;">address</th>
                                                <th style="color:white;">documentation</th>
                                                <th style="color:white;">linkedin</th>
                                                <th style="color:white;">Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                 
                 foreach($Todisplay as $business){
               ?>
                                            <tr style="color:rgb(153, 139, 139);">
                                            
                                                <td><?php echo $business['bussiness_name']  ?></td>  
                                                <td><?php echo $business['f_name']," ", $business['l_name']  ?></td>
                                                <td><?php echo $business['role'] ?></td>
                                                <td name="emails" id="emails"><?php echo $business['email'] ?></td>
                                             
                                                <td><?php echo $business['address'] ?></td>
                                                <td><?php echo $business['document'] ?></td>
                                                <td><?php echo $business['linkedin'] ?></td>
                                                <td>
                                                    <div class="btn-group">
                                                        
                                                    <div class="col">
                                                    <select style="color:green " type="submit" class="form-control" name="status" id="status" >
                                                    <option style="color:blue " value="pending"><?php echo $business['status'] ?></option>
                                                    <option style="color:green " value="Approved">Approved</option>
                                                    <option style="color:red " value="Reject">Reject</option>
    
                                                    </select> </div>
                                                      </div>
                                                </td>
                                               
                                            </tr>
               
                 <?php } ?>
                                         
                                            
                                            
                                            
                                        </tbody>
                              
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
            
<!-- footer -->
<lable style="background:#e11584;color:white;text-align:center" class="form-control fa fa-upload" type="text"> &copy; Copyright <strong><span>EntreConnect</span></strong>. All Rights Reserved</label><br>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
		$("#status").change(function(){	
                var status = $('#status').val();
                var emails = $('#emails').val();
	
					$.ajax({
						type: 'POST',
						url: 'status.php',
                        data: {status:status,
                                email:emails
                        },
                        
                        success: function(dataResult){
					try {
							var dataResult = JSON.parse(dataResult);
							if(dataResult.statusCode==200){
							alert("status updated");
							}
							else if(dataResult.statusCode==201){
								alert("status not fully updated");
							}
							
						} catch (err) {
							alert("An error occured");
						}
					
				}
		
					});
				
		});
		
	});
</script>

        
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
    


    <!-- Datatable -->
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


</body>

</html>