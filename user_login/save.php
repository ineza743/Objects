<?php

require('../controller/business.php');

//grab form's data
session_start();


//default avatar
$targetPath = '../view/images/businesses/avatar.png';
if($_POST['type']==1){
    $first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $Padd = $_POST['Padd'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$occupation = $_POST['occupation'];
    $role = $_POST['role'];
	$business = $_POST['business'];
	$linkedin = $_POST['linkedin'];
	$document = $_POST['document'];
    $details = $_POST['details'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $confirm_password = password_hash($_POST['confirm_password'], PASSWORD_DEFAULT);
    
    
    if (duplicate($email)) {
        echo json_encode(array("statusCode"=>201));
    }

    else{

$querr= adding_business($first_name,$last_name,$email,$phone,$occupation,$role,$address,$business,$linkedin,$document,$details,$targetPath,$password,$Padd);

if ($querr===true) {
    echo json_encode(array("statusCode"=>200));
} 
else {
    echo json_encode(array("statusCode"=>201));
}
    }

    }

    else{
        move_uploaded_file($_FILES['file']['tmp_name'], '../view/images/businesses/' . $_FILES['file']['name']);
        $targetPath = "../view/images/businesses/".$_FILES['file']['name'];
        
    }

?>
