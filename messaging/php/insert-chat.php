<?php 
    session_start();
    //if(isset($_SESSION['id'])){
      $conn = mysqli_connect('sql6.freemysqlhosting.net','sql6481550',"DwzLIGU18M", 'sql6481550');

        if(!$conn){
          echo "Database connection error".mysqli_connect_error();
        }
        $outgoing_id = $_SESSION['login_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);


        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO messaging (receiver_id, sender_id, content)
                                        VALUES ($outgoing_id, $incoming_id, '{$message}')") or die();
       }
    //}else{  '{$message}'
    //    header("location: ../view/investor.php");
   // }


    
?>