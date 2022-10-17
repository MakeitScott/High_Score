<?php
//check role of user

//requires login 
// Written by: 



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