<?php
	include_once 'connect.php';
	$id = $_POST['id'];
	$nume = $_POST['nume'];
	$victorii = $_POST['victorii'];
	$remize = $_POST['remize'];
	$golaveraj = $_POST['golaveraj'];
	$sqli = "INSERT INTO echipa (EchipaID, NumeEchipa, NumarVictorii, NumarRemize, Golaveraj) VALUES ('$id', '$nume', '$victorii', '$remize', '$golaveraj');";
	mysqli_query($db, $sqli); 
	header("Location: insert_team.php ? signup = succes");

?>