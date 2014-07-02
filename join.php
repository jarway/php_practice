<?php	
	if (isset($_COOKIE['passed']) && isset($_COOKIE['account']))
		header('location:main.php');
?>
<html>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Account Management System</title>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>
    <script type="text/javascript">
	$(document).ready(function() {
		$("#account").select();
		
		$("#btnJoin").click(function() {
			var account = $("#account").attr("value");
			var password = $("#password").attr("value");
			var user_name = $("#user_name").attr("value");

			if (account.length === 0 || password.length === 0 || user_name.length === 0) {
				alert("Data empty!");
				if (account.length === 0)
					$("#account").focus();
				else if (password.length === 0)
					$("#password").focus();
				else
					$("#user_name").focus();
				return;
			}
				
			formJoin.submit(); //can also use: document.formJoin.submit();
		});	
	});
    </script>
</head>
<body>
	<h1>Welcome to join us!!</h1>
	<form name="formJoin" action="addmember.php" method="post">
		Account : <input type="text" name="account" id="account" /><br />
		Password: <input type="password" name="password" id="password" /><br />
		Name: <input type="text" name="user_name" id="user_name" /><br />
		Age: <input type="text" name="user_age" id="user_age" /><br />
		<input type="button" value="Join" id="btnJoin">
		<input type="reset" value="reset">
	</form>
</body>
</html>