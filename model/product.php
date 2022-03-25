<?php
/** file to create the necassary classes and functions*/

//include the database file
require('../database/connection.php');

//extend the class connection
class Product extends Connection{

	function adding_product($product_id, $product_name, $category_id,$price,$picture,$information){
		return $this->query("insert into product(product_id, product_name, category_id, price , picture, information) 
        values('$product_id', '$product_name', '$category_id','$price','$picture','$information')");
	}
    
	function deleting_product($product_id){
		return $this->query("delete from product where product_id = '$product_id'");
	}

	function updating_product($product_id, $product_name, $category_id,$price,$picture,$information){
		return $this->query("update product set product_id='$product_id', product_name='$product_name', category_id='$category_id', price='$price' , picture = '$picture', information='$information' where product_id = '$product_id'");
	}
    function fetch_products(){
		return $this->fetch("select * from product");
	}
	
	function fetch_product($product_id){
		return $this->fetchOne("select * from product where product_id='$product_id'");
    }

	function adding_category($category_id,$category_name,$category_desc){
		return $this->query("insert into category values('$category_id','$category_name','$category_desc')");
	}
	function update_category($category_id,$category_name,$category_desc){
		return $this->query("update categories set category_name='$category_name'  where category_id = '$category_id'");
	}

	function fetch_categories(){
        return $this->fetch(" select * FROM category");      
    }
	function fetch_category($category_id){
		return $this->fetchOne("select * from category where category_id='$category_id'");
	}

	function fetch_name($category_id){
		return $this->fetchOne("select category_name from category where category_id='$category_id'");
	}

	function delete_category($category_id){
		return $this->query("delete from category where category_id = '$category_id'");
	}
}

?>