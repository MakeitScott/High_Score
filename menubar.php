<?php
/*
***		Written By: Scott Pietras
*	menubar.php - include file for the menu bar
*	
*			include('menubar.php');
*	
*	different options for Guest, User, and Admin
*	
*	
*	
*	
***		
*/


/*
***		Backlog ::todo
*	
* * * *	move menubar to Includes folder  upate all other files
*	
*	find function that will remove underscore and replace with a space			YES
*	https://www.w3schools.com/Php/func_string_str_replace.asp
*	
*	create login button does not show unless you are a guest YES
*	
*
***		
*/




// Varaiables 
// for menu bar links 
	$pages		= array('home' 			=> 'mediumslateblue', 
//						'public' 		=> 'aqua', 
						'roster' 		=> 'gold', 
//						'faculty'		=> 'orangered',						
						'profile'		=> 'turquoise',
//						'your_grades'	=>	'orangered',
//						'assignments'	=> 'red',
//						'assigngrades'	=> 'aqua',
//						'admin_roster'	=> 'magenta'
//						'class_grades'	=> 'magenta',
						'games'			=> 'magenta',
						'Create_Account'=> 'orange',
						'roster_update'	=>	'lime',
//						'template'		=> 'magenta',						
						'Snake'			=> 'magenta',						
						'login' 		=> 'plum'	);



// restricted pages

// if loging required			include('check_login.php');	

	$restricted	= array('roster', 'profile','your_grades');


//if role 						include('check_role.php');


	$role_pages = array(/*'faculty',  /*'admin_roster',*/ 'roster', 'roster_update','assigngrades','class_grades','Snake' );
	$role_value = 'Admin'; 

//hide if logged in
	$hide_this	= array('Create_Account');



// Output
	echo "<p><table align='center' cellpadding='5'><tr>";
	foreach($pages as $key => $value) {

			if 			(($key == 'login') 		AND ($login)) $key = 'logoff';		
			

			
			if (in_array($key, $restricted) 	AND (!$login)) continue;	
			
			if (in_array($key, $hide_this) 	AND ($login)) continue;    // hide the key in this array if you are logged in
			
			if (in_array($key, $role_pages)		AND ($role != $role_value)) continue;
			
			
/* // 
			echo "<td><a href='$key.php'>
			  <button style='background-color:$value; font-weight:bold;'>" . ucfirst($key) . "</button>
			  </a></td>\n";
		}
		 */
		 
	//	::todo			 a function that removes the underscore in the filename for the title 
			echo "<td><a href='$key.php'>
			  <button style='background-color:$value; font-weight:bold;'>" . str_replace("_"," ",ucfirst("$key")) . "</button>
			  </a></td>\n";
		}// end for each 
		
		
	
		
/* 	// hide "Create Account" button if logged in   NOT 'Create_Account'

		if (!$login){
			echo "<td><a href='Create_Account.php'>
			  <button style='background-color: orange; font-weight:bold;'> Create Account </button>
			  </a></td>\n";
		}
 */		
		
		// end the menu bar table and <p> for a space under the menubar
	echo "</tr></table><p>"; 
?>