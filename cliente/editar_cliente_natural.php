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
        <link href="../css/box.css" rel="stylesheet" type="text/css">
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
                <div class="wrapper">
                    <form name="form_cliente" method="post" action="guardar_cliente_natural.php">
                        <div class="block">

                            <div class="block_head"> 
                                <div class="imagen_head"><img src="../img/header/cliente.png" width="48" height="45"></div>
                                <div class="titulo_head">EDITAR CLIENTE NATURAL</div>

                                <div class="toolbar" id="toolbar">
                                    <table class="toolbar">
                                        <tbody>
                                            <tr>     
                                                <td>
                                                    <button type="submit" class="button">
                                                        <span class="icon-32-guardar_editar" title="Guardar">
                                                        </span>
                                                        Guardar
                                                    </button>
                                                </td>       
                                                <td>
                                                    <a href="index_natural.php" class="toolbar">
                                                        <span class="icon-32-cancelar" title="Nuevo">
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

                                <?php
                                include_once("../clases/clsCliente.php");


                                $id_clie = $_GET["idcliente"];

                                $objempleado = new clsCliente;
                                $resultado = $objempleado->consultarClientePorParametro('id', $id_clie, '');


                                while ($row = @mysql_fetch_array($resultado)) {
                                    $cod = $row["IdCliente"];
                                    $idcliente = $row["IdCliente"];
                                    $nombre = $row["Nombre"];
                                    $ruc = $row["Ruc"];
                                    $dni = $row["Dni"];
                                    $direccion = $row["Direccion"];
                                    $telefono = $row["Telefono"];
                                    $observacion = $row["Obsv"];
                                    $usuario = $row["Usuario"];
                                    $contrasena = $row["Contrasena"];
                                }
                                ?>

                                <input type="hidden" name="codigo" value="<?php echo $cod ?>">
                                <input id="accion" name="accion" value="modificar" type="hidden">
                                <fieldset class="adminform">
                                    <legend>Detalles del Cliente</legend>
                                    <table class="admintable">
                                        <tr>
                                            <td width="100" class="key">Nombre:</td>
                                            <td colspan="2"><input type="text" name="nombre" size="40" title="Se necesita un nombre o razón social de cliente"  required></td>
                                        <tr>
                                            <td width="100" class="key">Apellido Pat:</td>
                                            <td colspan="2"><input type="text" name="nombre" size="40" title="Se necesita un nombre o razón social de cliente"  required></td>
                                        <tr>
                                            <td width="100" class="key">Apellido Mat:</td>
                                            <td colspan="2"><input type="text" name="nombre" size="40" title="Se necesita un nombre o razón social de cliente"  required></td>
                                        <tr>
                                            <td width="100" class="key">Sexo:</td>
                                            <td colspan="2"><input type="text" name="ruc" size="25" title="El número de RUC debe contener 11 dígitos" pattern="[0-9]{11}"></td>

                                        <tr>
                                            <td width="100" class="key">Fecha de Nac:</td>
                                            <td colspan="2"><input type="text" name="ruc" size="25" title="El número de RUC debe contener 11 dígitos" pattern="[0-9]{11}"></td>
                                        <tr>
                                            <td width="100" class="key">DNI:</td>
                                            <td colspan="2"><input type="text" name="dni" size="25" title="El número de DNI debe contener 8 dígitos" pattern="[0-9]{8}"></td>
                                        </tr>
                                        <tr>
                                            <td width="100" class="key">Departamento:</td>
                                            <td colspan="2"><input type="text" name="direccion" size="25"></td>
                                        </tr>
                                        <tr>
                                            <td width="100" class="key">Provincia:</td>
                                            <td colspan="2"><input type="text" name="direccion" size="25"></td>
                                        </tr>
                                        <tr>
                                            <td width="100" class="key">Distrito:</td>
                                            <td colspan="2"><input type="text" name="direccion" size="25"></td>
                                        </tr>
                                        <tr>
                                            <td width="100" class="key">Teléfono:</td>
                                            <td colspan="2"><input type="text" name="direccion" size="25"></td>
                                        </tr>                                        
                                        <tr>
                                            <td width="100" class="key">Celular:</td>
                                            <td colspan="2"><input type="text" name="telefono" size="25"></td>
                                        </tr>
                                        <tr>
                                            <td width="100" class="key">Fecha de Registro:</td>
                                            <td colspan="2"><input type="text" name="telefono" size="25"></td>
                                        </tr>
                                        <tr>
                                            <td width="100" class="key">Observación:</td>
                                            <td colspan="2"><textarea name="observacion" id="textarea" cols="40" rows="2"></textarea></td> 

                                        </tr>

                                        <tr>
                                            <td class="key">Estado:</td>
                                            <td> <label>
                                                    <input name="estado" type="radio" id="estado_0" value="ACTIVO" checked>
                                                    ACTIVO</label>
                                                <label>
                                                    <input type="radio" name="estado" value="INACTIVO" id="estado_1">
                                                    INACTIVO</label></td>
                                        </tr>  

                                    </table>
                                </fieldset>





                            </div><!--Cierra Block_Content-->
                        </div><!--Cierra Wrapper-->
                    </form>
                </div><!--Cierra Block-->
                <?php
            } else {
                header("Location:../index.php");
            }
            ?>
    </BODY>
</HTML>