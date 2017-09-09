<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1,0 shrink-to-fit=no" name="viewport">
                <meta content="" name="description">
                    <meta content="" name="author">
                        <title>
                            Modern Parking System
                        </title>
                        <!-- Bootstrap core CSS -->
                        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
                            <!-- Custom fonts for this template -->
                            <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


                                        <!-- Custom styles for this template -->
                                        <link href="../css/estilos.css" rel="stylesheet">
                                            <!-- Temporary navbar container fixed-top -->

                                        </link>
                                    </link>
                                </link>

                    </meta>
                </meta>
            </meta>
        </meta>
    </head>
       <!--head-->

        <body>
        <?php include "navlogin.php"?>
        <header class="ms">
            <div class="container" align="center">


                <img src="/proyectoX/vista/img/login.png" class="img-fluid"  alt="logo " width="140px" >
                    <div class="intro-text">
                        <span class="name">
                            Iniciar Sesion
                        </span>
                        <hr class="star-light">
                            <span class="skills">
                            </span>
                        </hr>
                    </div>
                </img>

                <div class="col-lg-5">
                    <div class="jumbotron" style="margin-top: 50px">
                        <h3>Login</h3>
                            <form method="post" action="../../modelo/loginconexion.php">
                                <div class="form-group">
                                    <label>Nombre de Usuario</label>
                                        <input type="email username" class="form-control" placeholder="nombre de usuario o Email" required name="usuario" id="usuario">
                                </div>
                      <div class="form-group">
                            <label>Contraseña</label>
                          <input type="password" class="form-control" placeholder="contraseña de el usuario" required name="contrasena" id="contrasena">
                      </div>
                      <div class="form-group">


                          <input type="submit" class="btn btn-success" placeholder="btn conectarse" value="Ingresar" name="logear" id="logear"  >
                      </div>
                  </form>
              </div>
            </div>


        </div>
        </header>

    </body>
</html>
