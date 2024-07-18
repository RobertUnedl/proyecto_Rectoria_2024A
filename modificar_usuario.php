<?php



?>

<!DOCTYPE <html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rectoria</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/unedl_img.jpeg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

    <form class="col-4 p-3 m-auto" method="POST">
        <h5 class="text-center alert alert-secondary">Modificar Usuario</h5>
        <?php
        
        ?>
        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label">Apellido Paterno</label>
            <input type="text" class="form-control" name="apellidoP">
        </div>
        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label">Apellido Materno</label>
            <input type="text" class="form-control" name="apellidoM">
        </div>
        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label">Tipo Usuario</label>
            <select name="tipoUsuario" class="form-select" aria-label="Default select example">
                <option selected>Selecciona una opcion</option>
                <option value="0">Alumno</option>
                <option value="1">Maestro</option>
                <option value="2">Control Escolar</option>
                <option value="3">Coordinacion</option>
                <option value="4">Vicerrectoria</option>
                <option value="5">Rectoria</option>
            </select>
        </div>
        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" name="doB">
        </div>
        
        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label">Genero</label>
            <select name="genero" class="form-select" aria-label="Default select example">
                <option selected>Selecciona una opcion</option>
                <option value="1">Hombre</option>
                <option value="2">Mujer</option>
                <option value="3">Otro</option>
            </select>
        </div>
        
        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label">RFC</label>
            <input type="text" class="form-control" name="RFC">
        </div>
        
        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label">CURP</label>
            <input type="text" class="form-control" name="CURP">
        </div>
        
        <button type="submit" class="btn btn-primary" name="btnRegistrar" value="ok">Guardar</button>
    </form>
</body>
</html>


