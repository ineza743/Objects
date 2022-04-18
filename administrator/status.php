<?php

require('../controller/business.php');

    $status = $_POST['status'];
    $email = $_POST['email'];

        $querr= statusUpdate($status,$email);
        if ($querr===true) {
            echo json_encode(array("statusCode"=>200));
        } 
        else {
            echo json_encode(array("statusCode"=>200));
        }


?>
