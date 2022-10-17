<?php
//check login 
//requires login 
// Written by: 



	// if your not logged on send to login screen and exit
	if (!$login){
		header('location: login.php');
		exit;
	}
	

?>