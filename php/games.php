<!DOCTYPE html>
<html>
<head>
	<title>Games</title>
	<link rel = "stylesheet" type = "text/css" href = "../css/style4.css">
</head>
<body>
<form action = "clubs.php">
<button class = "button3">Go back</button>
</form>  
<?php
	include_once 'connect.php';
	$team1 = $_POST['nume1'];
	$team2 = $_POST['nume2'];
	$sql = "SELECT Echipa1_ID, Echipa2_ID, Echipa1_marcate, Echipa1_primite FROM meci WHERE Echipa1_ID IN( SELECT EchipaID FROM echipa WHERE NumeEchipa = '$team1' or NumeEchipa = '$team2') AND Echipa2_ID IN ( SELECT EchipaID FROM echipa WHERE NumeEchipa = '$team2' or NumeEchipa = '$team1')" ;
	$result = mysqli_query($db, $sql);
	$result_check = mysqli_num_rows($result);
	echo "<h1>Meciuri</h1>"; 
	echo "<table>";
	echo "<tr><td>$team1</td><td>$team2</td><td>Scor</td></tr>";
	if($result_check > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr><td>".$row['Echipa1_ID']."</td><td>".$row['Echipa2_ID']."</td><td>".$row['Echipa1_marcate']." - ".$row['Echipa1_primite']."</td></tr>";
		}
	}
	echo "</table>";
?>
</body>
</html>

