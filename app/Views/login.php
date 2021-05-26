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

            <!-- <?php #if (isset($mensaje)):  ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Almacenado con Exito</strong> Puedes Iniciar Sesion.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php #endif ?> -->
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
                <?php if (session('msg')): ?>
                    <div class="alert alert-<?php echo session('msg.type')?>" role="alert">
                      <?php echo session('msg.body') ?>
                    </div>
                <?php endif ?>
                <form action="<?php echo base_url('/login') ?>" method="POST">
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
                <form id="form_registroConductor" action="#" method="POST">
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
                      <label for="inputEmail4"><strong>Contacto</strong></label>
                    <input name="telefono_conductor" type="number" class="form-control" id="telefono_conductor" placeholder="Ingrese su numero celular" required>
                    </div>
                  </div>
                  <div class="form-group text-center">
                    <label for="inputPassword4"><strong>Email</strong></label>
                    <input name="email_conductor" type="email" class="form-control" id="email_conductor" placeholder="Ingrese su Correo" required>
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
                      <div class="form-group">
                        <label for="inputState"><strong>Licencia</strong></label>
                        <select id="licencia" name="licencia" class="form-control" >
                          <option >Seleccionar</option>
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
                <form id="form_registroCliente" action="#" method="POST">
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
        <script type="text/javascript">
          $(document).ready(function() {
            $('#form_registroCliente').submit(function(event) {
              event.preventDefault();

              registrarCliente();
            });
          });


          function registrarCliente()
          {
            var nombre = $("#nombres_cliente").val();
            var ape = $("#apellidos_cliente").val();
            var iden = $("#identificacion_cliente").val();
            var tel = $("#telefono_cliente").val();
            var email = $("#email_cliente").val();
            var contra = $("#password_cliente").val();
            var contra2 = $("#password_cliente2").val();

            if (contra==contra2) {
              $.ajax({
                url: "<?php echo base_url().'/registrar-Cliente' ?>",
                type: 'POST',
                dataType: 'json',
                data: {nombres_cliente: nombre,
                        apellidos_cliente: ape,
                        identificacion_cliente: iden,
                        telefono_cliente: tel,
                        email_cliente: email,
                        password_cliente2: contra
                      },
              })
              .done(function(data) {
                console.log("success");
                console.log(data);
                if (data["mensaje"]=="ok") {
                  alert("Registrado con exito");
                   $("#nombres_cliente").val("");
                   $("#apellidos_cliente").val("");
                   $("#identificacion_cliente").val("");
                   $("#telefono_cliente").val("");
                   $("#email_cliente").val("");
                   $("#password_cliente").val("");
                   $("#password_cliente2").val("");

                }
                if (data["mensaje"]=="error") {
                  alert("error, No se pudo ingresar el registro");
                }
              })
              .fail(function(data) {
                console.log("error");
                console.log(data);
              });
              
            }else{
              alert("Las contrasenias no coinciden");
            }

          }
        </script>
        <script type="text/javascript">
          $(document).ready(function() {
            $('#form_registroConductor').submit(function(event) {
              event.preventDefault();

              registrarConductor();
            });
          });


          function registrarConductor()
          {
            var nombre = $("#nombres_conductor").val();
            var ape = $("#apellidos_conductor").val();
            var iden = $("#identificacion_conductor").val();
            var tel = $("#telefono_conductor").val();
            var email = $("#email_conductor").val();
            var contra = $("#password_conductor").val();
            var contra2 = $("#password_conductor2").val();
            var licencia = $("#licencia option:selected").val();
            if (licencia!="Seleccionar") {
              if (contra==contra2) {
              $.ajax({
                url: "<?php echo base_url().'/registrar-Conductor' ?>",
                type: 'POST',
                dataType: 'json',
                data: {nombres_conductor: nombre,
                        apellidos_conductor: ape,
                        identificacion_conductor: iden,
                        telefono_conductor: tel,
                        email_conductor: email,
                        password_conductor2: contra,
                        licencia: licencia
                      },
              })
              .done(function(data) {
                console.log("success");
                console.log(data);
                if (data["mensaje"]=="ok") {
                  alert("Se registro exitosamente, Ya puedes Iniciar Sesion");

                   $("#nombres_conductor").val("");
                   $("#apellidos_conductor").val("");
                   $("#identificacion_conductor").val("");
                   $("#telefono_conductor").val("");
                   $("#email_conductor").val("");
                   $("#password_conductor").val("");
                   $("#password_conductor2").val("");
                   $("#licencia").val("");

                }
                if (data["mensaje"]=="error") {
                 alert("A ocurrido un error, Intentalo nuevamente");
                }
              })
              .fail(function(data) {
                console.log("error");
                console.log(data);
              });
              
            }else{
              alert("Las contrasenias no coinciden");
            }
            } else {
              alert("Debe Seleccionar una licencai");
            }
            

          }
        </script>
        <!-- <script >
          // $(document).ready(iniciar); 
            
          // function iniciar() {

          //   $("#password_conductor").on('keyup', validar);
          // }

          // function validar(){
          //   var c1 = $("#password_conductor").val();
          //   var c2 = $("#password_conductor2").val();

          //   if (c1 == c2 ) {
          //     alert("son iguales");
          //   } else{
          //     alert("no son iguales");
          //   }
          // }
        </script> -->
    </body>
</html>
