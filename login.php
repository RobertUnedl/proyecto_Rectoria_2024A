<?php

require 'config.php';




$user = '@'.mysqli_real_escape_string($con, $_POST['nombreUsuario']);
$password = mysqli_real_escape_string($con, $_POST['password']);

$password = sha1($password);


$query="SELECT nombreUsuario, password FROM usuario u WHERE u.nombreUsuario like '".$user."' AND u.password like '".$password."'";

$resul = mysqli_query($con, $query);

echo $query;

if (mysqli_num_rows($resul) == true) {
    session_start();
    
    while ($row = mysqli_fetch_array($resul)) {
        $_SESSION['nombreUsuario'] = $row['nombreUsuario'];
        $_SESSION['password'] = $row['password'];
    }
    echo "true";
}else{
    echo "false";
}

?>
