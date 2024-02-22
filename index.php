<?php

include 'connect.php';

?>

<!DOCTYPE html>
<html lang="ro">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css"> 
  <script src="script.js"></script>
</head>


<body bgcolor = "ivory" text = "black">
<div class="bg">
  <div class="topnav" id="myTopnav">
    <nav>
    <ul>
      <li><a href="prima.php">Acasă</a></li>
      <div class="dropdown">
        <li><button onclick="myFunction()" class="dropbtn">Tipul noutății</button></li>
        <div id="myDropdown" class="dropdown-content">
          <a href="sport.html">Sport</a>
          <a href="politica.html">Politica</a>
          <a href="stiinte.html">Stiinte</a>
        </div>
    </div>
      <li><a href="tv.html">Programul TV</a></li>
      <li><a href="contact.html">Contacte</a></li>
      <li><a href="index.php">Trimite stirea ta</a></li>
      <li><a href="logout.php">Iesire</a></li>
  </ul>
</nav>
  </div>
 
  
    
    <div class="forms">
     <h3 class = "trimite" >Trimite-ne stirea ta</h3>
     <form action="create.php" method="post" class = "form">
        <label for="nume">Nume</label>
        <input type="text" name="nume" required /><br /><br />
        <label for="prenume">Prenume</label>
        <input type="text" name="prenume" required /><br /><br />
        <label for="email">Email</label>
        <input type="email" name="email" required /><br /><br />
        <label for="continut">Continut</label><br>
        
         <textarea class="continutArea" name="continut" required></textarea> <br> <br>
         <button class = "server" type="submit">Trimite stirea</button>
     </form>
    </div>
     
</body>
</html>