<meta charset="utf-8" />
<?php
	include './db_info.php';

	$id = $_POST['user_id'];

	if($_POST['user_id'] == "" || $_POST['user_pw'] == "") {
		echo '<script> alert("아이디나 패스워드를 입력하세요"); history.back(); </script>';
	}
	else {
		$password = $_POST['user_pw'];
		$sql = "select * from member_table where id='$id'";
		$query = mysqli_query($conn, $sql);
		$member =  mysqli_fetch_array($query);
		$hash_pw = $member["pw"];

		if($password == $hash_pw) {
			session_start();
			$_SESSION['user_id'] = $member["id"];
			$_SESSION['user_pw'] = $member["pw"];
	
			echo "<script>alert('로그인 되었습니다.'); location.href='./login_session.php';</script>";
		}
		else {
			echo "<script>alert('아이디 혹은 비밀번호를 확인하세요.'); history.back();</script>";
		}
	}
?>
