<?php

$celsius = $_POST["celsius"];

$fahrenheit = ($celsius * 9 / 5) + 32;

require_once "view_saida.php";

?>