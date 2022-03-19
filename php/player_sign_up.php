<?php
	include_once 'connect.php';
	$id = $_POST['id'];
	$echipa_id = $_POST['echipa_id'];
	$nume = $_POST['nume'];
	$prenume = $_POST['prenume'];
	$varsta = $_POST['varsta'];
	$sqli = "SELECT * FROM jucator WHERE EchipaID = $echipa_id ";
	$result = mysqli_query($db, $sqli);
	$result_check = mysqli_num_rows($result);
	if($result_check < 11){
		$sqli = "INSERT INTO jucator (JucatorID, EchipaID, Nume, Prenume, Varsta) VALUES ('$id', '$echipa_id', '$nume', '$prenume', '$varsta')";
		mysqli_query($db, $sqli); 
		header("Location: insert_player.php ? signup = succes");
	}
	else {
		header("Location: insert_player.php ? signup = failed");
	}

?>