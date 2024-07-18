<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Crear cuenta</title>
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

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/icon_unedl.png" alt="">
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Crear una cuenta</h5>
                    <p class="text-center small">Ingrese sus datos personales para crear una cuenta</p>
                  </div>
 
                    <?php
                    include 'config.php';
                    include 'Registro_Persona.php';
                    ?>
                    
                  <form class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Nombre</label>
                      <input type="text" name="name" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Por favor ingresa tu nombre.</div>
                    </div>
                      
                    <div class="col-12">
                      <label for="yourApellidoP" class="form-label">Apellido Paterno</label>
                      <input type="text" name="apellidoP" class="form-control" id="yourApellidoP" required>
                      <div class="invalid-feedback">Por favor ingresa tu apellido paterno.</div>
                    </div>
                      
                    <div class="col-12">
                      <label for="yourApellidoM" class="form-label">Apellido Materno</label>
                      <input type="text" name="apellidoM" class="form-control" id="yourApellidoM" required>
                      <div class="invalid-feedback">Por favor ingresa tu apellido materno.</div>
                    </div>

                    
                      
                        <div class="col-12">
                        <label class="col-sm-2 col-form-label">Cargo</label>
                        <div name="Cargo" class="col-sm-10">
                            <select  class="form-select" aria-label="Default select example">
                                <option selected>Selecciona una opcion</option>
                                <option value="0">Alumno</option>
                                <option value="1">Maestro</option>
                                <option value="2">Control Escolar</option>
                                <option value="3">Coordinacion</option>
                                <option value="4">Vicerrectoria</option>
                                <option value="5">Rectoria</option>
                            </select>
                            <div class="invalid-feedback">Por favor elige una opcion.</div>
                        </div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Nombre de usuario</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Por favor ingresa tu nombre de usuario.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Contraseña</label>
                      <input type="password" name="password" class="form-control" id="yourPasssword" required>
                      <div class="invalid-feedback">Por favor ingresa tu Contraseña</div>
                    </div>
                      
                    <div class="col-12">
                        <label for="yourdop" class="form-label">Fecha de nacimineto</label> 
                        <input type="date" name="doB" class="form-control" id="yourdaB" required>
                        <div class="invalid-feedback">Por favor ingresa tu fecha de nacimiento</div>
                    </div>
                   
                      
                    <div class="col-12">
                        <label class="col-sm-2 col-form-label">Sexo</label>
                        <div class="col-sm-10">
                            <select name="genero" class="form-select" aria-label="Default select example">
                                <option selected>Selecciona una opcion</option>
                                <option value="1">Hombre</option>
                                <option value="2">Mujer</option>
                                <option value="3">Otro</option>
                            </select>
                            <div class="invalid-feedback">Por favor elige una opcion.</div>
                        </div>
                    </div>
                      
                    <div class="col-12">
                        <label for="yourRFC" class="form-label">RFC</label>
                        <input type="text" name="RFC" class="form-control" id="yourRFC" required>
                        <div class="invalid-feedback">Por favor ingresa tu RFC.</div>
                    </div>
                      
                      
                    <div class="col-12">
                        <label for="yourCURP" class="form-label">CURP</label>
                        <input type="text" name="CURP" class="form-control" id="yourCURP" required>
                        <div class="invalid-feedback">Por favor ingresa tu CURP.</div>
                    </div>
 
                      

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">Estoy de acuerdo y acepto los <a href="#">terminos y condiciones</a></label>
                        <div class="invalid-feedback">Debes aceptar antes de enviar</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" name="btnRegistrar" type="submit" value="ok">Crear una cuenta</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">¿Ya tienes una cuenta? <a href="index_login.php">Login</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>