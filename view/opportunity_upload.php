<?php
require('../controller/opportunity.php');
?>

<link href="css/side.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
        
                <div class="navi">
                    <ul>
                    <li ><a href="./index.php"><span class="hidden-xs hidden-sm">EntreConnect</span></a></li>
                        <li  class="active"><a href="#"><i style="color:#e11584" class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="#"><i style="color:#e11584"  class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Workflow</span></a></li>
                        <li><a href="#"><i style="color:#e11584"  class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Statistics</span></a></li>
                        <li><a href="#"><i style="color:#e11584" class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Calender</span></a></li>
                        <li><a href="#"><i style="color:#e11584"  class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Users</span></a></li>
                        <li><a href="#"><i style="color:#e11584"  class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Setting</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-center">
                                <div class="navbar-header">
                                <h1 >Upload your opportunities</h1>
                                <li class="hidden-xs"><a href="opportunity_form.php" class="add-project" >Upload</a></li>
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

                <thead>
                    
                    <tr>
                        
                        <th data-priority="1">#</th>
                        <th>Name</th>
                        <th>Deadline</th>
                        <th>Reward</th>
                        <th data-priority="2">application link</th>
                        <th>details</th>

                    </tr>
                </thead>
                <tbody>
                <?php
                  $i=1;
            $Todisplay=fetched_opportunities();
                  foreach($Todisplay as $opportunity){
                      ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $opportunity['opportunity_name'] ?></td>
                        <td><?php echo $opportunity['deadline'] ?></td>
                        <td><?php echo $opportunity['reward'] ?></td>
                        <td><?php echo $opportunity['apply'] ?></td>
                        <td><?php echo $opportunity['details'] ?></td>
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
                pageLength: 8,


            });
        });
    </script>