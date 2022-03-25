<?php
/** file to create the necassary classes and functions*/

//include the database file
require('../database_connection/connection.php');

//extend the class connection
class Opportunities extends Connection{
	function adding_opportunity($opportunity_name, $reward, $details, $deadline, $investor_id, $apply){
		return $this->query("insert into investor_opportunity(opportunity_name, reward, details, deadline, investor_id, apply) 
        values('$opportunity_name', '$reward', '$details', '$deadline', '$investor_id', '$apply')");
	}
    
    function fetch_opportunities(){
		return $this->fetch("select * from investor_opportunity");
	}
	
	function fetch_opportunity($opportunity_id){
		return $this->fetchOne("select * from investor_opportunity where opportunity_id='$opportunity_id' order by deadline DESC");
    }

}

?>