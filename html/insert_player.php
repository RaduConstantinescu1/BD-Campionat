<?php
	include 'connect.php';
?>

</html>
<!DOCTYPE html>
<html>
  <head>
    <title>Player registration form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link rel = "stylesheet" type = "text/css" href = "css/style3.css">
    
  </head>
  <body>
    <div class="main-block">
      <div class="left-part">
        <div class = "logo">
			<img src = "css/logo3.png">
		</div>
        <h1>Player registration</h1>
        <div class="btn-group">
          <a class="btn-item" href="clubs.php">Go back</a>
        </div>
      </div>
      <form action = "player_sign_up.php" method = "POST" autocomplete = "off">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Register here</h2>
        </div>
        <div class="info">
          <input type="text" name="id" placeholder="ID jucator">
          <input type="text" name="echipa_id" placeholder="ID echipa">
          <input type="text" name="prenume" placeholder="Prenume">
          <input type="text" name="nume" placeholder="Nume">
		  <input type="text" name="varsta" placeholder="Varsta">
        </div>
        <button type="submit" name = "submit" >Submit</button>
      </form>
    </div>
  </body>
</html>			