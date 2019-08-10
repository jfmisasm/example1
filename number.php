<?php
$xml=simplexml_load_file("note.xml") or die("Error: Cannot create object");
$nation1 = $xml->primero;
$nation2 = $xml->segundo;
$nation3 = $xml->tercero;

$suma = $nation1 + $nation2 + $nation3;

?>