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
***		Backlog
*	
*	the whole screen needs to be locked in place and
 not have a scroll bar that moves when the games played using the arrow kays
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



//show snake game in its own window


	echo"<iframe src='Games/Gravity_Ball_Game/index.html' style='height:700px;width:700px;' title='the game snake'></iframe>";
	//echo"<iframe src='Games/flappybird/index.html' style='height:500px;width:600px;' title='the game snake'></iframe>";
	//echo"<iframe src='Games/Snake/index.html' style='height:600px;width:600px;' title='the game snake'></iframe>";


//no border
//	echo"<iframe src='Games/Snake/index.html' style='height:600px;width:600px;border:none;' title='the game snake'></iframe>";



/*
	echo"<br><a href='Games/Racing/CarDriving.html'>			Play car racing</a>";
	echo"<br><a href='Games/Snake/index.html'>				Play Snake</a>";
	echo"<br><a href='Games/Dino_Run_OG/index.html'>				Play Dino Run </a>";
	echo"<br><a href='Games/DinoRun2/index.html'>		Play Dino Run 2</a>";
*/




//include the footer
	include('_Includes/footer.php'); 
	
//



?>