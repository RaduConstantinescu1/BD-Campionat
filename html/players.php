<!DOCTYPE html>
<html>
<head>
	<title>Players</title>
	<link rel = "stylesheet" type = "text/css" href = "css/style4.css">
</head>
<body>
<form action = "clubs.php">
<button class = "button3">Go back</button>
</form>  
<?php
	include_once 'connect.php';
	$id = $_POST['id'];
	$sql = "SELECT * FROM jucator WHERE EchipaID = $id";
	$result = mysqli_query($db, $sql);
	$result_check = mysqli_num_rows($result);
	$sql = "SELECT NumeEchipa FROM echipa where EchipaID = $id";
	$result2 = mysqli_query($db, $sql);
	$row = mysqli_fetch_assoc($result2);
	echo "<h1>Jucatori ".$row['NumeEchipa']."</h1>"; 
	echo "<table>";
	echo "<tr><td>Prenume</td><td>Nume</td><td>Varsta</td></tr>";
	if($result_check > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr><td>".$row['Prenume']."</td><td>".$row['Nume']."</td><td>".$row['Varsta']."</td></tr>";
		}
	}
	echo "<tr><form method = 'POST' action = 'delete_player.php' autocomplete = 'off'><td><a href = 'insert_player.php'>New player</a></td><td><input type = 'text' name = 'nume' placeholder = 'Player name'>
		<input type = 'submit' name = '' value = 'Remove'></td><td></td></form></tr>";
	echo "</table>";
?>
</body>
</html>

