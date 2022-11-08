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
*	
*	
*	
*	
*	
*	
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
		  <p>$user is $role and can add grades to students";


// Variables
	$msg 	= NULL;
	$pgm	= 'assignscores.php'; 

	
// Connect to MySQL and the BCS350 Database
	include('mysqli_connect.php'); 


// Get Form Input 
	if (isset($_POST['grade']))  		$grade 				= $_POST['grade'];			else $grade			= NULL;
	if (isset($_POST['student'])) 		$student 			= $_POST['student'];		else $student		= NULL;
	if (isset($_POST['assignment']))  	$assignment 		= $_POST['assignment'];		else $assignment	= NULL;	

// if nothing is selected 
	if ($student == 'Select')			$student		= NULL;
	if ($assignment == 'Select')		$assignment		= NULL;


// Process Input
	if (($assignment == NULL) OR ($student == NULL))	
		// if one or both are not selected make the message
		$msg = "Select Student and Assignment and press SUBMIT";
	else {
		$query = "INSERT INTO finalgrades SET
				  student 		= '$student', 
				  assignment 	= '$assignment',
				  grade			= '$grade'"; 
		$result = mysqli_query($mysqli, $query);
		if ($result) $msg = "Student grade successfully entered";
		else echo "Query Failed [$query]: " . mysqli_error($mysqli);	
		}




// Page Output

	echo "<center><br>Add HighScores to Gamer</center>
		  <p><form action='$pgm' method='POST'>
		  <table   align='center'>";
//width='1024'

// Student Dropdown 		  
	echo "<br><br>
	<tr><td width='100'>Student</td>
		  <td><select name='student'><option>Select</option>";


// Student Dropdown query			  
	$query = "SELECT rowid, firstname, lastname FROM finalpeople WHERE role ='student' ORDER BY firstname, lastname";
	$result = mysqli_query($mysqli, $query);
	if (!$result) echo "Query Failed [$query]: " . mysqli_error($mysqli);	
	while (list($rowid, $firstname, $lastname) = mysqli_fetch_row($result)) {
		if ($rowid == $student) $se = "SELECTED"; else $se = NULL;
		
		//value is the row but show the student firstname and last name 
		echo "<option value='$rowid' $se>$firstname $lastname</option>\n";
		}	
	echo "</select></td></tr>";
	
	
	
	
// assignment Dropdown
	echo "<tr><td width='100'>Assignment</td>
		  <td><select name='assignment'><option>Select</option>";
		  
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
		
		//score
		
//add input for grade
		echo"<tr><td>Grade</td>
			  <td><input type='text'	 name='grade'  value='$grade' size='15'></td></tr>";
			  
//button to submit		
	echo "
		  <tr><td><input type='submit' name='submit' value='Submit'></td></tr>
		  
		  </table></form>";



//probally dont need
//</select></td></tr>

// move submit button to next column
//</td><td>


// Message
	echo "<p><table  align='center'><tr><td align='left'>MESSAGE: $msg</td></tr></table>";
	//	width='1024'
?>