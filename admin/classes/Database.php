<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("us-cdbr-east-06.cleardb.net", "b4ba033e2687bd", "d64bd0f7", "heroku_93d4a2c015a74a0");
		return $this->con;
	}
}

?>
