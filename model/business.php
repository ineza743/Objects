<?php

require('../database_connection/connection.php');


class business extends Connection{

	/** business */

	//adding a business
	function add_business($f_name, $l_name,$email,$phone,$bussiness_name,$role,$address,$business_type,$linkedin,$instagram,$twitter,$details,$picture,$password){
		return $this->query("insert into business(f_name,l_name,email,phone,bussiness_name,role,address,business_type,linkedin,instagram,twitter,details,picture,password) 
        values('$f_name', '$l_name','$email','$phone','$bussiness_name','$role','$address','$business_type','$linkedin','$instagram','$twitter','$details','$picture','$password')");
	}

	//selecting all businesses
	function select_businesses(){
		return $this->fetch("select * from business");
	}

	//selecting 1 business
	function select_business($email){
		return $this->fetchOne("select * from business where email='$email'");
	}

	
	//deleting a business
	function delete_business($Sid){
		return $this->query("delete from business where business_id = '$Sid'");
	}

	//updating business's details
	function update_business($business_id,$f_name, $l_name,$email,$phone,$bussiness_name,$role,$address,$business_type,$linkedin,$instagram,$twitter,$details,$picture){
		return $this->query("update business set f_name= '$f_name',l_name ='$l_name',email ='$email' ,phone = '$phone' ,bussiness_name= '$bussiness_name',role='$role' ,address= '$address',business_type='$business_type' ,linkedin='$linkedin' ,instagram='$instagram' ,twitter='$twitter' ,details='$details' ,picture= '$picture'
        where business_id = '$business_id'");
    }
}