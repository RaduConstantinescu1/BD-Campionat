<?php
	include_once 'connect.php';
	$nume = $_POST['nume'];
	$sqli = "DELETE FROM jucator WHERE Nume = '$nume'";
	mysqli_query($db, $sqli); 
	header("Location: ../players.php ? deleted = succes");
?>
