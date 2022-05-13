<?php 

class Connection{
    public $db = null;
	public $results = null;

	// connecting to the database
	function connection(){
		/* uncomment to create remote connection */
		$this->db = mysqli_connect('sql10.freemysqlhosting.net','sql10489346',"96QGIs2kD3", 'sql10489346');

		/* uncomment to create local connection */
		//);

		if(mysqli_connect_errno()){
			return false;
		}
		return true;
	}

	function query($query){
		if($this->connection() == false){
			return false; 
		}

		$this->results = mysqli_query($this->db, $query);
		if($this->results !=true){
			return false;
		}
		return true; 

	}

	// selecting
	function fetch($query){
		if($this->query($query)) {
			return mysqli_fetch_all($this->results, MYSQLI_ASSOC); 
		}
		return false;
		
	}

	// selecting single item
	function fetchOne($query){
		if($this->query($query)) {
			return mysqli_fetch_assoc($this->results); 
		}
		return false;
	}

}

?>
