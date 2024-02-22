<?php

require_once 'connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `stiri` WHERE `stiri`.`id` = '$id'");

header("Location:server.php");