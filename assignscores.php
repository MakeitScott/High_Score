<?php
/*
***		Written By: Scott Pietras
*	assignscores.php - test to assign scores to gamers
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
*	doesent check to see if information is blank
*	
*	
*	needs to check if the user already has a high score for that game
*	if score for game and user > 0 
*	update values
*	
***		
*/
	include('session.php');

//check login
	include('login/check_login.php');
//confirm role
	include('login/check_role.php');
	
	

	include('Includes/header.php');
	include('menubar.php');
	
	
	
	echo "<p>
		  <p>$user is $role and can add scores to gamers";


// Variables
	$msg 	= NULL;
	$pgm	= 'assignscores.php'; 

	
// Connect to MySQL and the BCS350 Database
	include('mysqli_connect.php'); 


// Get Form Input 
	if (isset($_POST['highscore']))  		$highscore 				= $_POST['highscore'];			else $highscore			= NULL;
	if (isset($_POST['timesplayed']))  		$timesplayed 			= $_POST['timesplayed'];		else $timesplayed		= NULL;
	if (isset($_POST['gamer'])) 			$gamer 					= $_POST['gamer'];				else $gamer				= NULL;
	if (isset($_POST['game']))  			$game 					= $_POST['game'];				else $game				= NULL;	

// if nothing is selected 
	if ($gamer == 'Select')		$gamer		= NULL;
	if ($game == 'Select')		$game		= NULL;
	
	
// doesnt check
// Text Fields
		if ($gamer == NULL) $msg .= 'the gamer needs to be selected<br>';
		if ($game == NULL) $msg .= 'game was not selected<br>';
		if ($highscore  == NULL) $msg .= 'highscore is missing<br>';
		if ($timesplayed  == NULL) $msg .= 'numbner of times played is missing<br>';



// Process Input
	if (($game == NULL) OR ($gamer == NULL))	
		// if one or both are not selected make the message
		$msg = "Select gamer, game, enter highscore and<br> number times played and press SUBMIT";
		
		
		
	else {
		$query = "INSERT INTO scoreinfo SET
				  user 			= 	'$gamer', 
				  game 			= 	'$game',
				  highscore		= 	$highscore,
				  timesplayed	= 	$timesplayed"; 
		$result = mysqli_query($mysqli, $query);
		if ($result) $msg = "Gamer highscore successfully entered";
		else echo "Query Failed [$query]: " . mysqli_error($mysqli);	
	}




// Page Output

	echo "<center><br>Add HighScores to Gamer</center>
		  <p><form action='$pgm' method='POST'>
		  <table   align='center'>";
//width='1024'

// gamer Dropdown 		  
	echo "<br><br>
	<tr><td width='100'>Gamer</td>
		  <td><select name='gamer'><option>Select</option>";


// gamer Dropdown query			  
	$query = "SELECT rowid, firstname, lastname FROM userinfo WHERE role ='Gamer' ORDER BY firstname, lastname";
	$result = mysqli_query($mysqli, $query);
	if (!$result) echo "Query Failed [$query]: " . mysqli_error($mysqli);	
	while (list($rowid, $firstname, $lastname) = mysqli_fetch_row($result)) {
		if ($rowid == $gamer) $se = "SELECTED"; else $se = NULL;
		
		//value is the row but show the gamer firstname and last name 
		echo "<option value='$rowid' $se>$firstname $lastname</option>\n";
		}	
	echo "</select></td></tr>";
	
	
	
	
// game Dropdown
	echo "<tr><td width='100'>Game</td>
		  <td><select name='game' ><option>Select</option>";

// game Dropdown query
	$query = "SELECT rowid, title FROM gameinfo ";
	$result = mysqli_query($mysqli, $query);
	if (!$result) echo "Query Failed [$query]: " . mysqli_error($mysqli);	
	while (list($rowid, $title) = mysqli_fetch_row($result)) {
		if ($rowid == $game) $se = "SELECTED"; else $se = NULL;



//value is the row id  show the title
		echo "<option value='$rowid' $se>$title</option>\n";
		}	
			echo "</select></td></tr>";


//add input for highscore
		echo"<tr><td>Highscore</td>
			  <td><input type='number'	 name='highscore'  value='$highscore' size='15' required></td></tr>";


//add input for times played
		echo"<tr><td>Number of times played</td>
			  <td><input type='number'	 name='timesplayed'  value='$timesplayed' size='15' required></td></tr>";




//button to submit		
	echo "
		  <tr><td></td><td align = 'center'><input type='submit' name='submit' value='Submit'></td></tr>
		  
		  </table></form>";



//probally dont need
//</select></td></tr>



// Message
	echo "<p><table  align='center'><tr><td align='left'>MESSAGE: </td><td> $msg</td></tr></table>";

?>