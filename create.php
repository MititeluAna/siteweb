<?php
require_once 'connect.php';

$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$email = $_POST['email'];
$continut = $_POST['continut'];

mysqli_query ($connect, "INSERT INTO `stiri` (`id`, `nume`, `prenume`, `email`, `continut`) VALUES ( NULL, '$nume', '$prenume', '$email', '$continut')");

header('Location:index.php');