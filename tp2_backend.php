<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2 BackEnd</title>
</head>
<body>
<h1>Tarea N°3 - Estructuras de Control</h1>
<h3>Backend Developer</h3>
<br>
<hr>
<br>
<h4>1.- Validar un número positivo</h4>
<?php
$n01 = 1;
if ($n01 > 0) {
    echo "$n01 es un número positivo";
}
?>
<br>
<hr>
<br>
<h4>2.- Doble Validación "y"</h4>
<?php
$n02 = 7;
if ($n02 > 1) {
    echo "$n02 es mayor que 1";
}
    if ($n02 < 10) {
        echo " y es menor que 10";
    }
?>
<br>
<hr>
<br>
<h4>3.- Doble Validación "o"</h4>
<?php
$n03 = 14;
if ($n03 > 10) {
    echo "$n03 es mayor que 10";
}
    {
        echo " y $n03 NO es menor que 2";
    }
?>
<br>
<hr>
<br>
<h4>4.- Validaciones Varias</h4>
<h5>número 01 = 7</h5>
<h5>número 02 = 16</h5>
<?php
$numero01 = 7;
$numero02 = 16;
$mult01_02 = $numero01 * $numero02;
$div02_01 = intdiv($numero02,$numero01);
$resto02_01 = $numero02 % $numero01;
if ($numero02 > $numero01) {
    echo "multiplica ambos = $mult01_02";
}
{
    echo ", división entera mayor y menor = $div02_01";
    }
{
        echo ", resto de división = $resto02_01";
    }
?>
</body>
</html>