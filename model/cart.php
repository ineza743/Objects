<?php
require_once("../database/connection.php");


class Cart extends Connection
{
    //cart insertion
    public function CartInsertion($buyer_id, $product_id, $ip_address, $quantity, $amount, $business_id){
        return $this->query("INSERT into cart(buyer_id, product_id, ip_address, quantity_nbr, amount,business_id) 
        values('$buyer_id', '$product_id', '$ip_address', '$quantity', '$amount', '$business_id')");
    }


    //Selecting product added to cart by a buyer
    public function SelectOne($product_id, $buyer_id){
        $select = "SELECT * FROM `cart` WHERE `product_id`='$product_id' AND `buyer_id`='$buyer_id'";
        return $this->fetchOne($select);
    }

    //deleting product added to cart by a buyer
    public function deletingOne($product_id){
        return $this->query("delete from cart where product_id = '$product_id'");

    }


    //cart by buyer's id
    public function BuyerCart($buyer_id){
        $select = "SELECT * FROM `cart`
        JOIN `product` on (`cart`.`product_id` = `product`.`product_id`)
        WHERE `cart`.`buyer_id` = '$buyer_id'";
        return $this->fetch($select);
    }



    //updating the cart
    public function Cartupdate($buyer_id, $product_id, $quantity_nbr, $amount){
        $update = "UPDATE `cart` SET `quantity_nbr`='$quantity_nbr', `amount`='$amount'
         WHERE `buyer_id`='$buyer_id' AND `product_id`='$product_id'";
        return $this->query($update);
    }

    // get the order id entered
    public function getOrderID(){
        $order = "SELECT max(Porder_id)+1 FROM product_order";
        return $this->fetchOne($order);
    }

      //Inserting into orders
      public function InsertOrder( $date, $reference,$amount,$quantity, $buyer_email){
        return $this->query("INSERT INTO product_order( porder_date, reference_nbr, amount,quantity,buyer_email) 
        VALUES ('$date', '$reference', '$amount','$quantity','$buyer_email') ");
    }

          //Inserting into order details
          public function InsertOrderDetails($Pamount,$Pquantity,$business_id, $order_id){
            return $this->query("INSERT INTO order_details(Pamount,Pquantity,business_id,order_id) 
            VALUES ('$Pamount','$Pquantity','$business_id','$order_id') ");
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


   //calculating daily quantities
   public function dailyquantities($business_id){
    $total="SELECT SUM(Pquantity) 
    FROM order_details Join product_order on(order_details.order_id=product_order.Porder_id) WHERE order_details.business_id = $business_id AND porder_date = CURRENT_DATE()";
    return $this->fetchOne($total);
}
       

    //calculating daily sales
    public function dailysales($business_id){
        $total="SELECT SUM(Pamount) 
        FROM order_details Join product_order on(order_details.order_id=product_order.Porder_id) WHERE order_details.business_id = $business_id AND porder_date = CURRENT_DATE()";
        return $this->fetchOne($total);
    }

          //calculating the tprice on cart by item
          public function getprice($product_id){
            $price="SELECT product.price
            FROM  product WHERE 
            product_id ='$product_id'";
            return $this->fetchOne($price);
        }

        
          //calculating the total amount on cart by item
          public function getBusinessID($product_id){
            $ID="SELECT product.business_id
            FROM  product WHERE 
            product_id ='$product_id'";
            return $this->fetchOne($ID);
        }

        //calculating sales by category
        public function getexpensivePERcategory($business_id){
            $ID="SELECT category.category_name, sum(product.price)
            FROM  product JOIN category on(category.category_id=product.category_id) WHERE 
            product.business_id ='$business_id' group by category.category_name";
            return $this->fetch($ID);
        }

            //calculating weekly sales chart
            public function weeklysales($business_id){
            $chart1=" SELECT sum(order_details.Pamount), DAYNAME(product_order.porder_date)
             from product_order join order_details 
            ON(product_order.Porder_id = order_details.order_id)
            where order_details.business_id='$business_id'
             AND product_order.porder_date > now() - interval 1 week
             group by product_order.porder_date  ";
            return $this->fetch($chart1);
        }

}

?>