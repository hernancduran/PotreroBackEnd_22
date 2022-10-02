<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea #5 - Matrices</title>
</head>
<body>
    <h2 style="color: red">Ejercicios</h2>
    <br>
    <h3>#1 - Almacenar en un array los 10 primeros números pares 
        y mostrar en pantalla uno debajo del otro</h3>
    <?php   
    $numpar = [2,4,6,8,10,12,14,16,18,20];
    print_r ($numpar);
?>
<br>
    <h3>#2 - Crear un array e introducir los siguientes valores: 
        Pedro, Ana, 34 y 1, sin asignar el índice de la
matriz. Mostrar el esquema del array con print_r()</h3>
    <?php   
    $data2 = ["Pedro","Ana",34,1];
    print_r ($data2);
?>
<h3>#3 - Crear un array asociativo e introducir los siguientes valores:</h3>
<h3>Nombre: Pedro</h3>
<h3>Apellido: Torres</h3>
<h3>Dirección: Av. Mayor 3703</h3>
<h3>Teléfono: 1122334455</h3>
    <?php   
    $data_asoc = ['Nombre'=>"Pedro", 'Apellido'=>"Ana",
    'Direccion'=>"Av. Mayor 3703",'Telefono'=>"1122334455"];
?>
<h3>#4 - CCrear un array introduciendo las ciudades: Madrid, Barcelona, 
    Londres, New York, Los Ángeles y Chicago, sin asignar índices 
    al array. A continuación, muestra el contenido del array.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid</h3>
<?php   
    $data_ciudad = ["Madrid", "Barcelona", "Londres", "New York", 
    "Los Angeles", "Chicago"];
    foreach ($data_ciudad as $indice0 => $dato0) {
        print "<p> La ciudad con el índice $indice0 tiene el nombre de $dato0 </p>\n";
    }
?>
<h3>#5 - Repite el ejercicio anterior pero ahora se ha de crear índices, 
    MD para Madrid, BCL para Barcelona, LD para Londres, 
    NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD</h3>
<?php   
    $data_ciudad1 = ['MD'=>"Madrid", 'BCL'=>"Barcelona", 
    'LD'=>"Londres", 'NY'=>"New York", 'LA'=>"Los Angeles", 
    'CCG'=>"Chicago"];
    foreach ($data_ciudad1 as $indice1 => $dato1) {
        print "<p> el indice de $dato1 es $indice1</p>\n";
    }
?>
</body>
</html>