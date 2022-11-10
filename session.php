<?php
/*
***		Written By: Scott Pietras
*	session.php - start session Page
*	
*		
*	
*	
*	
*	
*	
*	
***		
*/


/*
***		Backlog ::todo
*	
*	
*	
*	
*	need to add session variables into login page to set the session variables like email to make sure theyre unique
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
	
	
	
?>