<?php
session_start();
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  
<!------ Include the above in your HEAD tag ---------->
<title>Messaging</title>

<link rel="stylesheet" href="style.css">
<link href="../view/css/side.css" rel="stylesheet">


<html>
<head>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">

<head>
<body>

<?php 
  //$conn = mysqli_connect('sql6.freemysqlhosting.net','sql6481550',"DwzLIGU18M", 'sql6481550');
  $conn = mysqli_connect('localhost','root', getenv('DATABASEPASSWORD') ?? "", 'Entreconnect');
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
  ?>
   
   
<div style="margin-left:-18.5%" class="container-fluid display-table">
<div style="padding-left:30%;padding-right:40%;">

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
                       <li><a href="../user_login/logout.php"><i style="color:#e11584"  class="fa fa-sign-out" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
                        <br>
                    </ul>
                </div>
            </div>
            </div>
            </div>
 


            <?php
             if(isset($_SESSION['login_id'])){
                $login_id = $_SESSION['login_id'];
        $sql1 = "SELECT distinct(email),investor_id,last_name,first_name,document,messagedate, Max(content) FROM messaging LEFT JOIN investor ON investor.investor_id = messaging.receiver_id
                WHERE sender_id = {$login_id} 
                GROUP BY investor_id";
        $query = mysqli_query($conn, $sql1);
        
        ?>

<div  class="container">
<div style="margin-left:-18.5%; margin-top:3.5%; margin-right:10.5%" class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Chats</h4>
            </div>
            <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" class="search-bar"  placeholder="Search" >
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> </div>
            </div>
          </div>
          <div class="inbox_chat">
          <?php
            if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){ ?> 
            <div class="chat_list ">
        
              <div class="chat_people">
              <a style="text-decoration: none;color:black" href="?id=<?php echo $row['investor_id'];?>">
                <div class="chat_img"> <img src=<?php echo $row['document'];?> alt="sunil"> </div>
                <div class="chat_ib">
                  <h5><?php echo $row['first_name'], " ",$row['last_name'] ?> <span class="chat_date"><?php echo $row['messagedate'];?></span></h5>
                  <p><?php echo $row['email'];?></p>
                </div> </a>

              </div>
         
            </div>
            <?php } } }?>
            
          </div>
        </div>
        <div class="mesgs" style="margin-right:-105%">
    <section style="margin-top:-7%" class="chat-area">
      <header>
        <?php 
        if (isset($_GET['id'])){
          $user_id = mysqli_real_escape_string($conn, $_GET['id']);
          $sql = mysqli_query($conn, "SELECT * FROM investor WHERE investor_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }
        ?>
        <div  class="details">
          <span style="color: grey; font-size: 25px;">Chatting with <?php echo $row['first_name']. " " . $row['last_name'] ?>...</span>
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

  <script src="messaging.js"></script>
    </div></div>
    </body>
    </html>