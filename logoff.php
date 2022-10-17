

<?php
// Start Session	
	include('session.php');
	
//log off
	Session_unset();
	session_destroy();
	$userid = null;
	$user = "Guest";
	$role = null;
	$login = False;
	
	
	include('_Includes/header.php');
	include('menubar.php');
	
	
	// log off message
	echo "<p><center>Logoff sucessfull <br> Thanks for stopping by!</center>";
	
	include('_Includes/footer.php'); 
	?>
	
	
	