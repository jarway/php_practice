<?php
	require_once('./tools/db_tools.php');
	header("Content-type: text/html; charset=utf-8");

	$account = $_POST['account'];
	$password = $_POST['password'];

	$db_tools = new Db_tools('localhost', 'root', 'mypassword');
	$db_tools->select_db('andy_db');

	$sql = "SELECT * FROM users where account = '$account' AND password = '$password'";	
	$users = $db_tools->query($sql);
?>

<?php if (count($users)): ?>
	<?php
		setcookie('account', $users[0]['account']);
		setcookie('passed', 1);
		header('location:main.php');	
	?>
<?php else: ?>
	<script type="text/javascript">
		alert("Wrong account or password!\nPlease try again.");
		history.back();
	</script>
<?php endif; ?>