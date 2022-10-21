<?PHP
/*
***		Written By: Scott Pietras
*	login.php - Website login page
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
*	*	add in a user-defined display Name?
*	*	*	*	require to make it *unique*			YES
*	
*	
*	change message variable to show in a popup like on the home page
***		
*/


//	include('_required_folder_/session.php');

// Start Session	
	include('session.php');
	
// Variables 
	$msg 		= NULL;								// Error Message
	$td 		= "width='20%' align='right'";		// Attributes for 1st column
	$tf 		= "width='80%' align='left'";		// Attributes for 2nd column
	$pgm		= 'login.php';
	$width		= '800';		
	$table 		=	'userinfo';

  
// Get Form Input  
// was the "submit" button pressed  "login"
		if (isset($_POST['login'])) {			//trim to make sure the space bar wasnt accidently pressed
				if (isset($_POST['userid']))		$userid		= trim($_POST['userid']);		else $userid 	= NULL;
				if (isset($_POST['password']))		$password 	= trim($_POST['password']);		else $password 	= NULL;
				
// Verify Input
				if ($userid == NULL) 		$msg = "USERID is missing";
				if ($password == NULL) 		$msg = "PASSWORD is missing";
				if (($userid == NULL) AND ($password == NULL)) $msg = "USERID & PASSWORD are missing";
		
// login		
		if ($msg == NULL) {
			
		//search for the user id in the database table 
// Query Student Using the USERID			


/*
*
*	change the name of the include &&
*	change include file name to path 
*
*/
			include('mysqli_connect.php');
			
			$query = "SELECT firstname, lastname, password, role ,rowid
					  FROM $table 
					  WHERE userid = '$userid'";
			$result = mysqli_query($mysqli, $query);
			if (!$result) echo "Query Error [$query] " . mysqli_error($mysqli);
			
// If USERID is FOUND, Verify Password			
			if (mysqli_num_rows($result) > 0) {
				list($firstname, $lastname, $password2, $role ,$rowid) = mysqli_fetch_row($result);
				
// If PASSWORD matches, Complete login				
				if ($password == $password2) {
					$_SESSION['login']		= TRUE;
					$_SESSION['userid'] 	= $userid;
					$_SESSION['user'] 		= $user = "$firstname $lastname";
					$_SESSION['role']		= $role; 
					$_SESSION['time']		= time();		//time to the seccond 
					$_SESSION['rowid']		= $rowid;
					$msg					= "<font color='lime'><b>$user login Successful</b></font>";
					$login 					= TRUE;
					
// if login sucessfull send to home screen (redirect)
					header('location: home.php');
					exit;
					
				}
				else $msg = "Invalid Password";
				}
			else $msg = "USERID [$userid] is invalid";	// the first query didnt find any results 
			}
		}
  
// OUTPUT login Screen
	if ($msg == NULL)  	$msg = "Enter User ID and Password and press the
									<font color='lime'>Green</font> login button";
											
	else if (!$login) $msg = "<font color='red'>$msg, please try again</font>";	
	
	
/*
*
*	change includes to path name
*
*/
	
	include('_Includes/header.php');
	include('menubar.php');
	
	
	echo "<p>Website login
		  <p><form action='$pgm' method='post'>
		  
		  <table width='$width' align='center'>
		  
		  <tr><td $td>User ID</td>		<td $tf><input type='text'     name='userid'   size='40' maxlength='50'></td></tr>
		  
		  <tr><td $td>Password</td>		<td $tf><input type='password' name='password' size='12' maxlength='12'></td></tr>
		  
		  </table>
		  <p align='center'><input type='submit' name='login' value='login' style='background-color:lime;font-weight:bold'>
		  
		  <p><table width='$width'><tr><td $td>Message</td><td $tf><b>$msg</b></td></tr></table>
		  </form>";
		  

	  
include('_Includes/footer.php'); 
		  
?>