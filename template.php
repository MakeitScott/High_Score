<?php
/*
***		Written By: Scott Pietras
*	template.php - template copy Page
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
*	
*	
*	
*	
*	
***		
*/



// includes at the top of the page

	include('session.php');
	include('_Includes/header.php');
	include('menubar.php');


// Output







//welcome and image link inside image
echo "<p>	Welcome to H&#8593;gh Score
		  <p>	<a href='Games/Dino_Run_OG/index.html'>
				<img src = 'images/highscore_logo.jpg'></a>";
				
				
//temp links to other games

echo"<br><a href='Games/Racing/CarDriving.html'>			Play car racing</a>";
echo"<br><a href='Games/Snake/index.html'>				Play Snake</a>";
echo"<br><a href='Games/Dino_Run_OG/index.html'>				Play Dino Run </a>";
echo"<br><a href='Games/DinoRun2/index.html'>		Play Dino Run 2</a>";








//include the footer
include('_Includes/footer.php'); 
	
//
?>