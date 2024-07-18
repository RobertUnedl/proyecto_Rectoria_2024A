<?php
    $server = "localhost";
    $user = "root";
    $pass = "administrador";
    $database_name = "escuela_unedl";

    $conexion = mysqli_connect($server, $user, $pass);

    mysqli_select_db($conexion, $database_name);

?>
