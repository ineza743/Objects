<?php 
    session_start();
    if(isset($_SESSION['login_id'])){
    $conn = mysqli_connect('localhost','root', getenv('DATABASEPASSWORD') ?? "", 'Entreconnect');

        if(!$conn){
          echo "Database connection error".mysqli_connect_error();
        }

        //grab the outgoing and incoming ids of the users
        $outgoing_id = $_SESSION['login_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $message = ""; //message to display

        //query all the messages written among the two users
        $sql = "SELECT * FROM messaging LEFT JOIN investor ON investor.investor_id = messaging.sender_id
                WHERE (sender_id = {$outgoing_id} AND receiver_id = {$incoming_id})
                OR (sender_id = {$incoming_id} AND receiver_id = {$outgoing_id}) ORDER BY message_id";
        $query = mysqli_query($conn, $sql);

        //if there are some messages and the id is valid print the messages.
        if(mysqli_num_rows($query) > 0 && $incoming_id!=0){
            while($item = mysqli_fetch_assoc($query) ){
                //display the outgoing message with its style
                if($item['receiver_id'] === $outgoing_id){
                    $message .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'. $item['content'] .'</p>
                                </div>
                                </div>';
                }else{
                    //display the incoming message with its style
                    $message .= '<div class="chat incoming">
                                <div class="details">
                                    <p>'. $item['content'] .'</p>
                                </div>
                                </div>';
                }
            }
        }
        //if no messages were written  display the message below
        else{
            $message .= '<div class="text">Start conversation..</div>';
        }
  
    echo $message;
}
  
else{
     echo '<div class="text">Session expired..</div>';
}


?>