<?php
$conexion=mysqli_connect ($server, $username, $password, $database) or die ("error");

$sql = "SELECT * FROM users";
$resultados = mysqli_query ($conexion, $sql);
$cnt = 0;

while ($myrrow = mysqli_fetch_array($resultados)) {
    $cnt++;
    echo "$cnt -$myrrow[id], $myrrow[email], $myrrow[usuario] <br>";
}

mysqli_close($conexion);
?>