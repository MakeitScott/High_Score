<?php
/*
***		Written By: Scott Pietras
*	scoreboard.php - scoreboard Page
*	
*		Leaderboard??
*	
*	
*	all data shown from scoreinfo table joined with user and game info
*	not filtered or unique
*	
*	
***		
*/


/*
***		Backlog ::todo
*	use for each loop and aarry of game titles
*	
*		add filters
*	
*	leaderboard
*	first you need to select 1 top high score from each game
*	then group 
*	
*	
***		
*/








	require('mysqli_connect.php');

	include('session.php');
	
//	include('login/check_login.php');
//	include('login/check_role.php');
	
	
	include('Includes/header.php');
	include('menubar.php');
	

	
	

//variables
$program = 'scoreboard.php';
$message= null;

/* 
//get input 
	if (isset($_POST['student'])){
		$student 					= $_POST['student'];
//if sort by student 
//		$assignment	= NULL;
	}
	else $student = NULL;	
	
	
	if (isset($_POST['assignment'])) { 	
		$assignment 				= $_POST['assignment'];
//if sort by assignment 		
//		$student = NULL;
	}
	else $assignment	= NULL;	

	
// if nothing is selected 
	if ($student == 'Select')			$student		= NULL;
	if ($assignment == 'Select')		$assignment		= NULL;
	
	
	
	//output
	echo "<table align='center'<tr><td>
		<center> Class Grades</center>";
		
		
	echo"
	<p><form action='$program' method='POST'>
		  <table width='1024' align='center'>
		  <tr><td width='100'>
		  
		  Student:</td><td> <select name='student' onchange='this.form.submit()'>
		  <option>Select</option>";




// Student Dropdown 			  
	$query = "SELECT rowid, firstname, lastname
	FROM finalpeople
	where role = 'Student'
	ORDER BY firstname, lastname";
	
	
	
		$result = mysqli_query($mysqli, $query);
	if (!$result) echo "Query Failed [$query]: " . mysqli_error($mysqli);

	while (list($rowid, $firstname, $lastname) = mysqli_fetch_row($result)) {
		if ($rowid == $student) $se = "SELECTED"; else $se = NULL;
		//value is the row but show the student firstname and last name 
		echo "<option value='$rowid' $se>$firstname $lastname</option>\n";
		}	
	echo "</select></td></tr>";
	
	
	 */
//			doesenet work how i would like
	
	
/*
// assignment Dropdown
	echo "<tr><td width='100'>Assignment</td>
		  <td><select name='assignment' onchange='this.form.submit()'>
		  <option>Select</option>";
		  
// assignment Dropdown query
	$query = "SELECT rowid, assignmentname, duedate FROM assignment ORDER BY duedate";
	$result = mysqli_query($mysqli, $query);
	if (!$result) echo "Query Failed [$query]: " . mysqli_error($mysqli);	
	while (list($rowid, $assignmentname, $duedate) = mysqli_fetch_row($result)) {
		if ($rowid == $assignment) $se = "SELECTED"; else $se = NULL;
		
//value is the row id  show the assignmentname and duedate
		echo "<option value='$rowid' $se>$assignmentname - $duedate</option>\n";
		}	
			echo "</select></td></tr>";





	if ($student != NULL) {
		$where = "WHERE finalgrades.student = '$student'";
//		$assignment = 'Select';
	}
	if ($assignment != NULL) {
		$where = "WHERE assignment.assignmentname = '$assignment'";
//		$student = 'Select';
	}
	else $where = NULL;
	
*/




//	  $where
/* 	
	$query = "SELECT assignment.assignmentname, assignment.duedate,
				finalgrades.grade, finalpeople.firstname, finalpeople.lastname
				
			  FROM finalgrades
			  JOIN assignment ON assignment.rowid = finalgrades.assignment
			  join finalpeople on finalpeople.rowid = finalgrades.student
			  
			  WHERE finalgrades.student = '$student'
		
			  ORDER BY assignment.duedate";

 */
 
 //try this 
/*  
// all game titles from 
	//$titles				= array ('Snake', 'Dino Run 2', 'Flappy Bird', 'Gravity Ball', '2048', 'Racing', 'Tetris');
	$titles				= array (1, 2, 3, 4, 5, 6, 7);
	
	foreach($titles as $value){
	$query = "SELECT  userinfo.firstname, userinfo.lastname, userinfo.userid, gameinfo.title,
							scoreinfo.highscore, scoreinfo.scoredate, scoreinfo.timesplayed
	FROM scoreinfo

	JOIN gameinfo ON gameinfo.rowid = scoreinfo.game
	JOIN userinfo ON userinfo.rowid = scoreinfo.user

	WHERE gameinfo.rowid = $value
	ORDER BY scoreinfo.highscore DESC
	limit 1";




// Execute the Query
	$result = mysqli_query($mysqli, $query);
	if (!$result) echo "Query Failed [$query]: " . mysqli_error($mysqli);
	}

 */




// this  works shows everything


// querry to get all the information where role == gamer

	$query = "SELECT  userinfo.firstname, userinfo.lastname, userinfo.userid, gameinfo.title,
							scoreinfo.highscore, scoreinfo.scoredate, scoreinfo.timesplayed
	FROM scoreinfo

	JOIN gameinfo ON gameinfo.rowid = scoreinfo.game
	JOIN userinfo ON userinfo.rowid = scoreinfo.user

	WHERE userinfo.role = 'gamer'

	ORDER BY scoreinfo.highscore DESC;";




// Execute the Query
	$result = mysqli_query($mysqli, $query);
	if (!$result) echo "Query Failed [$query]: " . mysqli_error($mysqli);
	
	

	
		// output
		echo "
		  <p><table width='800' align='center'>
		  <tr>
		  <th align='left'>Name</th>
		  <th align='left'>UserID</th>
		  <th align='left'>Game</th>
		  <th align='left'>Score</th>
		  <th align='left'>Score Date</th>
		  <th align='left'>Times Played</th>		  
		  </tr>";
		  
		  
		  
	if (($result->num_rows) == 0)
		echo "<tr><td>None Found</td></tr>";
	else {	  
	
	//get first name and lastname  and display them 
	while(list( $firstname, $lastname, $userid, $title, $score, $scoredate, $timesplayed) = mysqli_fetch_row($result)) {
		echo "<tr>
				<td>$firstname $lastname</td>
			  <td>$userid</td>
			  <td>$title</td>
			  <td>$score</td>
			  <td>$scoredate</td>
			  <td>$timesplayed</td>			  
			  </tr>";
		}
	}
	echo "</table>";
	
	
	
	include('Includes/footer.php'); 
?>