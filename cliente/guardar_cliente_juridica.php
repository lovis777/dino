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
                <?php
                include_once("../clases/clsCliente.php");
                $objcliente = new clsCliente;

                $accion = $_POST["accion"];



                if ($accion == "guardar") {

                    $nombre = $_POST["nombre"];
                    $ruc = $_POST["ruc"];
                    $dni = $_POST["dni"];
                    $direccion = $_POST["direccion"];
                    $telefono = $_POST["telefono"];
                    $observacion = $_POST["observacion"];
                    $usuario = $_POST["usuario"];
                    $contrasena = $_POST["contrasena"];

                    if ($objcliente->agregarCliente($nombre, $ruc, $dni, $direccion, $telefono, $observacion, $usuario, $contrasena) == true) {
                        $result = $objcliente->consultarClienteIdMaximo();
                        $mensaje = "Registro grabado correctamente";
                    } else {
                        $mensaje = "Error de grabacion";
                    }

                    while ($row = mysql_fetch_array($result)) {
                        $cod = $row['Maximo'];
                    }
                }

                if ($accion == "modificar") {
                    $cod = $_POST["codigo"];

                    $nombre = $_POST["nombre"];
                    $ruc = $_POST["ruc"];
                    $dni = $_POST["dni"];
                    $direccion = $_POST["direccion"];
                    $telefono = $_POST["telefono"];
                    $observacion = $_POST["observacion"];
                    $usuario = $_POST["usuario"];
                    $contrasena = $_POST["contrasena"];

                    if ($objcliente->modificarCliente($cod, $nombre, $ruc, $dni, $direccion, $telefono, $observacion, $usuario, $contrasena) == true) {
                        $mensaje = "Registro actualizado correctamente";
                    } else {
                        $mensaje = "Error de grabacion1";
                    }
                }
                ?>      

                <div class="wrapper">
                    <div class="block">
                        <div class="block_head"> 
                            <div class="imagen_head"><img src="../img/header/cliente.png" width="48" height="45"></div>
                            <div class="titulo_head">Gestor de Clientes Juridica</div>    
                            <div class="toolbar" id="toolbar">
                                <table class="toolbar">
                                    <tbody>
                                        <tr>       
                                            <td>
                                                <a href="registrar_cliente_juridica.php" class="toolbar">
                                                    <span class="icon-32-nuevo" title="Nuevo">
                                                    </span>
                                                    Nuevo
                                                </a>
                                            </td>
                                            <td>
                                                <a href="index_juridica.php" class="toolbar">
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
                            <div class="box-info"><?php echo $mensaje ?></div>

                            <fieldset class="adminform">
                                <legend>Detalle del cliente juridico</legend>
                                <table class="admintable">
                                    <tr>
                                        <td class="key">ID:</td>
                                        <td><?php echo $cod ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">Razón Social:</td>
                                        <td><?php echo $nombre ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">RUC:</td>
                                        <td><?php echo $ruc ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">Actividad Comercial:</td>
                                        <td><?php echo $dni ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">Nombre de Contacto:</td>
                                        <td><?php echo $dni ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">Cargo de Cont.:</td>
                                        <td><?php echo $dni ?></td>
                                    </tr>        
                                    <tr>
                                        <td class="key">Departamento:</td>
                                        <td><?php echo $direccion ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">Provincia:</td>
                                        <td><?php echo $direccion ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">Distrito:</td>
                                        <td><?php echo $direccion ?></td>
                                    </tr>        
                                    <tr>
                                        <td class="key">Teléfono:</td>
                                        <td><?php echo $telefono ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">Celular:</td>
                                        <td><?php echo $telefono ?></td>
                                    </tr> 
                                    <tr>
                                        <td class="key">Fecha Registro:</td>
                                        <td><?php echo $telefono ?></td>
                                    </tr>        
                                    <tr>
                                        <td class="key">Observación:</td>
                                        <td><?php echo $observacion ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">Estado:</td>
                                        <td><?php echo $observacion ?></td>
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