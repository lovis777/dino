<!DOCTYPE html>
<html>
    <head>
        <title>Dino - Intranet</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/admin.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="imagen/logo.png">




    </head>
    <body>

        <?php
        error_reporting(E_ERROR);
        session_start();
        if (isset($_SESSION["usuario"])) {
            ?>

            <div class="contenedor">
                <div class="cabeza">
                    <section id="grupocabeza">
                        <div class="logotipo">
                            <img src="imagen/logo.png">
                            <p><b>OBLITAS</b></p>
                            <p>Maestro de la construcción</p>
                        </div>
                        <div class="datos">
                            <p>Trujillo, 18 de Enero del 2017</p>
                        </div>
                    </section>
                </div>

                <div class="izquierda">
                    <menu>
                        <nav>
                            <ul>
                                <li><a id="perfil" href="inicio.php">
                                        <b>Bienvenido :</b><br> 
                                        <br>
                                        Eduardo Paz<br>
                                        Super Administrador<br>
                                    </a>
                                </li>
                                <li><a href="inicio.php"><img src="imagen/iconos/inicio.png"> | Inicio</a></li>
                                <li><a href="#"><img src="imagen/iconos/nuevo.png"> | Ventas</a>
                                    <ul>
                                        <li><a href="venta/index.php">&checkmark; Venta</a></li>
                                        <li><a href="cliente/index_natural.php">&checkmark; Cliente Naturales</a></li>
                                        <li><a href="cliente/index_juridica.php">&checkmark; Cliente Juridicas</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><img src="imagen/iconos/nuevo.png"> | Compras</a>
                                    <ul>
                                        <li><a href="compra/ordenCompra.php">&checkmark; Orden de Compra</a></li>
                                        <li><a href="compra/registrarCompra.php">&checkmark; Registrar Compra</a></li>
                                        <li><a href="compra/registrarProducto.php">&checkmark; Registrar Producto</a></li>
                                        <li><a href="proveedor/index.php">&checkmark; Proveedor</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><img src="imagen/iconos/nuevo.png"> | Almacen</a>
                                    <ul>
                                        <li><a href="producto/index.php">&checkmark; Producto</a></li>
                                        <li><a href="categoria/index.php">&checkmark; Categoria</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><img src="imagen/iconos/nuevo.png"> | Mantenimiento</a>
                                    <ul>
                                        <li><a href="empleado/index.php">&checkmark; Empleado</a></li>
                                    </ul>
                                <li><a href="#"><img src="imagen/iconos/nuevo.png"> | Reportes</a>
                                    <ul>
                                        <li><a href="#">&checkmark; Venta por Fecha</a></li>
                                        <li><a href="#">&checkmark; Compra por Fecha</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </menu>
                </div>

                <div class="cuerpo">



                    <div id="page-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-lg-12">
                                    <iframe src="central.php" name="contenedor" width="100%" height="1050px" frameborder=0 scrolling="no" style="margin-left: 0px; margin-right: 0px; margin-top: 2px; margin-bottom: 0px;"></iframe>

                                </div>
                            </div>
                            <!-- /.row -->



                        </div>
                        <!-- /.container-fluid -->

                    </div>
                    <!-- /#page-wrapper -->   


                </div>

                <!-- /#wrapper -->

                <!-- jQuery -->
                <script src="js/jquery.js"></script>

                <!-- Bootstrap Core JavaScript -->
                <script src="js/bootstrap.min.js"></script>

                <!-- Morris Charts JavaScript -->
                <script src="js/plugins/morris/raphael.min.js"></script>
                <script src="js/plugins/morris/morris.min.js"></script>
                <script src="js/plugins/morris/morris-data.js"></script>
                <?php
            } else {
                header("Location:index.php");
            }
            ?>      


            <div class="pie">
                <footer>
                    Copyright © 2017 Distribuidora "Razón Social" SRL. All rights reserved - Atención al Cliente: 0800-1-3466
                </footer>
            </div>
        </div>
    </body>
</html>
