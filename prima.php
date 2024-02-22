<?php
session_start();

     include("connection.php");
	   include("functions.php");

	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css"> 
  <script src="script.js"></script>
</head>

<body bgcolor = "ivory" text = "black">
   
  <div class="topnav">
    <nav>
    <ul>
      <li><a href="prima.php">Acasa</a></li>
      <div class="dropdown">
        <li><button onclick="myFunction()" class="dropbtn">Tipul noutatii</button>
        <div id="myDropdown" class="dropdown-content">
          <a href="sport.html">Sport</a>
          <a href="politica.html">Politica</a>
          <a href="stiinte.html">Stiinte</a>
        </div> </li>
    </div> 
      <li><a href="tv.html">Programul TV</a></li>
      <li><a href="contact.html">Contacte</a></li>
      <li><a href="index.php">Trimite stirea ta</a></li>
      <li><a href="logout.php">Iesire</a></li>
  </ul>
</nav>

</div>
</div>
    <div class="img"></div>
    <div class = "center">
      <div class ="title"> Stiri de utlima ora din intreaga Moldova</div>
      <div class ="sub_title">Le gasesti aici</div>
    </div>
</body>
</html>
