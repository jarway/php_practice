<?php
	if (! isset($_COOKIE['passed']) || ! isset($_COOKIE['account']))
		header('location:index.php');
		
	require_once('./tools/db_tools.php');
	$db_tools = new Db_tools('localhost', 'root', 'mypassword');
	$db_tools->select_db('andy_db');
	
	$user_name = $_POST['user_name'];
	$user_age = $_POST['user_age'];
	
	$account = $_COOKIE['account'];
	$sql = "UPDATE users SET name='$user_name', age=$user_age WHERE account = '$account'";
	$result = $db_tools->query($sql);
	
	header('location:main.php');
?>