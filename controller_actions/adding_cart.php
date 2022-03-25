<?php
require("../controller/cart.php");

    $prodid = $_GET['prodid'];
    $ipaddress = $_GET['ipadd'];
    $buyer_id = $_GET['bid'];
    $quantity = $_GET['quantity'];
  
    
        $onCart = SelectingOne($prodid, $buyer_id);
        if ($onCart){
            $quantity=$onCart['quantity_nbr']+1;
            updatingCart($buyer_id, $prodid, $quantity);
            
            echo "<script>
            alert('Product added to cart Successfully');
            window.location.href = '../view/public.php';
            </script>";
        }else{
            $insert = CartInserting($buyer_id, $prodid, $ipaddress, $quantity);

            if ($insert){
                echo "<script>
                window.location.href='../view/public.php';
                alert('Product Added to cart succesfully');
                </script>";
            }else{
                echo "<script>
                window.location.href='../view/public.php';
                alert('Product could not be added to cart');
                </script>";
            }
         }
          
    
   

?>