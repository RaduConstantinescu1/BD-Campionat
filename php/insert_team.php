<?php
	include 'connect.php';
?>

</html>
<!DOCTYPE html>
<html>
  <head>
    <title>Team registration form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link rel = "stylesheet" type = "text/css" href = "../css/style2.css">
    
  </head>
  <body>
    <div class="main-block">
      <div class="left-part">
        <div class = "logo">
			<img src = "../css/logo2.png">
		</div>
        <h1>Team registration</h1>
        <div class="btn-group">
          <a class="btn-item" href="clubs.php">Go back</a>
        </div>
      </div>
      <form action = "team_sign_up.php" method = "POST" autocomplete = "off">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Register here</h2>
        </div>
        <div class="info">
          <input type="text" name="id" placeholder="ID echipa">
          <input type="text" name="nume" placeholder="Nume echipa">
          <input type="text" name="victorii" placeholder="Numar victorii">
          <input type="text" name="remize" placeholder="Numar remize">
		  <input type="text" name="golaveraj" placeholder="Golaveraj">
        </div>
        <button type="submit" name = "submit" >Submit</button>
      </form>
    </div>
  </body>
</html>			