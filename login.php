<!DOCTYPE html>
<html>
	<head>
		<title>My First php login page</title>
		<link rel="stylesheet" type="text/css" href="style.css"></link>
	</head>

	<body>
		<div class="container">
			<img src="men.png" />
			<form method="post" >
				<div class="font-input">
					<input type="text" name="username" placeholder="Enter Username">
				</div>
				<div class="font-input">
					<input type="password" name="password" placeholder="Enter Password">
				</div>
				<input type="submit" name="submit" value="Login" class="btn-login"><br>
				<a href="#"><p>forget password?</p></a>
			</form>
		</div>
	</body>
</html>


<?php

mysql_connect("localhost","root","");
mysql_select_db('login');

if(isset($_POST['submit'])){
	$user = $_POST['username'];
	$psd = $_POST['password'];

	$query = "insert into loginpage (user_name,psdd) values ('$user','$psd')";

	if(mysql_query($query)){

	}
}
?>
