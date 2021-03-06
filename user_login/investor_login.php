<?php
require('../controller/supporter.php');
session_start(); 

if (isset($_POST['signin'])) {
	$username = $_POST['username'];
	$password =$_POST['password'];
    
	$investor = selecting_investor($username);
    
	if (empty($investor)) {
        $_SESSION['message'] = "Error! Incorrect email!"; 
       // header('location: investor_login.php');
        //echo ("<script>alert('Unknown email!'); window.location.href = 'investor_login.php';</script>");
    }

    else  {
        $_SESSION['login_id'] = $investor['investor_id'];

     
        echo ("<script>window.location.href = '../view/investor_dashboard.php';</script>");

}
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="../header/css/style.css" rel="stylesheet">

<style>
.login-form {
    width: 400px;
    margin: 20px auto;
}
.login-form form {        
    margin-bottom: 15px;
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .login-btn {
    border-radius: 2px;
}
.input-group-prepend .fa {
    font-size: 18px;
}
.login-btn {
    font-size: 15px;
    font-weight: bold;
  	min-height: 40px;
}

.msg {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: white; 
    background: red; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}
  
</style>

</head>
<body class="body" >
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



<div class="login-form">
<?php if (isset($_SESSION['message'])): ?>
        <div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
    <form style="box-shadow: 4px 4px 4px 4px rgba( 0.6,  0.6,  0.6, 0.6);" action="" method="post">
        <h2 class="text-center">Sign in</h2>   
        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input type="text" class="form-control" name="username" placeholder="Username" required="required">				
            </div>
        </div>
		<div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-lock"></i>
                    </span>                    
                </div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">				
            </div>
        </div>        
        <div class="form-group">
            <button type="submit" name="signin"  style="background-color:#e11584" class="btn btn-success login-btn btn-block">Sign in</button>
        </div>
        <div style="text-align:right" class="clearfix">
            <a style="color:#e11584" href="#" >Forgot Password? </a>
        </div><br><br>

        <div style="text-align:right">
        <p >Don't have an account? <a href="investor_signup.php" style="color:#e11584">Sign up </a></p>
        </div>

    </form>
    
</div>

</body><br><br><br><br>
<?php include ('../header/footer.php');?> 
</html>