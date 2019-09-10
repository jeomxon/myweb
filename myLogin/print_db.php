<?php
	include './db_info.php';
	echo "<br>";
	$username = $_POST['user_name'];
	$userid = $_POST['user_id'];
	$userpw = $_POST['user_pw'];
	$birthyear = $_POST['user_birth_year'];
	$birthmonth = $_POST['user_birth_month'];
	$birthday = $_POST['user_birth_day'];
	$sex = $_POST['check_sex'];

	$sql = "insert into member_table (name, id, pw, year, month, day, sex) values ('$username', '$userid', '$userpw', '$birthyear', '$birthmonth', '$birthday', '$sex')";
	mysqli_query($conn, $sql);
?>
<meta charset = "utf-8" />
<script type = "text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv = "refresh" content = "0 url=./login.html">

