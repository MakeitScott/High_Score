<?php
/*
***		Written By: Scott Pietras
*	gamer.php - gamer copy Page
*	
*		
*	copy of the gamer page that a you can acess only if you are logged in
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



// includes at the top of the page

	include('session.php');
	include('Includes/header.php');
	include('login/check_login.php');
	include('menubar.php');


// Output





	// Welcome  
echo	"This is the GAMER Webpage!
			<p>Welcome $user";
				
//AND if youre loged in what is your role (user / admin?)	  
if ($role != NULL) echo ", $role"; 
	
/*Session is required for the role*/





if ($role == 'Gamer') echo "<br>you are $role"; 

if ($role == 'Admin') echo "<br>you are $role"; 


echo "<br>";
$uri = $_SERVER['REQUEST_URI'];
echo $uri; // Outputs: URI




//include the footer
include('Includes/footer.php'); 
	
//
?>