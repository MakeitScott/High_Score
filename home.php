<?php

/*
***		Written By Scott Pietras
*	home.php - Home Page
*	
*			http://localhost:8080/webDB/Senior_Project/home.php
*	
*	
*	has a welcome popup 
*	has music + image
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
*	*	*	change popup message to change when/if a user is logged in
***		
*/



// includes at the top of the page

	include('session.php');
	include('_Includes/header.php');
	include('menubar.php');



// this is a welcome popup that shows every time the page is viewed 
/*
echo "<script >
       window.onload = function () { alert('Welcome! Play any game or log in to see your scores');
	   } 
</script>"; 
*/



// Output	


//welcome and image link inside image
echo "<p>	Welcome to H&#8593;gh Score
		  <p>	<a href='Games/Dino_Run_OG/index.html'>
				<img src = 'images/highscore_logo.jpg'style='width:50%;height:50%';></a>";
				
				
						
	
/*				//temp links to other games
echo"<br><a href='Games/Racing/CarDriving.html'>			Play car racing</a>";
echo"<br><a href='Games/Snake/index.html'>				Play Snake</a>";
echo"<br><a href='Games/Dino_Run_OG/index.html'>				Play Dino Run </a>";
echo"<br><a href='Games/DinoRun2/index.html'>		Play Dino Run 2</a>";
*/




//quote  		 
//   ( "\" escape character)
	echo"<p>\"Computers are good at following instructions, but not at reading your mind.\" –Donald Knuth";
		  
		  
	/*	  //music from images file
//			<source src='images/Stick_Figure__Heartland.mp3' type='audio/mpeg'>
//<br><br>  Stick Figure - Heartland.mp3<br>
	
		  // <audio controls autoplay>	  //autoplay on or off
echo"<br><br>  Stick Figure - Old-Sunrise.mp3<br>
		  <audio controls autoplay>
			<source src='images/wisdom/01-old-sunrise.mp3' type='audio/mpeg'>
			Your browser does not support the audio element.
		</audio>";
	*/	  




//include the footer
include('_Includes/footer.php'); 
	
//end
?>