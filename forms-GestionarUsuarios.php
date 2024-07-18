<!DOCTYPE html>
<html lang="es">
 
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Usuarios</title>
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

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
          <img src="assets/img/icon_unedl.png" alt="">
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <img src="assets/img/Usuario.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Jose Roberto Ayala Gonzalez</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Roberto Ayala</h6>
              <span>Rector</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Perfil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Configuraciones de la cuenta</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>¿Necesitas ayuda?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Desconectar</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Rectoria</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Usuarios</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
              <a href="forms-GestionarUsuarios.php" class="active">
              <i class="bi bi-circle"></i><span>Gestionar Usuarios</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

       <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#alumnos-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-journal-text"></i><span>Alumnos</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="alumnos-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
              <li class="nav-item">
                  <a class="nav-link collapsed" data-bs-target="#ingenieria-nav" data-bs-toggle="collapse" href="#">
                      <i class="bi bi-journal-text"></i><span>Ingenieria de Software</span><i class="bi bi-chevron-down ms-auto"></i>
                  </a>
                  <ul id="ingenieria-nav" class="nav-content collapse">
                      <li>
                          <a href="forms-GestionarAlumnos.php">
                              <i class="bi bi-circle"></i><span>Gestionar Alumnos</span>
                          </a>
                      </li>
                      <li>
                          <a href="forms-CarrerasAlumnos.php">
                              <i class="bi bi-circle"></i><span>Carreras</span>
                          </a>
                      </li>
                      <li>
                          <a href="forms-CalificacionAlumnos.php">
                              <i class="bi bi-circle"></i><span>Calificaciones</span>
                          </a>
                      </li>
                      <li>
                          <a href="forms-DatosAlumnos.php">
                              <i class="bi bi-circle"></i><span>Datos</span>
                          </a>
                      </li>
                      <li>
                          <a href="forms-ColegiaturasAlumnos.php">
                              <i class="bi bi-circle"></i><span>Colegiaturas</span>
                          </a>
                      </li>
                  </ul>
              </li>
              <li class="nav-item">
                  <a class="nav-link collapsed" data-bs-target="#derecho-nav" data-bs-toggle="collapse" href="#">
                      <i class="bi bi-journal-text"></i><span>Derecho</span><i class="bi bi-chevron-down ms-auto"></i>
                  </a>
                  <ul id="derecho-nav" class="nav-content collapse">
                      <li>
                          <a href="forms-GestionarAlumnos.php">
                              <i class="bi bi-circle"></i><span>Gestionar Alumnos</span>
                          </a>
                      </li>
                      <li>
                          <a href="forms-CarrerasAlumnos.php">
                              <i class="bi bi-circle"></i><span>Carreras</span>
                          </a>
                      </li>
                      <li>
                          <a href="forms-CalificacionAlumnos.php">
                              <i class="bi bi-circle"></i><span>Calificaciones</span>
                          </a>
                      </li>
                      <li>
                          <a href="forms-DatosAlumnos.php">
                              <i class="bi bi-circle"></i><span>Datos</span>
                          </a>
                      </li>
                      <li>
                          <a href="forms-ColegiaturasAlumnos.php">
                              <i class="bi bi-circle"></i><span>Colegiaturas</span>
                          </a>
                      </li>
                  </ul>
              </li>
          </ul>
      </li>

       

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Maestros</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
              <a href="forms-AulasMaestros.php">
              <i class="bi bi-circle"></i><span>Aulas</span>
            </a>
          </li>
          <li>
              <a href="forms-GestionarMaestros.php">
              <i class="bi bi-circle"></i><span>Gestion Maestros</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      
      
      
       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="ri-team-line"></i><span>Control escolar</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

     
      
       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Coordinacion</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
      
      
       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="ri-user-3-line"></i><span>Vicerrectoria</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Perfil</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Registarse</span>
        </a>
      </li><!-- End Register Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Usuarios</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

       <section class="section">
      <div class="row">
        <div class="col-lg-12">

            <div class="card">
            <div class="card-body">

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Genero</th>
                    <th scope="col">RFC</th>
                    <th scope="col">CURP</th>
                    <th scope="col"> </th>
                  </tr>
                </thead>
                <tbody>
                    
                    <?php
                    
                    include("config.php");
                    $Usuaios=$conexion->query("SELECT idUsuario, nombres, apellidoP, apellidoM, tipoUsuario, genero,RFC,CURP
                    FROM usuario");
                    
                    while ($datos = $Usuaios-> fetch_object()) {?>
                    
                    <tr>
                        <td> <?= $datos->idUsuario ?> </td>
                        <td> <?= $datos->nombres ?> </td>
                        <td> <?= $datos->apellidoP ?> </td>
                        <td> <?= $datos->apellidoM ?> </td>
                        <td> <?= $datos->tipoUsuario ?> </td>
                        <td> <?= $datos->genero ?> </td>
                        <td> <?= $datos->RFC ?> </td>
                        <td> <?= $datos->CURP ?> </td>
                        <td>
                            <a href="modificar_usuario.php"  class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">  Editar </a>
                            <a href="" class="btn btn-sm btn-danger"> Eliminar </a>
                        </td>
                    </tr>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Usuario</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
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

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php }
                    
                    ?>
                 
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

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