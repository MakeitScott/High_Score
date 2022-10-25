<?php
/*
***		Written By: Scott Pietras
*	users.php - roster list Page
*	
*		
*	
*	this will show eveyone and everything from the finalpeople table to admin 
*	
*	
*	but will only show name role email and picture to students
*	
***		
*/


/*
***		Backlog ::todo
*	
*	
*	remove seccond html doc type  top and bottom
*	
*	change Roster to Users
*	
*	
*	
*	
***		
*/




	include('session.php');
	include('check_login.php');

//dont check role
//		include('check_role.php');
	

	include('_Includes/header.php');
	include('menubar.php');
	echo "<p>This is the Roster view Page
		  <p>$user is Logged on and can acess this page with $role view";
		  
		  



// Include
require('mysqli_connect.php');



	
// Variables
	$pgm				= 'users.php'; 		//this program
	$table				= "userinfo"; 

	$bold				= "style='font-weight:bold;'";
	$ctgys				= array(	"Student" => "green",
									"Admin" => "red");
	
	$sorts				= array ('firstname', 'lastname', 'role', 'email');
	



// Get Input Catagory
	if(isset ($_POST['ctgy'])) $ctgy = $_POST['ctgy']; else $ctgy = NULL;
	if ($ctgy == 'All')  $ctgy = NULL;
	
// Get Input Sort	
	if(isset ($_POST['sort'])) $sort = $_POST['sort']; else $sort = 'lastname';
	if ($sort == 'Select') $sort = NULL;
	
// Process Input
	if ($ctgy != NULL) $where = "WHERE role = '$ctgy'";
	else $where = NULL;
	
	switch($sort) {
		case 'firstname': 	$sortby = 'firstname, lastname'; break;
		case 'lastname': 	$sortby = 'lastname, firstname'; break;
		case 'role':		$sortby = 'role, lastname, firstname'; break;
		case 'email': 		$sortby = 'email'; break;
		default: 			$sortby = 'lastname, firstname'; break;
	}
	$sortby = 'ORDER BY ' . $sortby;


// Output

// Create a Query
	$query = "SELECT rowid, firstname, lastname,  email, userid, password ,role, photo FROM $table $where $sortby";
	
// Execute the Query
	$result = mysqli_query($mysqli, $query);
	if (!$result) echo "QUERY [$query]: " . mysqli_error($mysqli);
	
	
	/*
	::todo
	remove seccond html doc type
	
	*/
	
	
	
// Process Query Results
	echo "<!DOCTYPE HTML><html><body>
		  <div $bold>Roster</div>\n";

// Role DropDown
	echo "<p><form action='$pgm' method='post'>
		  Role <select name='ctgy' onchange='this.form.submit()'>
		  <option>All</option>";
	foreach($ctgys as $key => $value){
		if ($key == $ctgy) $se='SELECTED'; else $se = NULL;
		echo "<option $se>$key</option>\n";
		}
	echo "</select>";
	
// Sort By DropDown
	echo " Sort By <select name='sort' onchange='this.form.submit()'>
		  <option>Select</option>";
	foreach($sorts as $value){
		if ($value == $sort) $se='SELECTED'; else $se = NULL;
		echo "<option $se>$value</option>\n";
		}
	echo "</select></form>";	
	
	
	
// Output Phonebook table	
	echo "<p><table border='frame' rules='all' cellborder='5' cellpadding='5'>
		  <tr><td $bold>Name</td>
			  <td $bold>Role</td>		  
			  <td $bold>Email</td>
			  <td $bold>Photo</td>";
			
// admin only				
if($_SESSION['role'] == 'Admin'){	  
	echo 	 "<td $bold>User Name</td>
			  <td $bold>Password</td>
			  <td $bold>Update</td></tr>\n";
}
			  
//display table results
	while(list($rowid, $fname, $lname, $email, $userid, $password, $role, $photo) = mysqli_fetch_row($result)) {
		
		

if ($role == 'Student')$color = 'lime';
else if ($role == 'Admin')$color = 'blue';
else $color = 'black';

		
		echo "<tr><td> $fname $lname</td>
				  
				  <td><font color= '$color'>$role</td>
				  
				  <td><a href='mailto:$email'>
				  <font color= 'gold'>$email</a></td>
				  
				  <td><img src = '$photo' width = '100'></td>";




// admin only results
if($_SESSION['role'] == 'Admin'){
			
		echo	  "<td>$userid</td>
				  <td>$password</td>
				  
				  
				  <td><a href='roster_update.php?r=$rowid'>
				  <font color= 'orange'>UPDATE</a></td>
				  </tr>\n";
				  
	}//end admin only

}//end while loop




// End of Program
	echo "</table>
		  </body></html>";
	mysqli_close($mysqli);



	include('_Includes/footer.php'); 

?>