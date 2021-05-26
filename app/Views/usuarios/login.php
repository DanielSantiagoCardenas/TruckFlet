<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TruckFlet</title>
        <!-- Favicon-->

        <!-- icono redondo inicial -->
        <!-- <link rel="icon" type="image/x-icon" href="<?php #echo base_url('assets/img/favicon.ico'); ?>" /> -->

        <!-- icono del camion  -->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/img/portfolio/perfil.png'); ?>" />
        
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url('assets/css/styles.css'); ?>" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">TruckFlet</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="bg-warning nav-link py-3 text-dark px-0 px-lg-3 rounded js-scroll-trigger" data-toggle="modal" data-target="#iniciarModal">Iniciar Sesion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="<?php echo base_url('assets/img/portfolio/perfil.png'); ?>" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">REGISTRATE COMO</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-truck"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#clienteModal">
                              <strong>CLIENTE</strong>
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#conductorModal">
                              <strong>CONDUCTOR</strong>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Modal iniciar sesion -->
        <div class="modal fade" id="iniciarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">INICIAR SESION</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url('validarDatos'); ?>" method="POST">
                  <div class="form-group text-center">
                    <label for="exampleInputEmail1"><strong>CORREO ELECTRONICO</strong></label>
                    <input name="campo_correo" type="email" class="form-control" id="Correo_inisio" aria-describedby="Correo" placeholder="Correo" required>
                  </div>
                    <div class="form-group text-center">
                        <label for="exampleInputPassword1"><strong>CONTRASEÑA</strong></label>
                        <input name="campo_password" type="password" class="form-control" id="password_inisio" placeholder="Contraseña" required>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><strong>CANCELAR</strong></button>
                    <button type="submit" class="btn btn-warning"><strong>INICIAR SESION</strong></button>
                  </div>
                </form>
            </div>
          </div>
        </div>


        <!-- Modal Conductor -->
        <div class="modal fade" id="conductorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">REGISTRO CONDUCTOR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-row text-center">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4"><strong>Nombres</strong></label>
                      <input name="nombres_conductor" type="text" class="form-control" id="nombres_conductor" placeholder="Ingrese sus Nombres" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4"><strong>Apellidos</strong></label>
                      <input name="apellidos_conductor" type="text" class="form-control" id="apellidos_conductor" placeholder="Ingrese sus Apellidos" required>
                    </div>
                  </div>
                  <div class="form-row text-center">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4"><strong>Cédula</strong></label>
                      <input name="identificacion_conductor" type="text" class="form-control" id="identificacion_conductor" placeholder="Ingrese su Cedula" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4"><strong>Email</strong></label>
                      <input name="email_conductor" type="email" class="form-control" id="email_conductor" placeholder="Ingrese su Correo" required>
                    </div>
                  </div>
                  <div class="form-group text-center">
                      <label for="inputAddress"><strong>Contraseña</strong></label>
                      <input name="password_conductor1" type="password" class="form-control" id="password_conductor" placeholder="Ingrese su Contraseña" required>
                    </div>
                    <div class="form-group text-center">
                      <label for="inputAddress2"><strong>Verificar Contraseña</strong></label>
                      <input name="password_conductor2" type="password" class="form-control" id="password_conductor2" placeholder="Verifique su Contraseña" required>
                    </div>
                  <div class="form-row text-center">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4"><strong>Contacto</strong></label>
                      <input name="telefono_conductor" type="number" class="form-control" id="telefono_conductor" placeholder="Ingrese su numero celular" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputState"><strong>Licencia</strong></label>
                        <select id="licencia" class="form-control" required>
                          <option>Seleccionar</option>
                          <option >B1</option>
                          <option >B2</option>
                          <option >B3</option>
                          <option >C1</option>
                          <option >C2</option>
                          <option >C3</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><strong>CANCELAR</strong></button>
                    <button type="submit" class="btn btn-warning"><strong>REGISTRARSE</strong></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Cliente -->
        <div class="modal fade" id="clienteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">REGISTRO CLIENTE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="guardar_cliente.php" method="POST">
                  <div class="form-row text-center">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4"><strong>Nombres</strong></label>
                      <input name="nombres_cliente" type="text" class="form-control" id="nombres_cliente" placeholder="Ingrese sus Nombres" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4"><strong>Apellidos</strong></label>
                      <input name="apellidos_cliente" type="text" class="form-control" id="apellidos_cliente" placeholder="Ingrese sus Apellidos" required>
                    </div>
                  </div>
                  <div class="form-row text-center">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4"><strong>Cédula</strong></label>
                      <input name="identificacion_cliente" type="number" class="form-control" id="identificacion_cliente" placeholder="Ingrese su Cedula" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4"><strong>Email</strong></label>
                      <input name="email_cliente" type="email" class="form-control" id="email_cliente" placeholder="Ingrese su correo" required>
                    </div>
                  </div>
                    <div class="form-group ">
                      <label for="inputEmail4"><strong>Contacto</strong></label>
                      <input name="telefono_cliente" type="number" class="form-control" id="telefono_cliente" placeholder="Ingrese Su telefono" required>
                    </div>
                  <div class="form-group ">
                      <label for="inputPassword4"><strong>Contraseña</strong></label>
                      <input name="password_cliente1" type="password" class="form-control" id="password_cliente" placeholder="Ingrese su Contraseña" required>
                  </div>
                  <div class="form-group ">
                      <label for="inputPassword4"><strong> Verifique su Contraseña</strong></label>
                      <input name="password_cliente2" type="password" class="form-control" id="password_cliente2" placeholder="Verifique su Contraseña" required>
                  </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><strong>CANCELAR</strong></button>
                    <button type="submit" id="registro_cliente" class="btn btn-warning"><strong>REGISTRARSE</strong></button>
                  </div>
                </form>
            </div>
          </div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <!-- Contact form JS-->
        <script src="<?php echo base_url('assets/mail/jqBootstrapValidation.js'); ?>"></script>
        <script src="<?php echo base_url('assets/mail/contact_me.js'); ?>"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url('assets/js/scripts.js'); ?>"></script>
    </body>
</html>
