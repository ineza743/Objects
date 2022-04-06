<?php

require('../controller/cart.php');


session_start();
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => "https://api.paystack.co/transaction/verify/{$_GET['reference']}",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer sk_test_d7f62a38f5da904754d35d2d7a4db0fb868dc880",
    "Cache-Control: no-cache",
),
));

// get the response and store
$response = curl_exec($curl);
// if there are any errors
$err = curl_error($curl);
// close the session
curl_close($curl);

// convert the response to PHP object
$decodedResponse = json_decode($response);

// check if the object has a status property and if its equal to 'success' ie. if verification was successful
if(isset($decodedResponse->data->status) && $decodedResponse->data->status === 'success'){
    // get form values
    $email = $_GET['email'];
    $inv_no=mt_rand(1000,10000);
    $ord_date=date("Y/m/d");
    $quantity= implode(cartquantiny(19));
    $business= implode(businessCartID());
    $amount=$_GET['amount'];

    // inserting an order
    $addorder=InsertingOrder($ord_date, $inv_no,$amount,$quantity, $email,$business);
    if($addorder){
        echo "payment successfully received";
    }
    
}else{
    echo $response;
}

?>