<?php

/*
***		Written By: Scott Pietras
*	games.php - game list Page
*	
*		
*	
*	
*	all games image in their folder with the same title "icon.img"
*	all games file name $game_title + "/index.html"
*	
*	
***		
*/



/*
***		Backlog ::todo
*	
*	
*	using an array of gameTitle => fileLocaton
*	for each(gameTitle key as value)
*	
*	make a table that populates all the games with a location from the database
*	 also contains an image from the folder
*	put image in each folder of game and image is $location + "/logo.img"
*	
***		
*/



// includes at the top of the page

	include('session.php');
	include('_Includes/header.php');
	include('menubar.php');







/* // Output games
	echo"<br><a href='Games/Racing/CarDriving.html'>			Play car racing</a>";
	echo"<br><a href='Games/Snake/index.html'>				Play Snake</a>";

//echo"<br><a href='Games/Dino_Run_OG/index.html'>				Play Dino Run </a>";

	echo"<br><a href='Games/DinoRun2/index.html'>		Play Dino Run</a>";
	echo"<br><a href='Games/flappybird/index.html'>		Flappy Bird!</a>";
 */



//welcome and image link to home inside image
	echo "<p>	Welcome to H&#8593;gh Score";
	
	echo"<p>";
	



echo"
<table>
  <tr>	
    <td><a href='Games/Racing/CarDriving.html'>				Car Racing</a></td>
  </tr>
  <tr>
    <td><a href='Games/Snake/index.html'>					Snake</a></td>
  </tr>  
  <tr>
    <td><a href='Games/DinoRun2/index.html'>				Dino Run</a>
  </tr> 
  <tr>
    <td><a href='Games/flappybird/index.html'>				Flappy Bird!</a>
  </tr>  
  <tr>
    <td><a href='Games/Gravity_Ball_Game/index.html'>		Gravity Ball Game</a>
  </tr>
</table>
";

	echo"<br>

			  <a href='home.php'>
					
					
				<img src = 'images/highscore_logo.jpg' style='width:40%;height:40%';></a>";
//				<img src = 'images/highscore_logo.jpg' style='float:left;width:40%;height:40%';></a>";



//include the footer
	include('_Includes/footer.php');

//
?>