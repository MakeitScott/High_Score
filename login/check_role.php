<?php
/*
***		Written By: Scott Pietras
*	check_role.php - check role of user Page
*	
*		check role of user
*	
*	
*	
*	requires login 
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
	if ($role != 'Admin'){
		header('location: login.php');
		exit;
	}

// to check if your a student
	/*
		if ($role != 'Student'){
		header('location: login.php');
		exit;
	}
	*/
	
	

?>