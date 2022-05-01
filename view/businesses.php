<?php
require('../controller/business.php');
?>

<link href="css/side.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    
    <!-- side bar -->
    <body class="g-sidenav-show  bg-gray-200">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
        <div style="position: fixed;left: 0;" class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
        
        <div style="margin-left:10%" class="navi">
            <ul>
            <a href="../index.php" ><img src="images/logo2.JPG" width="90" alt="logo"></a>
                <li ><a href="./investor_dashboard.php"><i style="color:#e11584" class="fa fa-dashboard" ></i><span >Dashboard</span></a></li>
                <li ><a href="opportunity_upload.php"><i style="color:#e11584"  class="fa fa-product-hunt" aria-hidden="true"></i><span class="hidden-xs hidden-sm">My opportunities</span></a></li>
                <li><a href="../messaging/chat2.php"><i style="color:#e11584"  class="fa fa-envelope" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Messages</span></a></li>

                <li class="active"><a href="businesses.php"><i style="color:#e11584"  class="fa fa-money" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Businesses</span></a></li>
               <hr>
                                 <br>
               <br>
                <li><a href="../user_login/logout.php"><i style="color:#e11584"  class="fa fa-sign-out" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
                <br>
            </ul>
        </div>
    </div>
            <div style="padding-left:10%;margin-left:10%" class="col-md-10 col-sm-11 display-table-cell v-align">

                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-center">
                                <div class="navbar-header">
                                <h1 >Available Businesses</h1>
                                </div>
                            </nav>
                        </div>
                     
                    </header>


                </div><br><br>
                



  



   <div class="container">

<div >
    <div class="card">

        <div class="card-body">

            <table class="table table-bordered table-hover" id="table_id">

            <thead style="background: #e11584; color:white;">
                    
                    <tr>
                    <th>N0</th>
                    <th>Name</th>
							<th>email</th>
							<th>address</th>
							<th>phone</th>
							<th>occupation</th>
							<th>type</th>
                                <th>document link</th>
                                 <th>Message</th>

                    </tr>
                </thead>
                <tbody>
                <?php
                  $i=1;
            $Todisplay=selecting_businesses();
            foreach($Todisplay as $investor){
          ?>
        <td><?php echo $i ?> </td>
        <td><?php echo $investor['f_name']," ", $investor['l_name'] ?> </td>
        <td><?php echo $investor['email'] ?></td>
        <td><?php echo $investor['address'] ?></td>
        <td><?php echo $investor['phone'] ?></td>
        <td><?php echo $investor['bussiness_name'] ?></td>
        <td><?php echo $investor['business_type'] ?></td>
        <td><?php echo $investor['document'] ?></td>
         <td><a href="../messaging/chat2.php?id=<?php echo $investor['business_id'];?>"><span class="glyphicon lyphicon glyphicon-envelope"></span></a> </td>
                    </tr>
                  <?php  $i=$i+1; } ?>

          

                </tbody>
            </table>

        </div>

    </div>
</div>
</div>
</div>


    </div>

    <!-- Modal -->
    <div id="add_project" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Add Project</h4>
                </div>
                <div class="modal-body">
                            <input type="text" placeholder="Project Title" name="name">
                            <input type="text" placeholder="Post of Post" name="mail">
                            <input type="text" placeholder="Author" name="passsword">
                            <textarea placeholder="Desicrption"></textarea>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="add-project" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div>

</body>

<script>
    $(document).ready(function() {
            $('#table_id').DataTable({

                dom: 'frtip',
                responsive: true,
                pageLength: 15,


            });
        });
    </script>



