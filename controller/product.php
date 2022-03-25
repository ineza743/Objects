<?php

/**this file creates instances of the classes created in models */
require('../model/product.php');

//instances of products
function added_product($product_id, $product_name, $category_id,$price,$picture,$information){
    $prod = new Product();
    return $prod->adding_product($product_id, $product_name, $category_id,$price,$picture,$information);
}


function deleted_product_($product_id){
    $prod = new Product();
    return $prod->deleting_product($product_id);
}

function updated_product($product_id, $product_name, $category_id, $price,$picture,$information){
    $prod = new Product();
    return $prod->updating_product($product_id, $product_name, $category_id,$price,$picture,$information);
}

function fetched_products(){
    $prod = new Product();
    return $prod->fetch_products();
}


function fetched_product($id){
    $prod = new Product();
    return $prod->fetchOne($id);
}


//insytances for category
function added_category($category_id,$category_name, $category_desc){
    $prod = new Product();
    return $prod->adding_category($category_id,$category_name,$category_desc);
}

function deleted_category($category_id){
    $prod = new Product();
    return $prod->deleting_product($category_id);
}

function updated_category($product_id, $product_name, $category_id,$price,$picture,$information){
    $prod = new Product();
    return $prod->updating_category($product_id, $product_name, $category_id,$price,$picture,$information);
}

function fetched_categories(){
    $prod= new Product();
    return $prod->fetch_categories();     
}

function fetched_category($category_id){
    $prod = new Product();
    return $prod->fetch_category($category_id);
}


function fetched_categoryname($category_id){
    $prod = new Product();
    return $prod->fetch_name($category_id);
}





	
?>