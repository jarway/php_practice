<?php	
	if (isset($_COOKIE['passed']))
		header('location:main.php');
?>
<html>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Account Management System</title>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>
    <script type="text/javascript">
	$(document).ready(function() {
		$("#btnLogin").click(function() {
			var account = $("#account").attr("value");
			var password = $("#password").attr("value");

			if (account.length === 0 || password.length === 0) {
				alert("Data empty!");
				if (account.length === 0)
					$("#account").focus();
				else
					$("#password").focus();
				return;
			}
				
			formLogin.submit(); //can also use: document.formLogin.submit();
		});	
	});
    </script>
</head>
<body>

<form name="formLogin" action="checkpwd.php" method="post">
	Account : <input type="text" name="account" id="account" /><br />
	Password: <input type="password" name="password" id="password" /><br />
	<input type="button" value="login" onclick="formLogin.submit()">
	<input type="reset" value="reset">
</form>

</body>
</html>