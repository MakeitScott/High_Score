<?php


/*
***
* Written By Scott Pietras
*
*
*
*
*
*
***
*/


// Start Session
	session_start();
	
	
//Session Variables
	if (isset($_SESSION['login'])) {
		$login = TRUE;
		$user = $_SESSION['user'];
		$role = $_SESSION['role'];
		$seshuserid = $_SESSION['rowid'];
		//$time = $_SESSION['time'];
		}
	
	else {
		$login = FALSE;
		$user = 'Guest';
		$role = NULL; 
		$seshuserid = NULL;
		//$time 	NULL;
		}
	

	
/*
****** back log ******
*
* 
*
* 
* 
* 
*
*
*
*/
	
	
	
?>