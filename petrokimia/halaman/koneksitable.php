<?php  
	$db = new mysqli('localhost','root','','petro');
		if($db->connect_errno)
		{
			echo $db->connect_error;
			die('ada kesalahan');
		}
?>