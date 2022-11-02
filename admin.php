<?php
/*
***		Written By: Scott Pietras
*	admin.php - admin copy Page
*	
*		
*	
*	this is the copy for a page that only admin can acess
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
	include('login/check_role.php');
	include('menubar.php');






// Output







/* //welcome and image link inside image
echo "<p>	Welcome to H&#8593;gh Score
		  <p>	<a href='Games/Dino_Run_OG/index.html'>
				<img src = 'images/highscore_logo.jpg'></a>";
				

 */
 
 
// Welcome  
echo	"
This is the ADMIN Webpage!
			<p>Welcome $user
			";
				
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