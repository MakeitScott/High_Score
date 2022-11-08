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
*	this works but there is no formatting. background. colors..
*	
*	
*	
*	
*	
***		
*/



// includes at the top of the page

	include('../session.php');
	include('../Includes/header.php');
	include('../menubar.php');


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



echo "<br><br><br>";
$uri = $_SERVER['REQUEST_URI'];
echo $uri; // Outputs: URI
echo "<br><br><br>";


echo "<br><br>Outputs: URI<br>";
$uri = $_SERVER['REQUEST_URI'];
echo $uri; // Outputs: URI

 echo "<br><br>Outputs: Full URL<br>";
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
 
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
echo $url; // Outputs: Full URL

 echo "<br><br>Outputs: Query String<br>";
$query = $_SERVER['QUERY_STRING'];
echo $query; // Outputs: Query String






//include the footer
include('../Includes/footer.php'); 
	
//
?>