<?php
$ts = 1509979200;
$date = new DateTime("@$ts");
echo $date->format('d-m-Y | H:i:s | l') . "\n";
?>