<?php

//Validacion de Campos
if(!empty($_POST["btnResgistrar"])){
    
    if (!empty($_POST["nombre"]) && !empty($_POST["apellidoP"]) && !empty($_POST["apellidoM"]) && !empty($_POST["tipoUsuario"]) 
        && !empty($_POST["nameUser"]) && !empty($_POST["password"]) && !empty($_POST["doB"]) && !empty($_POST["genero"])
        && !empty($_POST["terms"]) && !empty($_POST["RFC"]) && !empty($_POST["CURP"])) {
        
        $nombre=$_POST["nombres"];
        $apellidoP=$_POST["apellidoP"];
        $apellidoM=$_POST["apellidoM"];
        $cargo=$_POST["tipoUsuario"];
        $username=$_POST["nombreUsuario"];
        $password=$_POST["password"];
        $doB=$_POST["dob"];
        $genero=$_POST["genero"];
        $RFC=$_POST["RFC"];
        $CURP=$_POST["CURP"];
      
        $sql = $conexion->query("INSERT INTO usuario(nombres, apellidoP, apellidoM, tipoUsuario, nombreUsuario, password ,dob , genero, RFC, CURP, pathRFC, pathCURP)"
        . "VALUES('$nombre', '$apellidoP', '$apellidoM', '$cargo', '$username', '$password', '$doB', '$genero', '$RFC', '$CURP','/path/to/RFC','/path/to/CURP');");
        
        if ($sql==1) {
    
            echo '<div class="alert alert-succes">Usuario Registrado Correctamente</div>';
        }else{
            echo '<div class="alert alert-danger">Usuario no Resgistrado</div>';
        }
        
    }else{
        echo 'Por favor llena todos los campos!!!';
    }
}

?>