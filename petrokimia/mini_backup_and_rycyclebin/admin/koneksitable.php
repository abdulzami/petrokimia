<?php  
	$db = new mysqli('localhost','root','','petrokimia');
		if($db->connect_errno)
		{
			echo $db->connect_error;
			die('ada kesalahan');
		}
?>