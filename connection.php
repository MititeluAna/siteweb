<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "anamititelu";
$dbname = "login";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); // conectarea la baza de date

if (!$con){
    die('Nu s-a conectat la baza de date!');
}
