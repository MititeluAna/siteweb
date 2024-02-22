<?php
require_once 'connect.php';

$id = $_POST['id'];
$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$email = $_POST['email'];
$continut = $_POST['continut'];

mysqli_query ($connect, "UPDATE `stiri` SET `nume` = '$nume', `prenume` = '$prenume', `email` = '$email', `continut` = '$continut' WHERE `stiri`.`id` = '$id'");

header('Location:server.php');