<?php
	include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel = "stylesheet" type = "text/css" href = "../css/style.css">
</head>
<body>
	<div class = "loginbox">
	<img src = "../css/avatar.png" class = "avatar">
		<h1>Login Here</h1>
		<form method = "POST" action = "" autocomplete = "off">
			<p>Username</p>
			<input type = "text" name = "username" placeholder = "Enter Username">
			<p>Password</p>
			<input type = "password" name = "password" placeholder = "Enter Password">
			<input type = "submit" name = "" value = "Login">	
			<a href = "#">Lost your password?</a><br>
			<a href = "#">Don't have an account?</a>
		</form>
	</div>

<?php
if(isset($_POST['username'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM login WHERE username = '".$username."' AND password = '".$password."' limit 1";
		$result = mysqli_query($db, $sql);
		if(mysqli_num_rows($result) == 1){
			header("Location: home.php");
			exit();
		}
		else{
			header("Location: login_failed.php");
			exit();
		}
}
?>

</body>
</html>
			