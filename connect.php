<?php>

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "anamititelu";
$dbname = "crud";

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); // conectarea la baza de date

if (!$connect) {
    die('Nu s-a conectat la baza de date!');
}