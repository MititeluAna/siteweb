<?php
require_once 'connect.php';
$stire_id = $_GET['id'];
$stire = mysqli_query ($connect, "SELECT * FROM `stiri` WHERE `id` = '$stire_id'");
$stire = mysqli_fetch_assoc ($stire);
?>

<!DOCTYPE html>
<html lang ="ro">
<head>
    <meta charset ="UTF-8">
    <title>Update stire</title>
</head>
<body>
    <h3>Modifica stire</h3>
    <form action ="update_stire.php" method="post">
        <input type ="hidden" name="id" value="<?= $stire['id'] ?>">
        <p>Nume</p>
        <input type ="text" name ="nume" value="<?= $stire['nume'] ?>">
        <p>Prenume</p>
        <input type ="text" name ="prenume" value="<?= $stire['prenume'] ?>">
        <p>Email</p>
        <input type ="email" name ="email" value="<?= $stire['email'] ?>">
        <p>Continut</p>
        <textarea name = "continut"><?= $stire['continut'] ?></textarea> <br> <br>
        <button type = "submit">Modifica</button>
    </form>  
</body>
</html>