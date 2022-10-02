<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Est.de Control - Pte.2</title>
</head>
<body>
    
<h2>#1 Mostrar los números del 1 al 100</h2>
<h3 style="color:red">
<?php
$i = 1;
while ($i <= 100) {
    print "$i\n";
    $i++;
}
?>
</h3> 

<h2>#2 Mostrar los números del 100 al 1</h2>
<h3 style="color:green">
<?php
$i = 100;
while ($i > 0) {
    print "$i\n";
    $i--;
}
?>
</h3>
<h2>#3 Mostrar los números pares del 1 al 100</h2>
<h3 style="color:blue">
<?php
$i=2;
while ($i <=100) {
    echo "$i\n";
    $i=$i+2;
}
?>
</h3>
<h2>#4 Mostrar los números impares del 1 al 100</h2>
<h3 style="color:magenta">
<?php
$i=1;
while ($i <=100) {
    echo "$i\n";
    $i=$i+2;
}
?>
</h3>
<h2>#5 Mostrar la suma de los números de 1 a 20</h2>
<h3 style="color:grey">
<?php
$suma=0;
    for ($i=1; $i <=20 ; $i++) { 
        $suma += $i;
        print "$suma\n";
    }
    echo "<p>el -TOTAL- de la suma de los numeros del 1 a 20 es -210-</p>"
?>
</h3>
</h3>
<h2>#6 Mostrar la suma de números pares de 1 a 20</h2>
<h3 style="color:violet">
<?php
$suma=0;
    for ($i=2; $i <=20 ; $i=$i+2) { 
        $suma += $i;
        print "$suma\n";
    }
    echo "<p>el -TOTAL- de la suma de los numeros pares del 1 a 20 es -110-</p>"
?>
</h3>
<p></p>
</body>
</html>