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
	include('Includes/header.php');
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
	


/*			//old no pitures

echo"
<table>
  <tr>	
    <td><a href='Games/Racing/CarDriving.html'>				Car Racing</a></td>
  </tr>
  <tr>
    <td><a href='snake.php'>					Snake</a></td>
  </tr>  
  <tr>
    <td><a href='Games/DinoRun2/index.html'>				Dino Run</a></td>
  </tr> 
  <tr>
    <td><a href='Games/flappybird/index.html'>				Flappy Bird!</a></td>
  </tr>  
  <tr>
    <td><a href='Games/GravityBallGame/index.html'>		Gravity Ball</a></td>
  </tr>
  
    <tr>
    <td><a href='Games/2048/index.html'>		2048</a></td>
  </tr>
    <tr>
    <td><a href='Games/Tetris/index.html'>		Tetris</a></td>
  </tr>
</table>
";

*/




/*  this is 1 column 7 rows of games

echo"
<table >	<tr><td align='center'>
  <tr>	
    <td align='center'><a href='Games/Racing/CarDriving.html'>		
			<img src = 'Games/icons/david_race.jpg' style='width:40%;height:40%';>			</a></td>
  </tr>
  <tr>
    <td align='center'><a href='snake.php'>		
			<img src = 'Games/icons/david_snake.jpg' style='width:40%;height:40%';>					</a></td>
  </tr>  
  <tr>
    <td align='center'><a href='Games/DinoRun2/index.html'>					
			<img src = 'Games/icons/david_run.jpg' style='width:40%;height:40%';>				</a></td>
  </tr> 
  <tr>
    <td align='center'><a href='Games/flappybird/index.html'>					
			<img src = 'Games/icons/david_bird.jpg' style='width:40%;height:40%';>			</a></td>
  </tr>  
  
  
  <tr>
    <td align='center'><a href='Games/GravityBallGame/index.html'>			
			<img src = 'Games/icons/david_ball.jpg' style='width:40%;height:40%';>	</a></td>
  </tr>
  <tr>
    <td align='center'><a href='Games/2048/index.html'>					2048				</a></td>
  </tr>
  <tr>
    <td align='center'><a href='Games/Tetris/index.html'>					Tetris				</a></td>
  </tr>	

</table>
";

 */
 
 
 

/* 
echo"
<table >	<tr><td align='center'>

<tr>	
    <td align='center'><a href='Games/Racing/CarDriving.html'>	<img src = 'Games/icons/david_race.jpg' 	style='width:200;height:200';>			</a></td>
			
    <td align='center'><a href='snake.php'>						<img src = 'Games/icons/david_snake.jpg' 	style='width:200;height:200';>			</a></td>
</tr>  




<tr>
    <td align='center'><a href='Games/DinoRun2/index.html'>		<img src = 'Games/icons/david_run.jpg' 		style='width:200;height:200';>			</a></td>

    <td align='center'><a href='Games/flappybird/index.html'>	<img src = 'Games/icons/david_bird.jpg' 	style='width:200;height:200';>			</a></td>
</tr>  




<tr>
	<td align='center'><a href='Games/GravityBall/index.html'>	<img src = 'Games/icons/david_ball.jpg' 	style='width:200;height:200';>			</a></td>
 
	<td align='center'><a href='Games/2048/index.html'>			<img src = 'Games/icons/david_2048.jpg' 	style='width:200;height:200';>			</a></td>
</tr>




<tr>
	<td align='center'><a href='Games/Tetris/index.html'>		<img src = 'Games/icons/david_tetris.jpg' 	style='width:200;height:200';>			</a></td>

	<td align='center'><a href='Games/Simon/index.html'>		<img src = 'Games/icons/david_simon.jpg' 	style='width:200;height:200';>			</a></td>
</tr>	



</table>";


 */
echo"
<table >	<tr><td align='center'>

<tr>	
    <td align='center'><a href='Games/Racing/CarDriving.html'>	<img src = 'Games/icons/david_race.jpg' 	style='width:200;height:200';>			</a></td>
			
    <td align='center'><a href='snake.php'>						<img src = 'Games/icons/david_snake.jpg' 	style='width:200;height:200';>			</a></td>
</tr>  




<tr>
    <td align='center'><a href='Games/DinoRun2/index.html'>		<img src = 'Games/icons/david_run.jpg' 		style='width:200;height:200';>			</a></td>

    <td align='center'><a href='Games/flappybird/index.html'>	<img src = 'Games/icons/david_bird.jpg' 	style='width:200;height:200';>			</a></td>
</tr>  




<tr>
	<td align='center'><a href='Games/GravityBall/index.html'>	<img src = 'Games/icons/david_ball.jpg' 	style='width:200;height:200';>			</a></td>
 
	<td align='center'><a href='Games/2048/index.html'>			<img src = 'Games/icons/david_2048.jpg' 	style='width:200;height:200';>			</a></td>
</tr>




<tr>
	<td align='center'><a href='Games/Tetris/index.html'>		<img src = 'Games/icons/david_tetris.jpg' 	style='width:200;height:200';>			</a></td>

	<td align='center'><a href='Games/Simon/index.html'>		<img src = 'Games/icons/david_simon.jpg' 	style='width:200;height:200';>			</a></td>
</tr>	



</table>";




	echo"<br>

			  <a href='home.php'>	

				<img src = 'images/highscore_logo.jpg' style='width:40%;height:40%';>

				</a>";
//				<img src = 'images/highscore_logo.jpg' style='float:left;width:40%;height:40%';></a>";



//include the footer
	include('Includes/footer.php');

//
?>