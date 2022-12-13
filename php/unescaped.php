<?php
echo "Hello World, this is a simple XSS sample.";
echo "</br>";
// Unescaped PHP-Code executes JavaScript
echo "Benutername: ".$_GET["username"];
echo "</br>";