<?php
require_once('1externalFunctions.php');

// add_numbers関数を削除

$a = add_numbers( 84, 37);
$b = add_numbers( 84,-37);
echo "84 + 37 = $a ";
echo "<pre>";
echo "84 - 37 = $b ";
echo "</pre>";
?>