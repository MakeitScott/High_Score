<?php
/*
***		Written By: Scott Pietras
*	Create_Account.php - form to add to sql table Page
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
*	change from "student" to "user" or Gamer
*				change rest of database selec
*	hide this in menubar if you are loged in 
*	
*	
*	double html doccumentation and body tags
*	
*	
*	
***		
*/




	include('session.php');
//	include('check_login.php');
//	include('check_role.php');


	include('_Includes/header.php');
	include('menubar.php');
	
	
	

	
/* 	
	echo "<p>This is where Admin can modify all Users
		  <p>$user is Logged on and can acess this page";
 */

	require('upload.php');
// Connect to the Database
	require('mysqli_connect.php');

	
	mysqli_set_charset($mysqli, 'latin1'); 
	
// Variables
	$pgm		= 'roster_update.php'; 
//	$pgm2		= 'roster.php'; 	// used for back button
//	$table		= 'finalpeople';
$table 		=	'userinfo';	
	$bold		= "style='font-weight:bold;'";
	$center		= "align='center'";
	$ctgys		= array('Select', 'Student', 'Admin');

	$msg		= NULL;
	$msg_color	= 'black';
	$columns	= array('rowid', 'fname', 'lname', 'role', 'email', 'userid', 'password');
	$photo		= null;
	
	
//	$confirmpassword;

// Get Input
	$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
	foreach($columns as $value) 
		if (isset($_POST[$value])) 		${$value} 			= sanitize($mysqli, $_POST[$value]);			else ${$value} = NULL;
		if (isset($_POST['task']))  		$task 			= sanitize($mysqli, $_POST['task']);			else $task  = 'First';
		if (isset($_POST['last_rowid'])) 	$last_rowid 	= sanitize($mysqli, $_POST['last_rowid']); 		else $last_rowid = NULL;	
		if (isset($_GET['r']))				{$rowid			= sanitize($mysqli, $_GET['r']);			$task = 'Show';}

// Verify Input
	if (($task == 'Add') OR ($task == 'Change')) {
	
// Text Fields
		if ($fname == NULL) $msg .= 'First name is missing<br>';
		if ($lname == NULL) $msg .= 'Last name is missing<br>';
		if ($userid  == NULL) $msg .= 'User ID is missing<br>';
		if ($password  == NULL) $msg .= 'password is missing<br>';
		
		
// Email		
		if (($email != NULL) AND (!filter_var($email, FILTER_VALIDATE_EMAIL)))
			$msg .= 'Invalid Email Address<br>';



// role		
		if ($role == 'Select') $role = NULL;
		if ($role == NULL) $msg .= 'role is missing<br>';
		else if (!in_array($role, $ctgys)) $msg .= 'Invalid role<br>';
		}//end varification
		
// Change or Delete - Validate Last ROWID	
		if (($task == 'Change') OR ($task == 'Delete')) {
			if ($rowid != $last_rowid) $msg = 'Show record before changing or deleting<br>';
			}

	if ($msg != NULL) $task = 'Error';
	
// Process Input
	switch($task) {
    case 'First':	$msg = 'Enter your information and click Add';  break;

    case 'Error':	$msg_color = 'red';  break;
	
	case 'Clear':
		$last_rowid = $rowid = $fname = $lname = $role = $email = $userid = $password = NULL;
		$msg = 'Form Cleared'; 
		break;
		
	case 'Previous':
	case 'Next':
	case 'Show':
		if ($task == 'Previous') $rowid--;
		if ($task == 'Next') 	 $rowid++;
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
			$last_rowid = $rowid;
			} 
		break;


//add
	case 'Add':
		$query = "INSERT INTO $table SET
				  firstname			= '$fname',
				  lastname			= '$lname',
				  role				= '$role',
				  email				= '$email',
				  userid			= '$userid',
				  password			= '$password'";
				  
//				  ,
//				  photo				= '$photo'
				  
		$result = mysqli_query($mysqli, $query);
		if (!$result) {
			$msg = "Query failed [$query]" . mysqli_error($mysqli); 
			$msg_color='red';
			}
		else {
			$rowid = mysqli_insert_id($mysqli);
			$msg = "ROWID $rowid added";
			$last_rowid = $rowid;
			}
		break;
 //change 
	case 'Change':

		/* //	if($password == $confirmpassword){
			
				$query = "UPDATE $table SET
						  firstname			= '$fname',
						  lastname			= '$lname',
						  role				= '$role',
						  email				= '$email',
						  userid			= '$userid',
						  password			= '$password'
						  WHERE rowid		= '$rowid'";
						  
		//				  ,
		//				  photo				= '$photo'

				$result = mysqli_query($mysqli, $query);
				if (!$result) {
					$msg = "QUERY failed [$query]: " . mysqli_error($mysqli);
					$msg_color = 'red';
					}
				else $msg = "ROWID $rowid Updated";
				
		//	}else $msg ='Passwords dont match';

		 */
	break;
		
		
//delete
	case 'Delete':
/*
		$query = "DELETE FROM $table WHERE rowid='$rowid'";
		$result = mysqli_query($mysqli, $query);
		if (!$result) {
			$msg = "Query failed [$query] ". mysqli_error($mysqli);
			$color = 'red';
			}
		else {
			$msg = "ROWID $rowid deleted";
			$last_rowid = $rowid = $fname = $lname = $role = $email = $userid = $password =$photo = NULL;
			}
		break; 
*/   
	
	default:
    }	



/* // getting an error here...
// switch out $photo in select statment


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

*/





// Output
	echo "<!DOCTYPE HTML><html><body>
	
		  <script>
		  function ConfirmDelete() {
			  var x = confirm('Are you sure you want to delete?');
			  if (x) return true; else return false;
			  }
		  </script>
		  
		  <div $bold>Here you can create an account.</div>\n";
		  
//display inputs		  
	echo "<p><form action='$pgm' method='post' enctype='multipart/form-data'>
		  <input type='hidden'			 name='last_rowid'	 value='$last_rowid'>
		  <table   align='center'>";
		  
/* 		  <tr><td $bold>Rowid</td>
              <td><input type='text'	 name='rowid'  value='$rowid' size='09'></td></tr>
*/
echo		  "<tr><td $bold>First Name</td>
			  <td><input type='text'	 name='fname'  value='$fname' size='15'></td></tr>  
		  <tr><td $bold>Last Name</td>
			  <td><input type='text'	 name='lname'  value='$lname' size='15'></td></tr>
		  <tr><td $bold>Role</td>
			  <td><select name='role'>";
			  

			  
		//Role drop down
			foreach($ctgys as $value) {
				if ($value == $role) $se = 'SELECTED'; else $se = NULL;
				echo "<option $se>$value</option>\n";
				}
				
		
	echo "</select></td></tr>
		  <tr><td $bold>Email</td>
			  <td><input type='email'	 name='email' 	value='$email' size='40' maxlength='50'></td></tr>
		  <tr><td $bold>User ID</td>
			  <td><input type='text'	 name='userid' 	 value='$userid' size='15'></td></tr>
		  <tr><td $bold>Password</td>
			  <td><input type='password' name='password'   value='$password'  size='25'></td></tr>";
			  
//hide because not working			  
//echo"			  <tr><td $bold>Photo</td>
//				<td>[$photo]<input type= 'file' name ='photo'</tr>";
			  
			  
echo"		  </table>";
		  
		  
		  // add password confirmation
/*
		  <tr><td $bold>Confirm Password</td>
			  <td><input type='password' name='confirmpassword'   value='$confirmpassword'  size='25'></td></tr>
		  
			  <tr><td><input type='checkbox' onclick = 'showPassword()'>Show Password	</td></tr>
*/		  
		  

		  
// Action Bar

/*
     echo "<p><table><tr><td>
		  <input type='submit' name='task' value='Show' style='background-color:lightblue;font-weight:bold;'>
 */		  
echo "<p><table><tr><td>
		  <input type='submit' name='task' value='Add' style='background-color:lightgreen;font-weight:bold;'>";
		  
/* 
		  <input type='submit' name='task' value='Change' style='background-color:orange;font-weight:bold;'>
		  
		  <input type='submit' name='task' value='Delete' 
		  style='background-color:red;font-weight:bold;' onclick='return ConfirmDelete();'>&nbsp;&nbsp;&nbsp;
		  
		  <input type='submit' name='task' value='Clear' style='background-color:white;font-weight:bold;'>&nbsp;&nbsp;&nbsp;
		  
	  	  <input type='submit' name='task' value='Previous' style='background-color:pink;font-weight:bold;'>
		  
	      <input type='submit' name='task' value='Next' style='background-color:yellow;font-weight:bold;'> 
*/
		  
echo		  "</td></tr></table></form>";
		  
//		  <p><a href='$pgm2'><button style='color:white; background-color:green; font-weight:bold;'>Return to Roster Listing</button></a>";
	
// Message
    echo "<p><table><tr>
		  <td $bold>MESSAGE: </td>
		  <td style='color:$msg_color;'>$msg</td>
		  </tr></table>"; 
		 



//end the body and the html here?? but its in the header footer

		 
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

















include('_Includes/footer.php'); 
	
?>