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

	function close(){
	  mysql_close($this->link);
	}

	function getSoftWare($id){

	  return $this->queryDb("SELECT * FROM software where id=".$id);
	}

	function batchGetSoftware($ids){
		return  $this->batchQueryDb("SELECT * FROM software where id in (".$ids.");");
	}

	function getLatestSoftwareByCategory($categoryId){
		return  $this->batchQueryDb("SELECT * FROM software where category=".$categoryId." order by id desc limit 0,10");
	}

	function getTotalSoftwareCountByCategory($categoryId){
		$ret=  $this->queryDb("SELECT count(*) as c FROM software where category=".$categoryId);
		return $ret['c'];
	}

	function getChildCategory($categoryId){
		return $this->batchQueryDb("SELECT * FROM CATEGORY WHERE parent=".$categoryId." limit 0,4");
	}

	function getShowRootList(){
		return $this->batchQueryDb("SELECT * FROM CATEGORY WHERE parent=-1 order by id limit 0,12");
	}


	function queryDb($query){

	  $result = mysql_query($query);

      $record= mysql_fetch_array($result, MYSQL_ASSOC);   
		 
	  mysql_free_result($result);    

	  return $record;

	}

	function batchQueryDb($query){

		##echo $query;

	  $result = mysql_query($query);


	  $resultList = array();

	  $i=0;
      
      while($row = mysql_fetch_array($result)){
  			$resultList[$i]=$row;
  			$i++;
 	  }
		 
	  mysql_free_result($result);    


	  return $resultList;
		 
	}


	function getCategory($id){
	  return $this->queryDb("SELECT * FROM category where id=".$id);
	}

	


}
?>