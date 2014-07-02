<?php
	require_once('./tools/db_tools.php');
	header("Content-type: text/html; charset=utf-8");

	$account = $_POST['account'];
	$password = $_POST['password'];
	$user_name = $_POST['user_name'];
	$user_age = $_POST['user_age'];

	$db_tools = new Db_tools('localhost', 'root', 'mypassword');
	$db_tools->select_db('andy_db');

	$sql = "SELECT * FROM users WHERE account='$account'";
	$users = $db_tools->query($sql);
	if (count($users)) {
		echo'
		<script type="text/javascript">
			alert("This account exists!\nPlease try another.");
			history.back();
		</script>';
		return;
	}

	$sql = "INSERT INTO users (account, password, name, age)
			VALUES ('$account', '$password', '$user_name', '$user_age')";
	$db_tools->query($sql);
	
	setcookie('account', $account);
	setcookie('passed', 1);
	header('location:main.php');
?>