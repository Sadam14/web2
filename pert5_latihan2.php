<?php
$file = fopen("pert5_latihan1.php","r");
while(! feof($file))
 {
 echo fgets($file). "<br />";
 }
fclose($file);
?> 