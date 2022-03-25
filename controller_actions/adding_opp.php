<?php
require_once("../controller/opportunity.php");

//grad form's data if it was submitted
if(isset($_POST['add'])){
    $name = $_POST['name'];
    $reward = $_POST['reward'];
    $deadline = $_POST['deadline'];
    $link = $_POST['link'];
    $info = $_POST['info'];
    
    $success= added_opportunity($name, $reward, $info, $deadline, 1, $link); //add the details
        

    //if the file was successfully submitted
    if($success){
        header("Location: ../view/investor_dashboard.php");
    }
    else{
       header("Location: ../view/investor_dashboard.php");
    }
    

}


?>