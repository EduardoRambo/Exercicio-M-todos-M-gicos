<?php
require_once "vendor/autoload.php";

use App\Model\Calculadora;

$calculadora = new Calculadora;
$calculadora->numero1 = 1;
$calculadora->numero2 = 3;
$calculadora->numero3 = 2;

echo $calculadora;



 ?>
