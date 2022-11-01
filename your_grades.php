<?php
// 
//requires login 
// Written by: 


// Output
	include('session.php');
	include('login/check_login.php');


	

	//output
	include('header.php');
	include('menubar.php');
	
	
	
		if ($role == 'Admin'){
			echo "<script >
       window.onload = function () { alert('you are an $role you dont have grades');
	  window.location = 'home.php'; } 
</script>"; 
		}
		
			echo "<p>
		  <p>$user is Logged on and these are their grades";







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
	
	$table		= 'finalpeople'; 
	
	$bold		= "style='font-weight:bold;'";
	$center		= "align='center'";
	$txtcolor	= "<font color='gold'>";

							
	$msg		= NULL;
	$msg_color	= 'black';
	$columns	= array('rowid', 'fname', 'lname', 'role', 'email', 'userid', 'password');
	$photo		= null;
	
	














		  
		  
	$query = "SELECT assignment.assignmentname, assignment.duedate,
				finalgrades.grade, finalpeople.photo
				
			  FROM finalgrades
			  JOIN assignment ON assignment.rowid = finalgrades.assignment
			  join finalpeople on finalpeople.rowid = finalgrades.student

			  WHERE finalgrades.student = '$seshuserid'
			  ORDER BY assignment.duedate";





// Execute the Query
	$result = mysqli_query($mysqli, $query);
	if (!$result) echo "Query Failed [$query]: " . mysqli_error($mysqli);
	
	
	
	// Output
	
		// output
		echo "
		  <p><table width='1024' align='center'	rules='all' frame='border' cellpadding='5'>
		  <tr>
		  <th align='left'>Assignment</th>
		  <th align='left'>Due Date</th>
		  <th align='left'>Grade</th>
		  </tr>";
		  
		  
		  
	if (($result->num_rows) == 0)
		echo "<tr><td>None Found</td></tr>";
	else {	  
	
	//get first name and lastname  and display them 
	while(list( $assignmentname, $duedate,$grade, $photo) = mysqli_fetch_row($result)) {
		echo "<!DOCTYPE HTML><html><body>
			
		  <div $bold><img src = '$photo' width = '100'><br>
							<br>Your grades</div>\n";
		
		
		echo "<tr>
			  <td>$assignmentname</td>
			  <td>$duedate</td>
			  <td>$grade</td>
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





	include('footer.php');
	
?>