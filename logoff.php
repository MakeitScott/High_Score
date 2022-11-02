<?php
/*
***		Written By: Scott Pietras
*	logoff.php - logoff Page
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
*	move to login folder 
*	change includes to match
*	
*	string replace key in menubar so that file location is not shown
*	
*	
*	
***		
*/


// Start Session	
	include('session.php');
	
//log off
	Session_unset();
	session_destroy();
	$userid = null;
	$user = "Guest";
	$role = null;
	$login = False;
	
	
	include('Includes/header.php');
	include('menubar.php');
	
	
	// log off message
	echo "<p><center>Logoff sucessfull <br> Thanks for stopping by!</center>";
	
	include('Includes/footer.php'); 
	?>
	
	
	