<?php
// File Upload Function
// Written by Charles Kaplan, November 2015

// INPUTS
// $input 		- HTML INPUT element name for uploaded file
// $dir 		- Directory for uploaded file
// $filename	- Filename for uploaded file
// $extns		- Valid extensions for uploaded file (array)
// $maxsize		- Maximum file size of uploaded file

// Outputs
// 1st Parameter - Error Code, 0 = Success, >0 = Failure
// 2nd Parameter - dir/filename.ext of saved file or Error Message 	 	

function upload($input, $dir, $file, $extns, $maxsize) {
	$msg = NULL;
	$rc = 0;
	if (isset($_FILES[$input]['tmp_name'])) {
		if (is_uploaded_file($_FILES[$input]['tmp_name'])) {
			$fn = $_FILES[$input]['name'];// get the oringinal file name 
			$ext = trim(strtolower(strrchr($fn, '.')));// check to see if the extention is a valid extention 
			if (!in_array($ext, $extns)) 
				{$msg = "Invalid File Type"; $rc = 10;}		// if its not valid  send an error 
			if ($_FILES[$input]['size'] > $maxsize) // make sure the file size is less than the max size
				{$msg = "Uploaded file size [" . $_FILES[$input]['size'] . "] exceeds limit [$maxsize]"; $rc = 11;}
			if (substr($dir, -1, 1) != '/') $dir .= '/';// check the last character is not a /  add a slash
			if (!is_dir($dir)) // is it going into a valid directory 
				{$msg = "Invalid Directory [$dir]"; $rc = 13;}
			$savefile = $dir . strtolower($file) . $ext;
			if ($rc == 0) {
				$result = move_uploaded_file($_FILES[$input]['tmp_name'], $savefile);
				if ($result > 1)
					{$msg = "Move Uploaded File Failed"; $rc = $result;}
				}
			}
		else {$msg = "No Uploaded File"; $rc = 12;}
		}
	else {$msg = "No Uploaded File"; $rc = 12;}
	
	if ($rc == 0) 	return(array($rc, $savefile));
	else 			return(array($rc, $msg));
	}
?>