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
***		NEED TO ADD PADDING TO TOP OF TABLES******
*/


//echo"<br><table padding:'500pt'>
//add padding to a class and  add this to both tables on this page





// includes at the top of the page

	include('session.php');
	include('Includes/header.php');
	include('menubar.php');





//welcome and image link to home inside image

//	echo "<p>	Welcome to H&#8593;gh Score";
	
	echo"<p>";
	


echo"<table>
<tr>	
    
	<td><a href='flappybird.php' >	<img src = 'Games/icons/david_bird.jpg'  alt='Play flappy bird' style='width:200;height:200;border-radius: 4px;'>		</a></td>		
	
    <td> <a href='snake.php'>			<img src = 'Games/icons/david_snake.jpg' 	style='width:200;height:200;border-radius: 4px;'>		</a></td>
	
	<td ><a href='2048.php'>			<img src = 'Games/icons/david_2048.jpg' 	style='width:200;height:200;border-radius: 4px;'>			</a></td>
	
</tr>


<tr>

	<td ><a href='Racing.php'>	<img src = 'Games/icons/david_race.jpg' 	style='width:200;height:200;border-radius: 4px;'>			</a></td>

    <td ><a href='DinoRun2.php'>		<img src = 'Games/icons/david_run.jpg' 		style='width:200;height:200;border-radius: 4px;'>			</a></td>

   	<td><a href='GravityBall.php'>	<img src = 'Games/icons/david_ball.jpg' 	style='width:200;height:200;border-radius: 4px;'>			</a></td>
	
</tr>


<tr>

	<td><a href='Tetris.php'>		<img src = 'Games/icons/david_tetris.jpg' 	style='width:200;height:200;border-radius: 4px;'>			</a></td>
	
	<td><a href='Simon.php'>		<img src = 'Games/icons/david_simon.jpg' 	style='width:200;height:200;border-radius: 4px;'>			</a></td>
	
	<td><a href='whackamole.php'>		<img src = 'Games/icons/david_mole.jpg' 	style='width:200;height:200;border-radius: 4px;'> 			</a></td>
	
</tr>
</table>";

// theres gotta be a better way to format this table header
//<td colspan = '3'>
//<td rowspan = '3'>


echo"<br><table >

<tr> 
	<th height='100' align='center' colspan = '3';> 	</th>
</tr>
<tr> 

	<th  align='center' colspan = '3';><h1>Two Player Games</h1></th>

</tr>

<tr> 

	<td><a href='pingpong.php'>		<img src = 'Games/icons/david_pingpong.jpg' 	style='width:200;height:200;border-radius: 4px;'>			</a></td>

	<td><a href='ConnectFour.php'>		<img src = 'Games/icons/david_matchfour.jpg' 	style='width:200;height:200;border-radius: 4px;'>			</a></td>

	<td><a href='tictactoe.php'>		<img src = 'Games/icons/david_tictactoe.jpg' 	style='width:200;height:200;border-radius: 4px;'> 			</a></td>
	
</tr></table>";


/* 	echo"
			  <a href='home.php'>	

				<img src = 'images/highscore_logo.jpg' style='width:40%;height:40%';></a>";
*/			
				
//				<img src = 'images/highscore_logo.jpg' style='float:left;width:40%;height:40%';></a>";



//include the footer
	include('Includes/footer.php');

//
?>