<?php
/** file to create the necassary classes and functions*/

//include the database file
require_once('../database/connection.php');

//extend the class connection
class Opportunities extends Connection{
	function adding_opportunity($opportunity_name, $reward, $details, $deadline, $investor_id, $apply){
		return $this->query("insert into investor_opportunity(opportunity_name, reward, details, deadline, investor_id, apply) 
        values('$opportunity_name', '$reward', '$details', '$deadline', '$investor_id', '$apply')");
	}
    
    function fetch_opportunities(){
		return $this->fetch("select * from investor_opportunity ORDER BY opportunity_id DESC");
	}
	
	function fetch_opportunity($opportunity_id){
		return $this->fetch("select * from investor_opportunity where investor_id='$opportunity_id' ORDER BY opportunity_id DESC");
	}

	function sum_opportunity($user_id){
		return $this->fetchOne("select count(opportunity_id) from investor_opportunity where investor_id ='$user_id' ");
	}
	

}

?>