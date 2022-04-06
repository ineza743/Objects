<?php

require('../database/connection.php');


class supporter extends Connection{

	/** investor */

	//adding an investor
	function add_investor($first_name, $last_name,	$email,	$address,$phone,$occupation,$business_type,$document,$password,$details){
		return $this->query("insert into investor(first_name,last_name,email,address,phone,occupation,business_type,document,password,details) 
        values('$first_name', '$last_name',	'$email','$address','$phone','$occupation','$business_type','$document','$password','$details')");
	}

	//selecting all investors
	function select_investors(){
		return $this->fetch("select * from investor");
	}

	//selecting 1 investors
	function select_investor($email){
		return $this->fetchOne("select * from investor where email='$email'");
	}

	
	//deleting a investor
	function delete_investor($Sid){
		return $this->query("delete from investor where investor_id = '$Sid'");
	}

	//updating investor's details
	function update_investor($investor_id,$first_name, $last_name,$email,$address,$phone,$occupation,$business_type,$document,$password,$details){
		return $this->query("update investor set first_name='$first_name', last_name='$last_name', email='$email' 
        address='$address', phone='$phone', occupation='$occupation', business_type='$business_type', document='$document', password='$password', details='$details'
        where investor_id = '$investor_id'");
	}




	/**Incubator */

	//adding an incubator
	function add_incubator($first_name, $last_name,	$email,	$address,$phone,$occupation,$business_type,$document,$password,$details){
		return $this->query("insert into incubator(first_name,last_name,email,address,phone,occupation,business_type,document,password,details) 
        values('$first_name', '$last_name',	'$email','$address','$phone','$occupation','$business_type','$document','$password','$details')");
	}

	//selecting all incubator
	function select_incubators(){
		return $this->fetch("select * from incubator");
	}

	//selecting 1 incubator
	function select_incubator($email){
		return $this->fetchOne("select * from incubator where email='$email'");
	}

	//deleting a incubator
	function delete_incubator($Sid){
		return $this->query("delete from incubator where incubator_id = '$Sid'");
	}

	//updating incubator's details
	function update_incubator($incubator_id,$first_name, $last_name,$email,$address,$phone,$occupation,$business_type,$document,$password,$details){
		return $this->query("update incubator set first_name='$first_name', last_name='$last_name', email='$email' 
        address='$address', phone='$phone', occupation='$occupation', business_type='$business_type', document='$document', password='$password', details='$details'
        where incubator_id = '$incubator_id'");
	}

		//getting total investors
		function total_investors(){
			return $this->fetchOne("select count(investor_id) from investor");
		}
		
		//getting total incubators
		function total_incubators(){
			return $this->fetchOne("select count(incubator_id) from incubator");
		}

}



?>