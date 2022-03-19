<?php
	include_once 'connect.php';
	$nume = $_POST['nume'];
	$sqli = "DELETE FROM echipa WHERE NumeEchipa = '$nume'";
	mysqli_query($db, $sqli); 
	header("Location: clubs.php ? deleted = succes");
?>
