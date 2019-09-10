<?php
	$host='localhost';
	$user='yoojh08';
	$pw='wwe1161@';
	$db='yoojh08';
	
	$conn=mysqli_connect($host, $user, $pw, $db);
	mysqli_set_charset($conn,'utf8');

	if($conn)
		echo "연결성공";
	else
		echo "연결실패";

?>
