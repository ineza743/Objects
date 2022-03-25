<?php 
    session_start();
   // if(isset($_SESSION['id'])){
        $conn = mysqli_connect("localhost", "root", "", "Entreconnect");
        if(!$conn){
          echo "Database connection error".mysqli_connect_error();
        }
        $outgoing_id = $_SESSION['login_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $output = "";
        $sql = "SELECT * FROM messaging LEFT JOIN investor ON investor.investor_id = messaging.sender_id
                WHERE (sender_id = {$outgoing_id} AND receiver_id = {$incoming_id})
                OR (sender_id = {$incoming_id} AND receiver_id = {$outgoing_id}) ORDER BY message_id";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                if($row['receiver_id'] === $outgoing_id){
                    $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'. $row['content'] .'</p>
                                </div>
                                </div>';
                }else{
                    $output .= '<div class="chat incoming">
                                <div class="details">
                                    <p>'. $row['content'] .'</p>
                                </div>
                                </div>';
                }
            }
        }else{
            $output .= '<div class="text">Search a stakeholder and Start conversation..</div>';
        }
        echo $output;
   // }else{
   //     header("location: ../investor.php");
    //}

?>