<?php
	if (! isset($_COOKIE['passed']) || ! isset($_COOKIE['account']))
		header('location:index.php');
		
	require_once('./tools/db_tools.php');
	$db_tools = new Db_tools('localhost', 'root', 'mypassword');
	$db_tools->select_db('andy_db');
	
	$account = $_COOKIE['account'];
	$sql = "SELECT * FROM users where account = '$account'";
	$result = $db_tools->query($sql);
	$user = $result[0];
?>
<html>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Account Settings</title>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>
    <script type="text/javascript">
    </script>
</head>
<body>
	<h1><?php echo 'Hello, '.$account.'~'; ?></h1>
</body>
</html>