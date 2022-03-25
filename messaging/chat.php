<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Messaging</title>
  <link href="../view/css/side.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>


<?php 
  $conn = mysqli_connect('sql6.freemysqlhosting.net','sql6481550',"DwzLIGU18M", 'sql6481550');
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
  ?>

<body>
</div>
<div style="margin-left:-20%" class="container-fluid display-table">
<div style="padding-left:30%;padding-right:30%;">

            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
        
                <div class="navi">
                    <ul>
                    <a href="../index.php" ><img src="../view/images/logo2.JPG" width="90" alt="logo"></a>
                        <li><a href="../view/businessDashboard.php"><i style="color:#e11584" class="fa fa-user" ></i><span >Dashboard</span></a></li>
                        <li><a href="../view/Businessproduct.php"><i style="color:#e11584"  class="fa fa-user" ></i><span class="hidden-xs hidden-sm">Products</span></a></li>
                        <li class="active"><a href="chat.php"><i style="color:#e11584"  class="fa fa-envelope" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Messages</span></a></li>

                        <li ><a href="../view/investors.php"><i style="color:#e11584"  class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Investors</span></a></li>
                        <li><a href="../view/incubators.php"><i style="color:#e11584" class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Incubators</span></a></li>
                       <hr>
                       <br>
                       <br>
                        <li><a href="#"><i style="color:#e11584"  class="bi bi-backspace-reverse" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
                        <br>
                    </ul>
                </div>
            </div>
            </div>
            </div>
 


<?php
session_start();
$login_id = $_SESSION['login_id'];
        $sql1 = "SELECT distinct(email),investor_id,last_name,first_name,document FROM messaging LEFT JOIN investor ON investor.investor_id = messaging.receiver_id
                WHERE sender_id = {$login_id} 
                ORDER BY message_id";
        $query = mysqli_query($conn, $sql1);
        
        ?>


		<div class="wrapper">
			<div>
					<div style="padding-bottom:80%; background:white;" class=" card-header">
						<div style="background:white;" class="input-group">
							<input type="text" placeholder="Search..." name="" class="form-control search">
							<div class="input-group-prepend">
								<span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
							</div>
						</div>
					<div class="card-body contacts_body">
			

            <?php
            if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){ ?> 
           <a style="text-decoration: none;color:black" href="?id=<?php echo $row['investor_id'];?>"> <li>
							<div >
								<div >

              </div>
									<span><?php echo $row['first_name'], " ",$row['last_name'] ?> </span>
                  <p style="font-size: 12px;"><?php echo $row['email'] ?> </p>
								</div>
						</li></a>
            <hr>
              <?php
            }
          } 
          ?>
					</div>
          </div>
				</div></div>


  <div class="wrapper " style="margin-right:5%">
    <section  class="chat-area">
      <header>
        <?php 
        if (isset($_GET['id'])){
          $user_id = mysqli_real_escape_string($conn, $_GET['id']);
          $sql = mysqli_query($conn, "SELECT * FROM investor WHERE investor_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }
        ?>
        <div class="details">
          <span><?php echo $row['first_name']. " " . $row['last_name'] ?></span>
        </div>
      </header>
        <?php } 

      //if there is no conversation yet, the id should start out to be 0
        else{
          $user_id = 0;
        } ?>

      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="./javascript/chat.js"></script>

</body>
</html>
