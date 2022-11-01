<?php
/*
***		Written By: Scott Pietras
*	login/check_login.php - check login Page
*	
*		
*	requires login 
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
*	
*	
*	
*	
*	
***		
*/





	// if your not logged on send to login screen and exit
	if (!$login){
		header('location: login.php');
		exit;
	}
	

?>