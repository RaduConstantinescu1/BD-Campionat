<!DOCTYPE html>
<?php
include_once 'connect.php';
?>
<html>
<head>
	<title>Stats</title>
	<link rel = "stylesheet" type = "text/css" href = "css/style4.css">
</head>
<body>
<form method = "POST", action = "home.php">
<button class = "button4" type = "submit" >Home</button>
</form>  
<h1>Clasament</h1>
<?php
	$sqli = "SELECT * FROM echipa ;";
	$result = mysqli_query($db, $sqli);
	$sqli = "UPDATE echipa SET Punctaj = 3*NumarVictorii+NumarRemize";
	mysqli_query($db, $sqli);
	$sqli = "SELECT * FROM echipa ORDER BY Punctaj DESC";
	$result = mysqli_query($db, $sqli);
	$result_check = mysqli_num_rows($result);
	echo "<table>";
	echo "<tr><td>Nume echipa</td><td>Punctaj</td></tr>";
	if($result_check > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr><td>".$row['NumeEchipa']."</td><td>".$row['Punctaj']."</td></tr>";
		}
		echo "</table>";
	}
?>
</body>
</html>
