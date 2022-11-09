<?php
/*
***		Written By: Scott Pietras
*	your_scores.php - view your game scores Page
*	
*		
*	
*	
*	alert so that admin can not go to page they wont have game scores
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



// Output
	include('session.php');
	include('login/check_login.php');


	

	//output
	include('Includes/header.php');
	include('menubar.php');
	
	
	
		if ($role == 'Admin'){
			echo "<script >
       window.onload = function () { alert('you are an $role you dont play games busniess only');
	  window.location = 'home.php'; } 
</script>"; 
		}
		
			echo "<p>
		  <p>$user is Logged on and these are their game scores";







/*
echo"<br><br><br><br>scotts echo<br><br>";
	echo "Welcome $user userID = $seshuserid";
print_r($_SESSION);
*/


// Connect to the Database
	require('mysqli_connect.php');
	mysqli_set_charset($mysqli, 'latin1'); 
	
	
	
	
// Variables

//	$pgm		= 'profile.php'; 
//	$pgm2		= 'admin_roster.php'; 
	
	$table		= 'userinfo'; 
	
	$bold		= "style='font-weight:bold;'";
	$center		= "align='center'";
	$txtcolor	= "<font color='gold'>";

							
	$msg		= NULL;
	$msg_color	= 'black';
//	$columns	= array('rowid', 'fname', 'lname', 'role', 'email', 'userid', 'password');
	$photo		= null;
	




	$query = "SELECT  gameinfo.title, scoreinfo.highscore, scoreinfo.timesplayed, scoreinfo.scoredate
	FROM scoreinfo

	JOIN gameinfo ON gameinfo.rowid = scoreinfo.game
	JOIN userinfo ON userinfo.rowid = scoreinfo.user

		WHERE userinfo.rowid = '$seshuserid'
	ORDER BY scoreinfo.highscore;";



/* 
	$query = "SELECT assignment.assignmentname, assignment.duedate,
				finalgrades.grade, finalpeople.photo
				
			  FROM finalgrades
			  JOIN assignment ON assignment.rowid = finalgrades.assignment
			  join finalpeople on finalpeople.rowid = finalgrades.student

			  WHERE finalgrades.student = '$seshuserid'
			  ORDER BY assignment.duedate";
 */




// Execute the Query
	$result = mysqli_query($mysqli, $query);
	if (!$result) echo "Query Failed [$query]: " . mysqli_error($mysqli);
	
	
	
	// Output
	
		// output
		echo "<h3>Your Scores</h3>";
		echo "
		  <p><table width='800' align='center'	rules='all' frame='border' cellpadding='5'>
		  <tr>
		  <th align='left'>Game</th>
		  <th align='left'>Score</th>
		  <th align='left'>Times played</th>
		  <th align='left'>Score Date</th>
		  </tr>";
		  
		  
		  
	if (($result->num_rows) == 0){
		echo "<tr><td>None Found</td></tr>";
//alert if you dont have any scores send to game page
echo "<script >
       window.onload = function () { alert('You dont have any HighScores saved play games to get scores');
	  window.location = 'games.php'; } 
</script>";
	}
		
	else {	  
	
	//get first name and lastname  and display them 
	while(list( $title, $score,$timesplayed, $scoredate) = mysqli_fetch_row($result)) {
		
			
//echo "		  <div $bold><img src = '$photo' width = '100'><br>


					
		
		
		echo "<tr>
			  <td>$title</td>
			  <td>$score</td>
			  <td>$timesplayed</td>
			  <td>$scoredate</td>
			  </tr>";
		}
	}
	echo "</table>";

	

	
	
	
	
// Message
    echo "<p><table><tr>
		  <td $bold>MESSAGE: </td>
		  <td style='color:$msg_color;'>$msg</td>
		  </tr></table>"; 
		  
// End of Program
	echo "</body></html>";
	mysqli_close($mysqli);
	
	
	

// Sanitize Function
	function sanitize($mysqli, $var) {
		$var = trim($var);									// Remove whitespace
		$var = mysqli_real_escape_string($mysqli, $var);	// Convert special characters to HTML equivalents
		$var = strip_tags($var);
		$var = htmlentities($var);
		return($var);
		}





include('Includes/footer.php'); 
	
?>