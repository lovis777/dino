<!DOCTYPE html>
<html>
    <head>
        <title>Dino - Intranet</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/admin.css" rel="stylesheet" type="text/css">
        <!--<link href="../css/compras.css" rel="stylesheet" type="text/css">-->
        <link href="../css/compras2.css" rel="stylesheet" type="text/css">
        <link href="../js/input/jquery-ui.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="../imagen/logo.png">

        <!--inicio css a estudiar -->
        <link href="../css/general.css" rel="stylesheet" type="text/css">
        <link href="../css/style_v.css" rel="stylesheet" type="text/css"  />
        <!--<link href="../css/Imagenes.css" rel="stylesheet" type="text/css">-->
        <link href="../css/box.css" rel="stylesheet" type="text/css">
        <link href="../css/venta.css" rel="stylesheet" type="text/css">
        <!--fin css a estudiar -->
    </head>
    <body>
        <div class="contenedor"><div class="contenedor_derecho">
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

            </div><!--fin contenedor_derecho-->
            <!--<div class="derecha">
                <center><p><b>Tipo de Cambio</b></p></center>
                <br>
                <p>Compra S/</p><br>
                <input type="text" placeholder="Compra"><br>
                <p>Venta S/</p><br>
                <input type="text" placeholder="Venta"><br>
            </div>-->
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

            <div class="cuerpo"><div class="block">
                    <div class="block_head"> <!--inicio de block_head -->
                        <div class="imagen_head"><img src="../imagen/product.png"></div>
                        <div class="titulo_head">Registro de Producto</div>						
                    </div><!--fin de block_head -->
                    <div class="block_content"><!--inicio de block_content -->
                        <div class="compras"><form name="form2" method="post" action="index.php">

                                <fieldset class="fieldset_rp1">
                                    <legend>Busqueda Básica de Producto</legend>  
                                    <table class="tabla_rp1">
                                        <tr>
                                            <td class="oc_c1">Filtro:</td>
                                            <td class="oc_c2"><input type="text" name=""  class="inputs_table1"></td>	
                                            <td class="oc_c2">
                                                <select name="" required id="select" class="inputs_table1_reg_producto_busqueda">
                                                    <option value="" hidden="">--Selecccione Cirterio--</option>
                                                    <option value="01">Codigo</option>
                                                    <option value="02">Nombre</option>
                                                </select>
                                            </td>
                                            <td ><a href="#rp_categoria" rel="leanModal" class="btn_buscar_producto" title="Buscar Producto">Buscar</td>

                                        </tr>
                                    </table>
                                </fieldset>

                                <fieldset class="fieldset_rp2">
                                    <legend>Información del Producto</legend>  
                                    <table class="tabla_rp2">
                                        <tr>
                                            <td class="oc_c1">Categoria:</td>
                                            <td class="oc_c2">
                                                <select name="" required id="select" class="inputs_table1">
                                                    <option value="" hidden="">Selecccione</option>
                                                    <option value="01">Construcción</option>
                                                    <option value="02">Ferretería</option>
                                                    <option value="03">Pintura</option>
                                                    <option value="04">Electricidad</option>
                                                    <option value="05">Madera</option>
                                                </select>
                                            </td>
                                            <td class="oc_c1">Subcategoría:</td>
                                            <td class="oc_c2">
                                                <select name="" required id="select" class="inputs_table1_reg_producto">
                                                    <option value="" hidden="">Selecccione</option>
                                                    <option value="01">Estructura y Tabiquería</option>
                                                    <option value="02">Cubiertas</option>
                                                    <option value="03">Evacuación</option>
                                                    <option value="04">Utiles de Construcción</option>
                                                    <option value="05">Puertas</option>
                                                    <option value="06">Ventanas</option>
                                                    <option value="07">Escaleras</option>
                                                    <option value="08">Pavimentos</option>
                                                </select>
                                            </td>
                                            <td class="oc_c1">Segmento:</td>
                                            <td class="oc_c2">
                                                <select name="" required id="select" class="inputs_table1_reg_producto">
                                                    <option value="" hidden="">Selecccione</option>
                                                    <option value="01">Segmentos, cales, <br>hormigones y morteros</option>
                                                    <option value="02">Aridos</option>
                                                    <option value="03">Prefabricados Hormigon</option>
                                                    <option value="04">Hierros y armaduras</option>
                                                    <option value="05">Estructuras Madera</option>
                                                    <option value="06">Bloques</option>
                                                    <option value="07">Viquetas</option>
                                                </select>
                                            </td>
                                            <td ><a href="#rp_categoria" rel="leanModal" class="btn_nueva_categoria" title="Agregar Nueva Categoria">Nueva Categoria</td>
                                        </tr>
                                        <tr>
                                            <td class="oc_c1">Codigo:</td>
                                            <td class="oc_c2"><input type="text" name=""  class="inputs_table1"></td>
                                            <td class="oc_c1">Nombre:</td>
                                            <td class="oc_c2" colspan="2"><input type="text" name=""  class="inputs_table1"></td>
                                            <td class="oc_c1" >Descripción:</td>
                                            <td class="oc_c2" colspan="2"><input type="text" name=""  class="inputs_table1"></td>	


                                        </tr>
                                        <tr>
                                            <td class="oc_c1">Unidad de Medida:</td>
                                            <td class="oc_c2">
                                                <select name="" required id="select" class="inputs_table1">
                                                    <option value="" hidden="">Selecccione</option>
                                                    <option value="01">Unidad</option>
                                                    <option value="02">Bolsas</option>
                                                    <option value="03">Cajas</option>
                                                    <option value="04">Metro</option>
                                                    <option value="05">Litro</option>
                                                    <option value="05">Kilogramo</option>
                                                </select>
                                            </td>
                                            <td class="oc_c1">Precio Costo:</td>
                                            <td class="oc_c2"><input type="text" name=""  class="inputs_table1"></td>
                                            <td class="oc_c1">Precio Venta:</td>
                                            <td class="oc_c2"><input type="text" name=""  class="inputs_table1"></td>

                                            <td class="oc_c1">Fecha de Registro:</td>
                                            <td class="oc_c2"><input type="date" name="" id="fecha3" class="inputs_table1"></td>
                                        </tr>
                                        <tr>
                                            <td class="oc_c1">Stock Minimo:</td>
                                            <td class="oc_c2"><input type="text" name=""  class="inputs_table1"></td>
                                            <td class="oc_c1">Stock Actual:</td>
                                            <td class="oc_c2"><input type="text" name=""  class="inputs_table1"></td>
                                            <td class="oc_c1">Stock Máximo:</td>
                                            <td class="oc_c2"><input type="text" name=""  class="inputs_table1"></td>
                                        </tr>
                                    </table>
                                    <br>
                                    <div class="botones"><a href="javascript:;" class="btn_ver_guardar">Listar Productos</a> 
                                        <a href="javascript:;" class="btn_ver_guardar">Guardar</a></div>
                                </fieldset>	



                            </form></div><!--fin class="compras" -->
                    </div><!--fin de block_content -->
                </div></div><!-- fin de block, cuerpo-->
            <!--<div class="pie">
                <footer>
                    Copyright © 2017 Distribuidora "Razón Social" SRL. All rights reserved - Atención al Cliente: 0800-1-3466
                </footer>
            </div>-->
            <footer>
                Copyright © 2017 Distribuidora "Razón Social" SRL. All rights reserved - Atención al Cliente: 0800-1-3466
            </footer>
        </div>
                <!--<script type="text/javascript" src="../js/jquery.min2.js"></script>-->
        <script type="text/javascript" src="../js/jquery-3.2.0.min.js"></script>
        <script type="text/javascript" src="../js/jquery.leanModal.min.js"></script>
        <script type="text/javascript" src="../js/jquery-ui.js"></script>
        <script type="text/javascript" src="../js/menu.js"></script>
    </body>

</html>

