<html>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
</head>
<body>
    <?php
    	require_once("db_tools.php");
    	$db_tools = new Db_tools('localhost', 'root', 'mypassword');
    	$db_tools->select_db('member');
    	echo 'body<br />';
    ?>
</body>
</html>