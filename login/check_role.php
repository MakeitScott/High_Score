<?php
/*
***		Written By: Scott Pietras
*	login/check_role.php - check role of user Page
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
*	make sure all links changed
*	 /login/login.php
*	first slash before means home directory
***		
*/



	// if your not logged in and role == admin send to login screen and exit
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