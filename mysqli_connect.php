<?php
// mysqli_connect.php - Connect to MySQL and The *__high_score__* database  




//change the name of the file  which files is this located in 


	/*
	***
	*
	* 
	*	Written by:
	* 
	* 
	* 
	* 
	*		Back log:
	*	
	***
	*/



// Variables
	$mysql_host			= 'localhost';
	$mysql_userid		= 'root';
	$mysql_password		= NULL;
	
	$mysql_database		= 'high_score';
//old
//	$mysql_database		= 'bcs350';
	
	

// Connect to the MySQL and the *__*__* Database
	$mysqli = mysqli_connect($mysql_host, $mysql_userid, $mysql_password, $mysql_database);
	if (!$mysqli) echo "MySQL Connection Failure: " . mysqli_connect_error();
	
	
	
	
	


	
?>
