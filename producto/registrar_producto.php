<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href="../css/general.css" rel="stylesheet" type="text/css">
        <link href="../css/Imagenes.css" rel="stylesheet" type="text/css">
        <link href="../css/box.css" rel="stylesheet" type="text/css">
        <style>
            /* Estilo por defecto para validacion */  
            input:required:invalid {  border: 1px solid red;  }  input:required:valid {  border: 1px solid green;  }
        </style>
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
                include_once("../clases/clsCategoria.php");
                $objcategoria = new clsCategoria;
                $result = $objcategoria->consultarCategoria();
                ?>
                <div class="wrapper">
                    <form name="form_producto" action="guardar_producto.php" method="post" enctype="multipart/form-data">
                        <div class="block">
                            <div class="block_head"> 
                                <div class="imagen_head"><img src="../img/header/producto.png" width="46" height="43"></div>
                                <div class="titulo_head">REGISTRAR PRODUCTO</div>
                                <div class="toolbar" id="toolbar">
                                    <table class="toolbar">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <button type="submit" class="button">
                                                        <span class="Guardar" title="Guardar">
                                                        </span>
                                                        Guardar
                                                    </button>

                                                </td>                                 
                                                <td>
                                                    <a href="index.php" class="toolbar">
                                                        <span class="Cancelar" title="Cancelar">
                                                        </span>
                                                        Cancelar
                                                    </a>
                                                </td>               
                                                <td>
                                                    <a href="#" class="toolbar">
                                                        <span class="Ayuda" title="Ayuda">
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
                                    <legend>Registro del Producto</legend>
                                    <table class="admintable">
                                        <tr>
                                            <td width="100" class="key">Código de Barras:</td>
                                            <td colspan="2"><input type="text" name="codigobarras" size="25"></td>
                                        </tr>
                                        <tr>
                                            <td width="100" class="key">Nombre:</td>
                                            <td colspan="2"><input type="text" name="nombre" size="40" title="Se necesita un nombre de producto"  required></td>
                                        </tr>
                                        <tr>
                                            <td width="100" class="key">Descripción:</td>
                                            <td colspan="2"><textarea name="descripcion" id="textarea" cols="40" rows="2"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td width="100" class="key">Stock:</td>
                                            <td colspan="2"><input type="text" name="stock" size="25"></td>
                                        </tr>        
                                        <tr>
                                            <td width="100" class="key">Stock Mínimo:</td>
                                            <td colspan="2"><input type="text" name="stockmin" size="25"></td>
                                        </tr>
                                        <tr>
                                            <td width="100" class="key">Precio Costo:</td>
                                            <td colspan="2"><input type="text" name="preciocosto" size="25"></td>
                                        </tr>
                                        <tr>
                                            <td width="100" class="key">Precio Venta:</td>
                                            <td colspan="2"><input type="text" name="precioventa" size="25"></td>
                                        </tr>
                                        <tr>
                                            <td width="100" class="key">Utilidad:</td>
                                            <td colspan="2"><input name="utilidad" type="text" disabled size="25"></td>
                                        </tr>
                                        <tr>
                                            <td width="100" class="key">Estado:</td>
                                            <td colspan="2"><p>
                                                    <label>
                                                        <input name="estado" type="radio" id="estado_0" value="ACTIVO" checked="CHECKED">
                                                        ACTIVO</label>

                                                    <label>
                                                        <input type="radio" name="estado" value="INACTIVO" id="estado_1">
                                                        INACTIVO</label>
                                                    <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100" class="key">Categoría:</td>
                                            <td colspan="2">

                                                <select name="idcategoria" required>
                                                    <option value="">- Seleccione una Categoría -</option>
                                                    <?php while ($row = mysql_fetch_array($result)) { ?>

                                                        <option value="<?php echo $row['IdCategoria'] ?>"><?php echo $row['Descripcion'] ?></option>
                                                    <?php } ?>
                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100" class="key">Imagen:</td>
                                            <td><input type="file" size="44" name="imagen" accept="image/jpeg"><input id="accion" name="accion" value="guardar" type="hidden">

                                            </td>
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


    </body>
</html>