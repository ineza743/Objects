<?php

require('../controller/supporter.php');

//grab form's data
if(isset($_POST['signup'])){

	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$occupation = $_POST['occupation'];
	$business = $_POST['business'];
	$details = $_POST['details'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$confirm_password = password_hash($_POST['confirm_password'], PASSWORD_DEFAULT);

	//inserting the image
    $fileName=basename($_FILES['document']['name']);
    $FileDestination="../view/images/investor_doc/".$fileName; //specifying the image file path
    $acceptedExt=strtolower(pathinfo($FileDestination, PATHINFO_EXTENSION));
    $Filenames=$_FILES['document']['tmp_name'];  
	$FileSubmitted=move_uploaded_file($Filenames,$FileDestination);
	
   if ( $FileSubmitted && $_POST['password']===$_POST['confirm_password']){
        $adding=adding_investor($first_name,$last_name,$email,$address,$phone,$occupation,$business,$FileDestination,$details,$password);
    
        if($adding===true){
            header("Location:investor_login.php");
        }
        else{
            echo "<script>alert('Could not register the user! ')</script>";
		}
	}  
	else{
		echo "<script>alert('Password and confirmed password does not match! ')</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>SIGNUP</title>
<link href="../header/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>

body {
	color: #fff;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 600px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  
</style>
</head>
<body>


<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="../index.php" ><img src="../view/images/logo2.JPG" width="90" alt="logo"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="../index.php">Back to Home</a></li>
   
        </ul>
      </nav>

    </div>
  </header><br>

<div class="signup-form">
    <form action="" enctype="multipart/form-data" method="post">
		<h2>Register</h2>
		<p class="hint-text">Create your Investor account. </p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name*" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name*" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email*" required="required">
		</div>
		<div class="form-group">
        	<input type="text" class="form-control" name="address" placeholder="address*" required="required">
		</div>
		<div class="form-group">
        	<input type="text" class="form-control" name="phone" placeholder="phone" >
		</div>
		<div class="form-group">
        	<input type="text" class="form-control" name="occupation" placeholder="occupation*" required="required">
		</div>
		<div class="form-group">
			<select class="form-control" placeholder="businesses you support" name="business" >
			<option value="Not specific">--businesses you support--</option>
			<option value="Ideation stage">Ideation stage</option>
			<option value="Growth">Growth</option>
			<option value="Maturity">Maturity</option>
			<option value="Decline">Decline</option>
			</select>
		</div>


		<div class="form-group">
        	<input type="text" class="form-control" name="details" placeholder="Any Other details" required="required">
		</div>

		<div class="form-group">
        	<input type="file" class="form-control" name="document" id="document" placeholder="Any Supporting Document" required="required">
		</div>


		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password*" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password*" required="required">
		</div>     
		   

		<div class="form-group">
            <button style="background:#e11584" type="submit" name="signup" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
        <div class="text-center">Already have an account? <a style="color:#e11584" href="investor_login.php">Login</a></div>
    </form>

</div>
<?php include ('../header/footer.php');?> 

</body>
</html>