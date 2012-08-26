<?php

class DB
{

	function __construct()
	{
	$this->link = mysql_connect("localhost", "root", "");
	## or die("Could not connect");  
   
	 mysql_select_db("endown") ;
	 ##or die("Could not select database");
	}

	function getSoftWare($id){

	  $query = "SELECT * FROM software where id=".$id;  
	  $result = mysql_query($query);
	  ## or die("Query failed");  

      $record= mysql_fetch_array($result, MYSQL_ASSOC);   
		 
	  mysql_free_result($result);    
		 
	  mysql_close($this->link);


	  return $record;
	}
}
?>