<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1 BackEnd</title>
</head>
<body>
    
<h1>Tarea N°2 - Programación</h1>
<h3>Backend Developer</h3>
<br>
<hr>
<br>
<?php
$mensaje = "Hola Mundo";
echo $mensaje;
?>
<br>
<br>
<hr>
<br>
<h3>CADENA DE CARACTERES</h3>
<?php
$string_msj = 'Hola Mundo';
echo $string_msj;
?>
<br>
<br>
<hr>
<br>
<h3>VARIABLES ENTERAS + OPERACIONES</h3>
<h4>Valores:</h4>
<?php
$Entero01 = 90;
$Entero02 = 10;
?>
<?php
echo $Entero01;
?>
<br>
<?php
echo $Entero02;
?>
<?php
$resultadoSUMA = $Entero01 + $Entero02;
$resultadoRESTA = $Entero01 - $Entero02;
$resultadoMULT = $Entero01 * $Entero02;
$resultadoDIV = $Entero01 / $Entero02;
$resultadoRESTO = $Entero01 % $Entero02;
?>
<br>
<br>
<h5>Suma</h5>
<?php
echo $resultadoSUMA;
?>
<br>
<h5>Resta</h5>
<?php
echo $resultadoRESTA;
?>
<br>
<h5>Multiplicación</h5>
<?php
echo $resultadoMULT;
?>
<br>
<h5>División</h5>
<?php
echo $resultadoDIV;
?>
<br>
<h5>Resto</h5>
<?php
echo $resultadoRESTO;
?>
<br>
<br>
<hr>
<br>
<h3>TRANSFORMAR °CELSIUS A °FAHRENHEIT</h3>
<?php
$temperaturaCLS = 20;
$formMULTIP = 9;
$formDIV = 5;
$formSUMA = 32;
$resultPARC1 = $temperaturaCLS * $formMULTIP;
$resultPARC2 = $resultPARC1 / $formDIV;
$temperaturaFAHR = $resultPARC2 + $formSUMA;
?>
<br>
<h5>Temperatura en °Celsius = </h5>
<?php
echo $temperaturaCLS;
?>
<br>
<h5>Equivale a °Fahrenheit = </h5>
<?php
echo $temperaturaFAHR;
?>
<br>
<br>
<hr>
<br>
<h3>ALGORITMOS</h3>
<h4>Área de un rectángulo</h4>
<h5>Base = 18cm</h5>
<h5>Altura = 12cm</h5>
<?php
$baseRECT = 18;
$alturaRECT = 12;
?>
<h5>Área (cm2) = </h5>
<?php
echo $baseRECT * $alturaRECT;
?>
<br>
<br>
<h4>Perímetro y Área de un círculo (cm)</h4>
<h5>Radio = 30cm</h5>
<?php
$radioCIRC = 30;
$constPI = 3.14159265;
?>
<h5>Perímetro (cm) = </h5>
<?php
echo $radioCIRC * 2 * $constPI;
?>
<h5>Área (cm2) = </h5>
<?php
echo $radioCIRC ** 2 * $constPI;
?>
<br>
<br>
</body>
</html>