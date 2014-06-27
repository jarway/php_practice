<html>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
</head>
<body>
    <?php
    	require_once("db_tools.php");
    	$db_tools = new Db_tools('localhost', 'root', 'mypassword');
    	$db_tools->select_db('adamdb');
    	$result = $db_tools->query('SELECT * FROM categories');
    	var_dump($result);
    	echo 'body<br />';
    ?>
</body>
</html>