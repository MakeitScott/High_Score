<?php
/*
***		Written by Scott Pietras
*	header.php - header Page
*	
*	
*This is the header file included on all pages text formatting and colors here
******* also need to include session above this for header $user and $role variables
*	
* 			/Includes/header.html
*	
*	
***	
*/


/*
***		backlog ::todo
*	
*	does the background color match					::YES
*
*	make the internal style sheet a linked css		::YES
*	
*	
*	*logo on the side put it in the table so nothing gets shifted
*	
*	include session??  then delete include session in all other pages
***		
*/




/* old colors 										::delete
//color from paint 
#68347F

//original color
#6C3082
*/



// Output

	//start the document
echo "<!doctype HTML><html>";



	//header info / style sheet
echo	"<head>
		<title>H&#8593;gh Score</title>";
	
	
echo	"<link href='SP_Styles.css' rel='stylesheet' />";
	
/*  delete this style shieet is linked above		::delete

echo		"<style>
			body{
				color: pink;
				background-color:#68347F;
				}
				h6{
					color:black;
				}
				
				
				a{
					font-size: 1.5em;
				}
				
				
				a:link {
				  color: white;
				  background-color: transparent;
				  text-decoration: underline;
				}
				a:visited {
				  color: black;
				  background-color: transparent;
				  text-decoration: none;
				}
				a:hover {
				  color: #00FF00;
				  background-color: transparent;
				  text-decoration: underline;
				}
				a:active {
				  color: yellow;
				  background-color: transparent;
				  text-decoration: underline;
				}
				
				
		</style>";	
		 */

echo	"</head>";
	

/* logo on the side of the table small figure out how to put it in the table on the side so nothing gets shifted
<a href='home.php'>
					<img src = 'images/highscore_logo.jpg' style='float:left;width:10%;height:10%';></a>
 */
	// keep everything aligned in a table text in the center
echo	"<body>




		  <table width='800' align='center'><tr><td align='center'>";
		  
	// Welcome  
echo	"
This is the H&#8593;gh Score Webpage!
			<p>Welcome $user
			";
				
//AND if youre loged in what is your role (user / admin?)	  
if ($role != NULL) echo ", $role"; 
	
/*Session is required for the role*/




?>