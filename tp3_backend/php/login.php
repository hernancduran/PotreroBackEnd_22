<?php
$usuario = $_POST ["user"];
$password = $_POST ["pass"];

$ckuser= "admin";
$ckpass= "1234";

if ($usuario==$ckuser && $password==$ckpass) {
    header ("location: https://www.youtube.com/watch?v=5gSm5tLDZO4");
}
else {
    header ("location: ../html/error.html");
}
?>
