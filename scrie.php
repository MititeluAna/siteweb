<?php
$myfile = fopen("fisier.txt", "a") or die("Nu poate fi deschis!");
$txt = "buna ziua\n";
fwrite($myfile, $txt);
fclose($myfile);
?>