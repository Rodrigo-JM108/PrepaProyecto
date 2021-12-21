<?php
    $servidor = "localhost";
    $usuario = "root";
    $password = "12345";
    $db = "prepa18122021";

    $conexion = mysqli_connect(
        $servidor,
        $usuario,
        $password,
        $db) OR DIE
        ("No se puede conectar......".mysqli_connect_error());
?>
