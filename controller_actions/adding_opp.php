<?php
require_once("../controller/opportunity.php");

//grad form's data if it was submitted
if(isset($_POST['add'])){
    $name = $_POST['name'];
    $reward = $_POST['reward'];
    $deadline = $_POST['deadline'];
    $link = $_POST['link'];
    $info = $_POST['info'];

    session_start();
    $login_id = $_SESSION['login_id'];
    
    $success= added_opportunity($name, $reward, $info, $deadline, $login_id, $link); //add the details
        

    //if the file was successfully submitted
    if($success){
        header("Location: ../view/opportunity_upload.php");
    }
    else{
       header("Location: ../view/opportunity_upload.php");
    }
    

}


?>