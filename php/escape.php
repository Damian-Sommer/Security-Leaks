<?php
echo "Hello World, this is a simple XSS sample.";
echo "</br>";
// Escaped PHP-Code doesn't execute JavaScript
echo "Escaped: ";
echo htmlspecialchars($_GET["username"]);