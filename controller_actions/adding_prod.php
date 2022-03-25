<?php
require_once("../controller/product.php");

//grad form's data if it was submitted
if(isset($_POST['add'])){
    $id = $_POST['id'];
    $prodname = $_POST['prodname'];
    $catname = $_POST['catname'];
    $price = $_POST['price'];
    $info = $_POST['info'];
    
    //inserting the image
    $fileName=basename($_FILES['pict']['name']);
    $fileSize=$_FILES['pict']['size'];
    $fileError=$_FILES['pict']['error'];
    $FileDestination="../view/images/prod_images/".$fileName; //specifying the image file path
    $acceptedExt=strtolower(pathinfo($FileDestination, PATHINFO_EXTENSION));
    $Filenames=$_FILES['pict']['tmp_name'];  
 
    //ensure that the file has no errors, is not too big, and is the right extension
    if ( $acceptedExt == "gif" || $acceptedExt == "jfif" ||$acceptedExt == "jpeg" || $acceptedExt == "png" || $acceptedExt =="jpg"){
        $FileSubmitted=move_uploaded_file($Filenames,$FileDestination);
        
        if($FileSubmitted){
            $success= added_product($id, $prodname,  $catname,$price,$FileDestination,$info); //add the details
        

            //if the file was successfully submitted
            if($success){
                header("Location: ../view/Businessproduct.php");
            }
            else{
               header("Location: ../view/Businessproduct.php");
            }
            
            }
        
    }
    

}


?>