<?php
/*
***		Written By: Scott Pietras
*	Snake.php - Snake game Page
*	
*		
*	
*	:play snake on its own page but also has the header footer  and background included
*	
*	http://localhost:8080/webDB/Senior_Project/Snake.php
*	move to the games folder? or inside the Games.snake folder
*	
***		
*/


/*
***		Backlog ::todo
*	
*	the whole screen needs to be locked in place and
*	not have a scroll bar that moves when the games played using the arrow kays
*	just like in the driving game
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
	include('menubar.php');


// Output




 
/* // 2048
$name = '2048';
$location ='Games/2048/index.html';
*/

/* //DinoRun  (2)
$name = 'DinoRun';
$location ='Games/DinoRun2/index.html';
*/


/* //Flappy Bird
$name = 'Flappy Bird';
$location ='Games/flappybird/index.html';
 */
 
 
 /* //GravityBall
$name = 'GravityBall';
$location ='Games/GravityBall/index.html';
 */

/* //racing
$name = 'racing';
$location ='Games/Racing/CarDriving.html';
 */

/* //Simon
$name = 'Simon';
$location ='Games/Simon/.index.html';
 */

 //snake
$name = "snake";
$location ='Games/Snake/index.html'; 


/* // tetris
$name = 'tetris';
$location ='Games/Tetris/index.html';
 */

/* // Whack-A-Mole
$name = 'Whack-A-Mole';
$location ='Games/whackamole/index.html';
 */



//2 player games


/* // ConnectFour
$name = 'ConnectFour';
$location ='Games/ConnectFour/index.html';
 */

/* // pingpong
$name = 'pingpong';
$location ='Games/pingpong/index.html';
 */

/* // tictactoe
$name = 'tictactoe';
$location ='Games/tictactoe/index.html';
 */







//show snake game in its own window


//works
	//echo"<iframe src='Games/Racing/CarDriving.html' style='height:700px;width:700px;' title='Play car racing'></iframe>";
	
//	echo"<iframe src='Games/Snake/index.html' style='height:550px;width:450px;border:none;' title='the game snake'></iframe>";


// using variables above
	echo"<iframe src= $location style='height:550px;width:450px;border:none;' title= $name ></iframe>";
	
	
//	echo"<iframe src='Games/Gravity_Ball_Game/index.html' style='height:700px;width:700px;' title='the game snake'></iframe>";

	//echo"<iframe src='Games/flappybird/index.html' style='height:500px;width:600px;' title='the game snake'></iframe>";
	


//no border
//	echo"<iframe src='Games/Snake/index.html' style='height:600px;width:600px;border:none;' title='the game snake'></iframe>";



/*
	echo"<br><a href='Games/Racing/CarDriving.html'>			Play car racing</a>";
	echo"<br><a href='Games/Snake/index.html'>				Play Snake</a>";
	echo"<br><a href='Games/Dino_Run_OG/index.html'>				Play Dino Run </a>";
	echo"<br><a href='Games/DinoRun2/index.html'>		Play Dino Run 2</a>";
*/




//include the footer
	include('Includes/footer.php'); 
	

?>