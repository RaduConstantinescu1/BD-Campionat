<!DOCTYPE html>
<?php
include_once 'connect.php';
?>
<html>
<head>
	<title>Clubs</title>
	<link rel = "stylesheet" type = "text/css" href = "css/style4.css">
</head>
<body>
<form method = "POST", action = "home.php">
<button class = "button4" type = "submit" >Home</button>
</form>  
<h1>Echipe participante</h1>
<?php
	$sqli = "SELECT * FROM echipa;";
	$result = mysqli_query($db, $sqli);
	$result_check = mysqli_num_rows($result);
	echo "<table>";
	echo "<tr><td>Nume echipa</td><td>Numar victorii</td><td>Numar remize</td><td>Golaveraj</td><td>Numar Jucatori</td></tr>";
	if($result_check > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr><form method = 'POST' action = 'players.php'><td>".$row['NumeEchipa']."</td><td>".$row['NumarVictorii']."</td><td>".$row['NumarRemize']."</td><td>".$row['Golaveraj'];
			$sqli = "SELECT * FROM jucator WHERE EchipaID = '".$row['EchipaID']."'";
			$result2 = mysqli_query($db, $sqli);
			$result_check = mysqli_num_rows($result2);
			echo "<td><input type = 'hidden' name = 'id' value = ".$row['EchipaID']."><button class = 'button2' type = 'submit' style:'cursor:pointer'>".$result_check."</td></form></tr>";
		}
	}
	echo "<tr><form method = 'POST' action = 'delete_team.php' autocomplete = 'off'><td><a href = 'insert_team.php'>New team</a></td><td><input type = 'text' name = 'nume' placeholder = 'Team name'>
	<input type = 'submit' name = '' value = 'Remove'></td><td></td><td></td></form>
	<form method = 'POST' action = 'games.php'><td><input type = 'text' name = 'nume1' placeholder = 'Team1'><input type = 'text' name = 'nume2' placeholder = 'Team2'><input type = 'submit' name = '' value = 'See games'<</td></form></tr>";
	echo "</table>";
?>
</body>
</html> 
    