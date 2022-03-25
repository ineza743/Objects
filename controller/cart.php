<?php
require_once("../model/cart.php");

     
    // fetching the buyer's Ip Address
    function FetchIpAddr(){
        if (!empty($_SERVER['HTTP_CLIENT_IP']))   { $ipAdrees=$_SERVER['HTTP_CLIENT_IP'];}
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   { $ipAdrees=$_SERVER['HTTP_X_FORWARDED_FOR'];}
        else {$ipAdrees=$_SERVER['REMOTE_ADDR'];}
        return $ipAdrees;
    }

   //inserting in the cart
    function CartInserting($buyer_id, $product_id, $ip_address, $quantity){
        $object= new cart();
        return $object->CartInsertion($buyer_id, $product_id, $ip_address, $quantity);
    }


    //Selecting product added to cart by a buyer
    function SelectingOne($product_id, $buyer_id){
        $object= new cart();
        return $object->SelectOne($product_id, $buyer_id);
    }

    
  //cart by buyer's id
    function displayingCart($buyer_id){
        $object = new cart();
        return $object->BuyerCart($buyer_id);
    }


    //updating the cart
    function updatingCart($buyer_id, $product_id, $quantity_nbr){
        $object= new cart();
        return $object->Cartupdate($buyer_id, $product_id, $quantity_nbr);
    }


    //deleting cart
    function deletingCart($buyer_id,$product_id){
        $object= new cart();
        return $object->deleteCart($buyer_id,$product_id);
    }


    //calculating the total amount on cart
    function cartTotal($buyer_id){
        $object= new cart();
        return $object->TotalCart($buyer_id);
    }



?>