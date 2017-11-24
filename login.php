<?php
session_start();
if(isset($_SESSION['user'])){
	header("location: home.php");
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Administrator</title>
	<link rel="stylesheet" type="text/css" href="dist/style.css">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.theme.css.map">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap-theme.min.css.map">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css.map">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css.map">
</head>
<body>
	<form method="post" name="form_login" id="form_login" action="proses-login.php" style="margin-top: 120px;">
		<table class="form" align="center">
			<tr>
				<td colspan="2">
					<h1 align="center">Login Administrator</h1>
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>
					<input type="text" name="user" id="username" style="width: 90%; height: 20px;" />
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="password" name="pass" id="password" style="width: 90%; height: 20px;"/>
				</td>
			</tr>
			<tr style="height:10px"></tr>
			<tr>
				<td colspan="2" align="right">
					<input type="submit" name="login" id="login" value="Login" class="btn btn-submit" />
				</td>
			</tr>
		</table>
	</form>
</body>
</html>