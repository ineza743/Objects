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

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

//get the decoded data
$Responses = json_decode($response);

//if the decoded data are successfully grabed
if(isset($Responses->data->status) && $Responses->data->status === 'success'){
    //get the necassary transaction information
    $email = $_GET['email'];
    $inv_no=mt_rand(1000,10000);
    $ord_date=date("Y/m/d");
    $quantity= implode(cartquantiny(19));
    $amount=$_GET['amount']/100;
    $order_id= implode(IDorder());

    //insert the order in the database
    $addorder=InsertingOrder($ord_date, $inv_no,$amount,$quantity, $email);
    if($addorder){
        $cart=displayingCart(19);
        foreach ($cart as $item ){
           InsertingOrderDetails($item['amount'],$item['quantity_nbr'],$item['business_id'],$order_id); 
        }
        echo "payment successfully received";
    }
    
}else{
    echo $response;
}

?>