<html>
    <head>

        <title>Dino - Intranet</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/admin.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="../imagen/logo.png">

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href="../css/general.css" rel="stylesheet" type="text/css">
        <link href="../css/Imagenes.css" rel="stylesheet" type="text/css">
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


                <div class="wrapper">
                    <form action="guardar_proveedor.php" method="post" name="form_proveedor">
                        <div class="block">
                            <div class="block_head"> 
                                <div class="imagen_head"><img src="../img/Iconfinder/provider.png" width="48" height="48"></div>
                                <div class="titulo_head">REGISTRAR PROVEEDOR</div>
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
                                    <legend>Detalle de proveedor</legend>
                                    <table class="admintable">
                                        <tr>
                                            <td class="key">Nombre o Razón Social:</td>
                                            <td colspan="2"><input type="text" name="nombre" size="30" title="Se necesita un nombre o razón social del proveedor"  required></td>
                                        </tr>
                                        <tr>
                                            <td class="key">Descripcion:</td>
                                            <td><input type="text" name="dni" size="20"></td>
                                        </tr>
                                        <tr>
                                            <td class="key">RUC:</td>
                                            <td><input type="text" name="ruc" size="20"></td>
                                        </tr>
                                        <tr>
                                            <td class="key">Departamento:</td>
                                            <td><input type="text" name="direccion" size="20"></td>
                                        </tr>
                                        <tr>
                                            <td class="key">Provincica:</td>
                                            <td><input type="text" name="direccion" size="20"></td>
                                        </tr>
                                        <tr>
                                            <td class="key">Distrito:</td>
                                            <td><input type="text" name="direccion" size="20"></td>
                                        </tr>                                    
                                        <tr>
                                            <td class="key">Teléfono:</td>
                                            <td><input type="text" name="telefono" size="20"></td>
                                        </tr>
                                        <tr>
                                            <td class="key">Celular:</td>
                                            <td><input type="text" name="celular" size="20"></td>
                                        </tr>
                                        <tr>
                                            <td class="key">Email:</td>
                                            <td><input type="text" name="email" size="30"></td>
                                        </tr>
                                        <tr>
                                            <td class="key">Cuenta Nº 1:</td>
                                            <td><input type="text" name="cuenta1" size="20"></td>
                                        </tr>
                                        <tr>
                                            <td class="key">Cuenta Nº 2:</td>
                                            <td><input type="text" name="cuenta2" size="20"></td>
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
    </body>
</html>