<?php

/* The TDL Group 2016 */
/* counter */

//opens countlog.txt to read the number of hits
$datei = fopen("/countlog.txt","r");
$count = fgets($datei,100000);
fclose($datei);
$count=$count + 1 ;
echo "00$count" ;
echo " " ;
echo "\n" ;

// opens countlog.txt to change new hit number
$datei = fopen("/countlog.txt","w");
fwrite($datei, $count);
fclose($datei);

?>
