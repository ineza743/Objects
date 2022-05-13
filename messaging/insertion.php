<?php 
    session_start();
    //$conn = mysqli_connect('localhost','root', getenv('DATABASEPASSWORD') ?? "", 'Entreconnect');
    $conn = mysqli_connect('sql10.freemysqlhosting.net','sql10489346',"96QGIs2kD3", 'sql10489346');

        if(!$conn){
          echo "Database connection error".mysqli_connect_error();
        }
        
        if(isset($_SESSION['login_id'])){
        $outgoing_id = $_SESSION['login_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);


        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO messaging (receiver_id, sender_id, content, messagedate)
                                        VALUES ($outgoing_id, $incoming_id, '{$message}', CURRENT_TIMESTAMP )") or die();
       }
      }



    
?>