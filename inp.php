<?php
// Check for empty fields
if( empty($_POST['message']))
   {
	echo "Error";
	return false;
   }
   echo $_POST['message']. "FIght ME Kiddo ".$_COOKIE['the_email'];
return true;			
?>
