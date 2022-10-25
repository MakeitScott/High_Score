<?php
/*
***		Written By: Scott Pietras
*	Profile.php - Profile Page
*	
*	requires login 
*	displays only loged in users information
*	
*	
*	
*	user alowed to change password email and username
*	
***	
*/


/*
***		Backlog ::todo
*	
*	 add a picture
*	add validation for username
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
	include('check_login.php');
	require('upload.php');

	

	//output
	include('_Includes/header.php');
	include('menubar.php');
	echo "<p>
		  <p>$user is Logged on and this is his profile";




/*
echo"<br><br><br><br>scotts echo<br><br>";
	echo "Welcome $user userID = $seshuserid";
print_r($_SESSION);
*/


// Connect to the Database
	require('mysqli_connect.php');
//	mysqli_set_charset($mysqli, 'latin1'); 
	
	

	
	
// Variables
	$pgm		= 'profile.php'; 

	$table		= 'userinfo'; 
	
	$bold		= "style='font-weight:bold;'";
	$center		= "align='center'";
	$txtcolor	= "<font color='gold'>";

							
	$msg		= NULL;
	$msg_color	= 'black';
	$columns	= array('rowid', 'fname', 'lname', 'role', 'email', 'userid', 'password');
	$photo		= null;
	
	


// Get Input
	$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
	foreach($columns as $value) 
		if (isset($_POST[$value])) 		${$value} 			= sanitize($mysqli, $_POST[$value]);			else ${$value} = NULL;
		if (isset($_POST['task']))  		$task 			= sanitize($mysqli, $_POST['task']);			else $task  = 'default';
		
		

// Verify Input
	if (($task == 'Add') OR ($task == 'Change')) {
	
// Text Fields

			if ($userid  == NULL) $msg .= 'User ID is missing<br>';
			if ($password  == NULL) $msg .= 'password is missing<br>';
			
// Email		
			if (($email != NULL) AND (!filter_var($email, FILTER_VALIDATE_EMAIL)))
				$msg .= 'Invalid Email Address<br>';


/* 		::todo 	//varify the userid is unique
		need to add seccond username and email variable?
		
		 if (userIDinput != Session_Userid) then  check if it is unique
		
		// Verify the userid is unique
			$query = "SELECT userid
					  FROM $table 
					  WHERE userid = '$userid'";
			$result = mysqli_query($mysqli, $query);
			if (!$result) echo "Query Error [$query] " . mysqli_error($mysqli);

// If USERID is FOUND,  then dont allow to continue		
	if (mysqli_num_rows($result) > 0) {
		$msg .= "User ID $userid is taken already<br>";
			//$userid =$password = null;
	}


// Verify the Email is unique
			$query = "SELECT userid
					  FROM $table 
					  WHERE email = '$email'";
			$result = mysqli_query($mysqli, $query);
			if (!$result) echo "Query Error [$query] " . mysqli_error($mysqli);

// If email is FOUND,  then dont allow to continue		
	if (mysqli_num_rows($result) > 0) {
		$msg .= "The Email $email has an account already<br>";
	}


*/




/*::todo 	//varify the userid is unique  
//you need to select and list all the stuff in this querry or it will all disapapear

			$query = "SELECT userid
					  FROM $table 
					  WHERE userid = '$userid'";
			$result = mysqli_query($mysqli, $query);
			if (!$result) echo "Query Error [$query] " . mysqli_error($mysqli);
			
// If USERID is FOUND,  then dont allow to continue	and clear user and password form		
			if (mysqli_num_rows($result) > 0) {
				$msg = "User ID $userid is taken already";
					$userid = null;
			}		
 */


	}//end varification
	

	if ($msg != NULL) $task = 'Error';
	
	
// Process Input
	switch($task) {


    case 'Error':	$msg_color = 'red';  break;
	
	
	


	/*
	case 'Show':
		$query = "SELECT firstname, lastname, role, email, userid, password
				  FROM $table
				  WHERE rowid='$rowid'";
		$result = mysqli_query($mysqli, $query);
		if (!$result) echo "Query failed [$query] – " . mysqli_error($mysqli); 
		if (mysqli_num_rows($result) < 1) {
			$msg = "ROWID $rowid not found."; 
			$msg_color='red'; 
			$fname = $lname = $role = $email = $userid = $password = NULL;
			}
		else {
			list($fname, $lname, $role, $email, $userid, $password) = mysqli_fetch_row($result); 
			$msg = "Row $rowid found";
			//$last_rowid = $rowid;
			} 
		break;
*/
   
/*   
  // button is set to change
	case 'Change':
	

		$query = "UPDATE $table SET
				  firstname			= '$fname',
				  lastname			= '$lname',
				  role				= '$role',
				  email				= '$email',
				  userid			= '$userid',
				  password			= '$password'
				  WHERE rowid		= '$rowid'";	
*/				  
				  
	
/*
***		
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

	case 'Change':
/*
***		
*	
*	
*	
*	something doesnt work here if i take out the case change the user id doesnt change  
but if i have the change the picture doesnt update
*	
*	
*	
*	
*	
***		
*/

//				  

$query = "UPDATE $table SET
				  email				= '$email',
				  password			= '$password',
				  userid			= '$userid',
				  photo				= '$photo'
				  WHERE rowid		= '$seshuserid'";
				  
				  
		$result = mysqli_query($mysqli, $query);
		if (!$result) {
			$msg = "QUERY failed [$query]: " . mysqli_error($mysqli);
			$msg_color = 'red';
			}
		else $msg = "$user Updated";
		


$query = "SELECT firstname, lastname, role, email, userid, password ,rowid
				  FROM $table
				  WHERE rowid='$seshuserid'";
		$result = mysqli_query($mysqli, $query);
		if (!$result) echo "Query failed [$query] – " . mysqli_error($mysqli); 
		
		
			list($fname, $lname, $role, $email, $userid, $password, $rowid) = mysqli_fetch_row($result); 

		break;
//
// show
//
	default:
			$query = "SELECT firstname, lastname, role, email, userid, password ,rowid ,photo
				  FROM $table
				  WHERE rowid='$seshuserid'";
		$result = mysqli_query($mysqli, $query);
		if (!$result) echo "Query failed [$query] – " . mysqli_error($mysqli); 
		
		
			list($fname, $lname, $role, $email, $userid, $password, $rowid, $photo) = mysqli_fetch_row($result); 
//			$msg = "<p align = 'center'> Here you can change your password or email <br>and add a picture of yourself</p>";
			$msg = "<p align = 'center'> Here you can change your password or email</p>";

    }	//end switch case







// Upload File	
	if (isset($_FILES['photo']['tmp_name'])) {
		$postname 	= 'photo';
		$directory	= 'images/';// must be in the directory of this program 
		$filename	= $rowid;
		$extensions = array('.gif', '.jpg', '.jpeg', '.png'); // only accept these types of files 
		$maxsize	= 1024 * 1024;	// maximum file size 
		
		// call the upload function  with the information from above
		list($errno, $photo) = upload($postname, $directory, $filename, $extensions, $maxsize);
		if ($errno == 0) {
			
			$query = "update $table SET photo = '$photo' WHERE rowid = '$rowid'";
			
		$result = mysqli_query($mysqli, $query);
	if (!$result) 
	{
    $msg = "Query failed [$query] ". mysqli_error($mysqli);
    $msg_color = 'red';
    }
			}
		else echo "Message: File Upload Failed, RC = $errno, $photo<br><br>";
		}



$result = mysqli_query($mysqli, $query);
	if (!$result) 
	{
    $msg = "Query failed [$query] ". mysqli_error($mysqli);
    $msg_color = 'red';
    }




// do i need the double html annd doc type and body or is it douplicate
//	echo "<!DOCTYPE HTML><html><body>";

// Output

		//show photo	
//echo"		  <div $bold><img src = '$photo' width = '200'>";

echo"				<br><br>Your Personal Profile</div>\n";
		  
//display inputs		  
	echo "<p><form action='$pgm' method='post' enctype='multipart/form-data'>
		  
		  <table>
		  <tr><td $bold>Row ID</td>					<td >$txtcolor $rowid</td></tr>
		  
		  
		  <tr><td $bold>First Name</td>				<td >$txtcolor $fname</td></tr>  
			
		  <tr><td $bold>Last Name</td>				<td >$txtcolor $lname </td></tr>
		  
		  <tr><td $bold>Role</td>					<td >$txtcolor $role </td></tr>

		  
		  <tr><td $bold>Email</td>
		  <td><input type='email'	 name='email' 	value='$email' size='50'></td></tr>
		  
		  <tr><td $bold>User ID</td>				
		  <td><input type='userid' name='userid'   value='$userid'  size='25'></td></tr>
		  
		  <tr><td $bold>Password</td>
		  <td><input type='password' name='password'   value='$password'  size='25'></td></tr>";
//show photo			  
//echo"			<tr><td $bold>Photo</td>				<td>[$photo]<input type= 'file' name ='photo'</tr>";
			  
echo"		  </table>";
		  

	  
// Action Bar
    echo "<p><table><tr><td>

		  <input type='submit' name='task' value='Change' style='background-color:orange;font-weight:bold;'>
		  </td></tr></table></form>";


	
	
// Message
    echo "<p><table><tr>
		  <td $bold>MESSAGE: </td>
		  <td style='color:$msg_color;'>$msg</td>
		  </tr></table>"; 
		  
// End of Program

//delete this
// do i need the double html annd doc type and body or is it douplicate
//	echo "</body></html>";
	
	
	
	
	mysqli_close($mysqli);
	
	
	

// Sanitize Function
	function sanitize($mysqli, $var) {
		$var = trim($var);									// Remove whitespace
		$var = mysqli_real_escape_string($mysqli, $var);	// Convert special characters to HTML equivalents
		$var = strip_tags($var);
		$var = htmlentities($var);
		return($var);
		}





include('_Includes/footer.php'); 
	
?>