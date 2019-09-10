<?php
	session_start();
	$_SESSION["user_id"]=$_POST["user_id"];
	echo "{$_SESSION["user_id"]}환영합니다.<br>";
	echo "<a href='logout.php'>로그아웃</a>";
?>
