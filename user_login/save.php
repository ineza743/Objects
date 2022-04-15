<?php

require('../controller/business.php');
//grab form's data
session_start();
if($_POST['type']==1){
	$first_name = $_POST['name'];
    $email = $_POST['email'];
    $last_name=$_POST['city'];
	$phone = $_POST['phone'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);



$querr= adding_business($first_name,$last_name,$email,$phone,'$occupation','$role','$address','$business','$linkedin','$instagram','$twitter','$details','$FileDestination',$password);
if ($querr===true) {
    echo json_encode(array("statusCode"=>200));
} 
else {
    echo json_encode(array("statusCode"=>201));
}



}
?>
