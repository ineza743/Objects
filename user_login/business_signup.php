

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>SIGNUP</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="../header/css/style.css" rel="stylesheet">

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
<body >


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

<div class="alert alert-success alert-dismissible" id="success" style="display:none; text-align:center">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	<div class="alert alert-danger alert-dismissible" id="error" style="display:none;text-align:center ">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	
<form  action="" enctype='multipart/form-data' method="post">
		<h2>Register</h2>
		<p class="hint-text">Create your Business account. </p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name*" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name*" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
		<div class="row">
		<div class="col"><input type="email" class="form-control" name="email" id="email" placeholder="Email*" required="required"></div>
		<div class="col"><input type="text" class="form-control" name="phone" id="phone" placeholder="phone number*" required="required" ></div>
			</div>
		</div>

		<div class="form-group">
		<div class="row">
		<div class="col"><input name="userfile" id="userfile" type="file" class="form-control"> </div>	
		<div class="col"><input type="text" class="form-control" name="Padd" id="Padd" placeholder="Your address*" required="required"> </div>		
			</div>
			</div>

		<div class="form-group">
		<div class="row">
			<div class="col"><input type="text" class="form-control" name="occupation" id="occupation" placeholder="businness name*" required="required"></div>
        	<div class="col"><input type="text" class="form-control" name="role" id="role" placeholder="Your role*" required="required">
		</div>
		</div>
		</div>

		<div class="form-group">
		<div class="row">
		<div class="col"><input type="text" class="form-control" name="address" id="address" placeholder="business address*" required="required"></div>
		<div class="col"><select class="form-control" placeholder="businesses category" name="business" id="business" >
			<option value="Not specific">--businesses type--</option>
			<option value="Ideation stage">Ideation stage</option>
			<option value="Growth">Growth</option>
			<option value="Maturity">Maturity</option>
			<option value="Decline">Decline</option>
			</select> </div>
		</div>
		</div>


		<div class="form-group">
			<div class="row">
			<div class="col"><input type="text" class="form-control" name="document" id="document" placeholder="Link to any business document*" required="required"></div>

				<div class="col"><input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="linkedin link" ></div>

			</div>        	
        </div>

		<div class="form-group">
		<div class="row">
		<div class="col"><input type="text" class="form-control text-center" name="details" id="details" placeholder="Business description..." required="required">			</div>
		 </div>
			</div>

		<div class="form-group">
		<div class="row">
		<div class="col"><input type="password" class="form-control" name="password" id="password" placeholder="Password*" required="required"></div>
		<div class="col"><input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password*" required="required"></div>
		</div>
		</div>
   
		   

		<div class="form-group">
            <button type="submit" style="background:#e11584" name="signup" id="signup" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
        <div class="text-center">Already have an account? <a style="color:#e11584" href="business_login.php">Login</a></div>
    </form>

</div>


<script type="text/javascript">
        $(document).ready(function (e) {
            $("#userfile").on('change',(function(e) {
			   var file_data = $("#userfile").prop("files")[0];
			   alert(file_data);

			   var form_data = new FormData();	
			   
			   alert(form_data);
			   form_data.append('file', file_data);
			   
			   alert(form_data);
                e.preventDefault();
                $.ajax({
                    url: "save.php",
                    type: "POST",
                    dataType: 'text',
                    data: form_data,
                    contentType: false,
                    cache: false,
                    processData:false,
               
                   });
            }));
    
 
	  
	

	$('#signup').on('click', function() {
		$("#signup").attr("disabled", "disabled");

		var first_name = $('#first_name').val();
		var last_name = $('#last_name').val();
		var email = $('#email').val();
		var Padd = $('#Padd').val();
		var address = $('#address').val();
		var phone = $('#phone').val();
		var occupation = $('#occupation').val();
		var role = $('#role').val();
		var business = $('#business').val();
		var linkedin = $('#linkedin').val();
		var document = $('#document').val();
		var details = $('#details').val();
		var password = $('#password').val();
		var confirm_password = $('#confirm_password').val();

		if(first_name!="" && last_name!="" && email!="" && Padd!="" && address!="" && phone!="" && occupation!="" && role!="" && business!="" && document!="" && details!="" && password!="" && confirm_password!="" ){
			$.ajax({
				url: "save.php",
				type: "POST",
				data: {
					type: 1,
					first_name: first_name,
					last_name: last_name,
					email: email,
					Padd: Padd,
					address: address,
					phone: phone,
					linkedin: linkedin,
					occupation: occupation,
					role: role,
					business:business,
					document: document,
					details: details,
					password: password,
					confirm_password: confirm_password						
				},
				cache: false,
				success: function(dataResult){
					alert(dataResult);
					try {
							var dataResult = JSON.parse(dataResult);
							if(dataResult.statusCode==200){
								$("#success").show();
								$('#success').html('Congratulations! Your profile is being reviewed you will receive confirmation to login shortly via email ');
                				window.scrollTo({ top: 0, behavior: 'smooth' });
								window.setTimeout(function(){
									window.location.href = "../index.php";	

								}, 9000);
							}
							else if(dataResult.statusCode==201){
								$("#error").show();
								$('#error').html('Email ID already exists !');
								window.scrollTo({ top: 0, behavior: 'smooth' });
							}
						} catch (err) {
							$("#error").show();
								$('#error').html('An error occured !');
								window.scrollTo({ top: 0, behavior: 'smooth' });
						}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});

});

</script>
<br><br>
<?php include ('../header/footer.php');?> 
</html>

