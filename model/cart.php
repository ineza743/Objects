<?php
require_once("../database/connection.php");


class Cart extends Connection
{
    //cart insertion
    public function CartInsertion($buyer_id, $product_id, $ip_address, $quantity){
        return $this->query("insert into cart(buyer_id, product_id, ip_address, quantity_nbr) 
        values('$buyer_id', '$product_id', '$ip_address', '$quantity')");
    }


    //Selecting product added to cart by a buyer
    public function SelectOne($product_id, $buyer_id){
        $select = "SELECT * FROM `cart` WHERE `product_id`='$product_id' AND `buyer_id`='$buyer_id'";
        return $this->fetchOne($select);
    }


    //cart by buyer's id
    public function BuyerCart($buyer_id){
        $select = "SELECT `cart`.`product_id`, `cart`.`buyer_id`, `cart`.`quantity_nbr`, `product`.`product_name`, `product`.`price`, `product`.`picture`, `product`.`information` FROM `cart`
        JOIN `product` on (`cart`.`product_id` = `product`.`product_id`)
        WHERE `cart`.`buyer_id` = '$buyer_id'";
        return $this->fetch($select);
    }

        //get business's id
        public function businessCart(){
            $select = "SELECT `product`.`business_id` FROM `product`
            JOIN `cart` on (`cart`.`product_id` = `product`.`product_id`)";
            return $this->fetchOne($select);
        }



    //updating the cart
    public function Cartupdate($buyer_id, $product_id, $quantity_nbr){
        $update = "UPDATE `cart` SET `quantity_nbr`='$quantity_nbr' WHERE `buyer_id`='$buyer_id' AND `product_id`='$product_id'";
        return $this->query($update);
    }

      //Inserting into orders
      public function InsertOrder( $date, $reference,$amount,$quantity, $buyer_email,$business_id){
        return $this->query("INSERT INTO product_order( porder_date, reference_nbr, amount,quantity,buyer_email,business_id) 
        VALUES ('$date', '$reference', '$amount','$quantity','$buyer_email','$business_id') ");
    }

    
    //deleting cart
    public function deleteCart($buyer_id,$product_id){
        $delete = "DELETE FROM `cart` WHERE `buyer_id`='$buyer_id' AND `product_id`='$product_id'";
        return $this->query($delete);
    }

    //calculating the total amount on cart
    public function TotalCart($buyer_id){
        $total="SELECT SUM(`product`.`price`*`cart`.`quantity_nbr`) as total
        FROM `cart` JOIN `product` ON (`product`.`product_id` = `cart`.`product_id`) WHERE `cart`.`buyer_id`='$buyer_id'";
        return $this->fetchOne($total);
    }

        //calculating the quantity on cart
        public function quantityCart($buyer_id){
            $total="SELECT SUM(`quantity_nbr`) as quantity
            FROM `cart`  WHERE `buyer_id`='$buyer_id'";
            return $this->fetchOne($total);
        }

    //calculating daily sales
    public function dailysales($business_id){
        $total="SELECT SUM(amount) 
        FROM product_order WHERE business_id = $business_id AND porder_date = CURRENT_DATE()";
        return $this->fetchOne($total);
    }
}

?>