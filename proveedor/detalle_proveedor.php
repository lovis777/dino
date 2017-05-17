<html>
    <head>

        <title>Dino - Intranet</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/admin.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="../imagen/logo.png">


        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href="../css/general.css" rel="stylesheet" type="text/css">
        <link href="../css/icon.css" rel="stylesheet" type="text/css">
    </head>
    <?php error_reporting(0); ?>
    <body>

        <div class="contenedor">
            <div class="cabeza">
                <section id="grupocabeza">
                    <div class="logotipo">
                        <img src="../imagen/logo.png">
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
                            <li><a id="perfil" href="../inicio.php">
                                    <b>Bienvenido :</b><br> 
                                    <br>
                                    Eduardo Paz<br>
                                    Super Administrador<br>
                                </a>
                            </li>
                            <li><a href="../inicio.php"><img src="../imagen/iconos/inicio.png"> | Inicio</a></li>
                            <li><a href="#"><img src="../imagen/iconos/venta.png"> | Ventas</a>
                                <ul>
                                    <li><a href="../venta/index.php">&checkmark; Venta</a></li>
                                    <li><a href="../cliente/index_natural.php">&checkmark; Cliente Naturales</a></li>
                                    <li><a href="../cliente/index_juridica.php">&checkmark; Cliente Juridicas</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><img src="../imagen/iconos/nuevo.png"> | Compras</a>
                                <ul>
                                    <li><a href="../compra/ordenCompra.php">&checkmark; Orden de Compra</a></li>
                                    <li><a href="../compra/registrarCompra.php">&checkmark; Registrar Compra</a></li>
                                    <li><a href="../compra/registrarProducto.php">&checkmark; Registrar Producto</a></li>
                                    <li><a href="../proveedor/index.php">&checkmark; Proveedor</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><img src="../imagen/iconos/almacen.png"> | Almacen</a>
                                <ul>
                                    <li><a href="../producto/index.php">&checkmark; Producto</a></li>
                                    <li><a href="../categoria/index.php">&checkmark; Categoria</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><img src="../imagen/iconos/nuevo.png"> | Mantenimiento</a>
                                <ul>
                                    <li><a href="../empleado/index.php">&checkmark; Empleado</a></li>
                                </ul>
                            <li><a href="#"><img src="../imagen/iconos/nuevo.png"> | Reportes</a>
                                <ul>
                                    <li><a href="#">&checkmark; Venta por Fecha</a></li>
                                    <li><a href="#">&checkmark; Compra por Fecha</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </menu>
            </div>

            <br>
            <br>
            <br>
            <br>



            <?php
            session_start();
            if (isset($_SESSION["usuario"])) {
                ?>


                <?php
                include_once("../clases/clsProveedor.php");

                $idprov = $_GET['idproveedor'];

                $objproveedor = new clsProveedor;
                $resultado = $objproveedor->consultarProveedorPorParametro('id', $idprov, '');

                while ($row = @mysql_fetch_array($resultado)) {
                    $idproveedor = $row["IdProveedor"];
                    $nombre = $row["Nombre"];
                    $ruc = $row["Ruc"];
                    $dni = $row["Dni"];
                    $direccion = $row["Direccion"];
                    $telefono = $row["Telefono"];
                    $celular = $row["Celular"];
                    $email = $row["Email"];
                    $cuenta1 = $row["Cuenta1"];
                    $cuenta2 = $row["Cuenta2"];
                    $estado = $row["Estado"];
                    $obsv = $row["Obsv"];
                }
                ?>
                <div class="wrapper">
                    <div class="block">

                        <div class="block_head"> 
                            <div class="imagen_head"><img src="../img/header/categoria.png" width="48" height="48"></div>
                            <div class="titulo_head">Gestor de Proveedores</div>


                            <div class="toolbar" id="toolbar">
                                <table class="toolbar">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?php echo "<a class='toolbar' href=editar_proveedor.php?idproveedor=" . $idproveedor . "><span class='icon-32-editar' title='Editar'>
                        </span>Editar</a>"; ?>

                                            </td>                        
                                            <td>
                                                <a href="registrar_proveedor.php" class="toolbar">
                                                    <span class="icon-32-nuevo" title="Nuevo">
                                                    </span>
                                                    Nuevo
                                                </a>
                                            </td>
                                            <td>
                                                <a href="index.php" class="toolbar">
                                                    <span class="icon-32-cancelar" title="Cerrar">
                                                    </span>
                                                    Cerrar
                                                </a>
                                            </td>                                    
                                            <td>
                                                <a href="#" class="toolbar">
                                                    <span class="icon-32-ayuda" title="Ayuda">
                                                    </span>
                                                    Ayuda
                                                </a>
                                            </td>                   
                                        </tr>
                                    </tbody>
                                </table>

                            </div><!--Cierra toolbar-->                
                        </div><!--Cierra block_head-->

                        <div class="block_content">
                            <fieldset class="adminform">
                                <legend>Detalles del proveedor</legend>


                                <table class="admintable">
                                    <tr>
                                        <td width="100" class="key">ID:</td>
                                        <td><?php echo $idproveedor ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">Nombre o Razón Social:</td>
                                        <td><?php echo $nombre ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">RUC:</td>
                                        <td><?php echo $ruc ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">DNI:</td>
                                        <td><?php echo $dni ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">Dirección:</td>
                                        <td><?php echo $direccion ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">Teléfono:</td>
                                        <td><?php echo $telefono ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">Celular:</td>
                                        <td><?php echo $celular ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">Email:</td>
                                        <td><?php echo $email ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">Cuenta Nº 1:</td>
                                        <td><?php echo $cuenta1 ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">Cuenta Nº 2:</td>
                                        <td><?php echo $cuenta2 ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">Estado:</td>
                                        <td><?php echo $estado ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">Observación:</td>
                                        <td><?php echo $obsv ?></td>
                                    </tr>
                                </table>
                            </fieldset>
                        </div><!--Cierra block_content-->
                    </div><!--Cierra block-->
                </div><!--Cierra Wrapper-->
                <?php
            } else {
                header("Location:../index.php");
            }
            ?>
    </body>
</html>