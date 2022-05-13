<?php

require('../controller/product.php');

$id = $_GET['id'];
$delete = deleted_product($id);

if ($delete) {
  echo ("<script>alert('Product Successfully deleted!'); window.location.href = 'cart.php';</script>");}
  

else {
  echo ("<script>alert('Product not deleted!'); window.location.href = 'cart.php';</script>");}

?>