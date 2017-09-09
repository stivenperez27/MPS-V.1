<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1,0 shrink-to-fit=no" name="viewport">
                <meta content="" name="description">
                    <meta content="" name="author">
                        <title>
                            Modern PArking System

                        </title>
                        <!-- Bootstrap core CSS -->
                        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
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
  <title>Document</title>
</head>
<body>

  <?php include "navlogin.php"?>

<div class="container" align="center" style="margin-top: 100px">


                <img src="/proyectoX/vista/img/login.png" class="img-fluid"  alt="logo " width="140px" >
                    <div class="intro-text">
                      <hr class="star-light">
                      <span class="skills">
                      </span>
                      </hr>
                    </div>
                </img>
  <div class="container">

    <div class="signup-form-container" style="margin-top: 75px">

         <!-- form start -->
         <form role="form" id="register-form" autocomplete="off">

         <div class="form-header">

         <div class="pull-right">
             <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
         </div>

         </div>

         <div class="form-body">
           <div class="col-lg-6">
           <div class="jumbotron" style="margin-top: 50px">
                        <h3>Registro</h3>
                            <form method="post" action="../../modelo/registrar.php">

                                <div class="form-group">
                                      <label>Nombres</label>
                                    <input type="text" class="form-control" placeholder="ingrese su Nombre " required name="nombre" id="nombre">
                                </div>
                                <div class="form-group">
                                      <label>Apellidos</label>
                                    <input type="text" class="form-control" placeholder="ingrese sus apellidos  " required name="apellidos" id="apellidos">
                                </div>
                                <div class="form-group">
                                    <label>Nombre de Usuario/Email</label>
                                        <input type="email username" class="form-control" placeholder="nombre de usuario " required name="usuarios" id="usuarios">
                                </div>
                                <div class="form-group">
                                      <label>Correo electronico</label>
                                    <input type="email" class="form-control" placeholder="ingrese email" required name="email" id="email">
                                </div>
                                <div class="form-group">
                                      <label>Documento de Identificacion</label>
                                    <input type="text" class="form-control" placeholder="ingrese C.C o T.I" required name="doc" id="doc">
                                </div>

                                  <div class="form-group">
                                      <label>Direccion</label>
                                    <input type="text" class="form-control" placeholder="Direccion" required  name="dir" id="dir">
                                </div>

                                <div class="form-group">
                                      <label>Contraseña</label>
                                    <input type="password" class="form-control" placeholder="ingrese contraseña" required  name="contrasenas" id="contrasenas ">
                                </div>


                                <label>Tipo De Usuario:</label>
                                <select class="form-control">

                                    <option>Administrador</option>
                                    <option>operario</option>
                                   </select>
                                      <br/>
                                <div class="form-group">


                                  <input type="submit" class="btn btn-success" placeholder="btn conectarse" value="Ingresar">
                                </div>
                                </form>
                                </div>

                                </div>
</div>

                                </body>
                                </html>

