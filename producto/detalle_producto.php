<html>
    <head>
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
                include_once("../lib/barcode/barcode.php");
                include_once("../clases/clsProducto.php");

                $idprod = $_GET['idproducto'];

                $objproducto = new clsProducto;
                $resultado = $objproducto->consultarProductoPorParametro('id', $idprod, '');

                while ($row = mysql_fetch_array($resultado)) {
                    $idproducto = $row["IdProducto"];
                    $codigobarras = $row["Codigo"];
                    $nombre = $row["Nombre"];
                    $descripcion = $row["Descripcion"];
                    $stock = $row["Stock"];
                    $stockmin = $row["StockMin"];
                    $preciocosto = $row["PrecioCosto"];
                    $precioventa = $row["PrecioVenta"];
                    $utilidad = $row["Utilidad"];
                    $estado = $row["Estado"];
                    $imagen = $row["Imagen"];
                    $categoria = $row["Categoria"];
                }
                ?>
                <div class="wrapper">
                    <div class="block">

                        <div class="block_head"> 
                            <div class="imagen_head"><img src="../img/header/producto.png" width="46" height="43"></div>
                            <div class="titulo_head">GESTOR DE PRODUCTOS</div>


                            <div class="toolbar" id="toolbar">
                                <table class="toolbar">
                                    <tbody>
                                        <tr>
                                            <td>
    <?php echo "<a class='toolbar' href=editar_producto.php?idproducto=" . $idproducto . "><span class='icon-32-editar' title='Editar'>
                        </span>Editar</a>"; ?>

                                            </td>                        
                                            <td>
                                                <a href="registrar_producto.php" class="toolbar">
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
                                <legend>Detalles de producto</legend>


                                <table class="admintable">
                                    <tr>
                                        <td width="100" class="key">ID:</td>
                                        <td><?php echo $idproducto ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">Nombre:</td>
                                        <td><?php echo $nombre ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">Descripción:</td>
                                        <td><?php echo $descripcion ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">Stock:</td>
                                        <td><?php echo $stock ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">Stock Mínimo:</td>
                                        <td><?php echo $stockmin ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">Precio Costo:</td>
                                        <td><?php echo $preciocosto ?></td>
                                    </tr>
                                    <td class="key">Precio Venta:</td>
                                    <td><?php echo $precioventa ?></td>
                                    </tr>
                                    <td class="key">Utilidad:</td>
                                    <td><?php echo $utilidad ?></td>
                                    </tr>
                                    <td class="key">Estado:</td>
                                    <td><?php echo $estado ?></td>
                                    </tr>
                                    <td class="key">Categoria:</td>
                                    <td><?php echo $categoria ?></td>
                                    </tr>
                                    <tr>
                                        <td class="key">Código de barras:</td>
                                        <td><?php echo "<img src='../lib/barcode/barcode.php?encode=EAN-13&bdata=" . $codigobarras . "&height=50&scale=2&bgcolor=%23FFFFEC&color=%23333366&type=jpg' width='150' height='70'>"; ?></td>
                                    </tr>
                                    <td class="key">Imagen:</td>
                                    <td><img src="../producto/foto/<?php echo $imagen ?>" width="160px" height="140px" border="1"></td>
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