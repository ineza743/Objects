<?php
require_once("../model/cart.php");

     
    // fetching the buyer's Ip Address
    function FetchIpAddr(){
        if (!empty($_SERVER['HTTP_CLIENT_IP']))   { $ipAdrees=$_SERVER['HTTP_CLIENT_IP'];}
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   { $ipAdrees=$_SERVER['HTTP_X_FORWARDED_FOR'];}
        else {$ipAdrees=$_SERVER['REMOTE_ADDR'];}
        return $ipAdrees;
    }

    //getting the order id
    function IDorder(){
        $object= new cart();
        return $object->getOrderID();
    }
    //getting the order id
    function IDbusiness($product_id){
        $object= new cart();
        return $object->getBusinessID($product_id);
    }

   //inserting in the cart
    function CartInserting($buyer_id, $product_id, $ip_address, $quantity, $amount, $business_id){
        $object= new cart();
        return $object->CartInsertion($buyer_id, $product_id, $ip_address, $quantity,$amount, $business_id);
    }


    //Selecting product added to cart by a buyer
    function SelectingOne($product_id, $buyer_id){
        $object= new cart();
        return $object->SelectOne($product_id, $buyer_id);
    }

    
    //Selecting product added to cart by a buyer
    function Deleting($product_id){
        $object= new cart();
        return $object->deletingOne($product_id);
    }

    
  //cart by buyer's id
    function displayingCart($buyer_id){
        $object = new cart();
        return $object->BuyerCart($buyer_id);
    }


    //updating the cart
    function updatingCart($buyer_id, $product_id, $quantity_nbr,$amount){
        $object= new cart();
        return $object->Cartupdate($buyer_id, $product_id, $quantity_nbr,$amount);
    }


    //deleting cart
    function deletingCart($buyer_id,$product_id){
        $object= new cart();
        return $object->deleteCart($buyer_id,$product_id);
    }

       //inserting orders
       function InsertingOrder($date, $reference,$amount,$quantity, $buyer_email){
        $object=new cart();
        return $object->InsertOrder( $date, $reference,$amount,$quantity, $buyer_email);}

        //inserting orders details
       function InsertingOrderDetails($Pamount,$Pquantity,$business_id, $order_id){
        $object=new cart();
        return $object->InsertOrderDetails($Pamount,$Pquantity,$business_id, $order_id);}
        

    //calculating the total amount on cart
    function cartTotal($buyer_id){
        $object= new cart();
        return $object->TotalCart($buyer_id);
    }

      //calculating the quantity on cart
      function cartquantiny($buyer_id){
        $object= new cart();
        return $object->quantityCart($buyer_id);
    }
      //calculating the quantity on cart
      function individualAmount($product_id){
        $object= new cart();
        return $object->getprice($product_id);
    }

    
      //business daily sold quantity
      function dailyquantitySold($business_id){
        $object= new cart();
        return $object->dailyquantities($business_id);
    }


          //daily sales
          function sales($business_id){
            $object= new cart();
            return $object->dailysales($business_id);
        }

        function saleschart($business_id){
            $object= new cart();
            return $object->getexpensivePERcategory($business_id);
        }

        function weeklysalesChart($business_id){
            $object= new cart();
            return $object->weeklysales($business_id);
        }

 



?>