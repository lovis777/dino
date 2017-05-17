<!DOCTYPE html>
<html>
    <head>
        <title>Dino - Intranet</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/css/admin.css" rel="stylesheet" type="text/css">
        <!--<link href="../css/compras.css" rel="stylesheet" type="text/css">-->
        <link href="../css/css/compras2.css" rel="stylesheet" type="text/css">
        <link href="../js/input/jquery-ui.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="../imagen/logo.png">

        <!--inicio css a estudiar -->
        <link href="../css/css/general.css" rel="stylesheet" type="text/css">
        <link href="../css/css/style_v.css" rel="stylesheet" type="text/css"  />
        <!--<link href="../css/Imagenes.css" rel="stylesheet" type="text/css">-->
        <link href="../css/css/box.css" rel="stylesheet" type="text/css">
        <link href="../css/css/venta.css" rel="stylesheet" type="text/css">
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
                        <div class="imagen_head"><img src="../imagen/orden_compra.png"></div>
                        <div class="titulo_head">ORDEN DE COMPRA</div>						
                    </div><!--fin de block_head -->
                    <div class="block_content"><!--inicio de block_content -->
                        <div class="compras"><form name="form2" method="post" action="index.php">

                                <fieldset class="fieldset_oc1">
                                    <legend>Registro de Orden de Compra</legend>
                                    <table class="tabla_oc1">
                                        <tr>
                                            <td class="oc_c1">Nro Orden:</td>
                                            <td class="oc_c2"><input type="text" name="" value="00001" disabled class="inputs_table1"></td>
                                            <td class="oc_c1">Fecha Emisión:</td>
                                            <td class="oc_c2"><input type="date" name="" id="fecha" class="inputs_table1"></td>
                                            <td class="oc_c1">Fecha Entrega:</td>
                                            <td class="oc_c2"><input type="date" name="" id="fecha2" class="inputs_table1"></td>


                                        </tr>
                                        <tr>
                                            <td class="oc_c1">Condici&oacute;n de Pago:</td>
                                            <td class="oc_c2">
                                                <select name="" required id="select" class="inputs_table1">
                                                    <option value="" hidden="">Selecccione</option>
                                                    <option value="1">Contado</option>
                                                    <option value="2">Crédito</option>
                                                </select>
                                            </td>
                                            <td class="oc_c1">Proveedor:</td>
                                            <td class="oc_c2" colspan="2"><input type="text" name="" value="" disabled class="inputs_table2"></td>
                                            <td ><a href="#myprov" rel="leanModal" class="btn_buscar_proveedor" title="Buscar Proveedor">Buscar ...</a></td>								

                                        </tr>
                                        <tr>
                                            <td class="oc_c1">Producto:</td>
                                            <td class="oc_c2" colspan="2"><input type="text" name="" id="txt_nomProduct" value="producto1" class="inputs_table2"></td>
                                            <td ><a href="#myprod" rel="leanModal" class="btn_buscar_proveedor" title="Buscar Producto">Buscar ...</a></td>
                                            <td class="oc_c1">Cantidad:</td>
                                            <td class="oc_c2"><input type="text" id="txt_cantProduct" class="inputs_table1_inf_prod"></td>
                                            <td class="oc_c1">Precio:</td>
                                            <td class="oc_c2"><input type="text" id="txt_precioProduct" class="inputs_table1"></td>

                                            <td><a href="javascript:;" class="bt_add" title="Agregar Producto" style="float:left;">
                                                    <img src="../imagen/agregar_icono.png" style="width:60%; height:60%;"></a></td>												
                                        </tr>
                                    </table>								
                                </fieldset>

                                <div class="botones"><a href="javascript:;" class="btn_ver_guardar">Listar Ordenes</a> <a href="javascript:;" class="btn_ver_guardar">Guardar</a></div>

                                <!--Inicio Detalle de Orden de Compras-->
                                <fieldset class="fieldset_oc2">
                                    <legend>Detalle de Orden de Compra</legend>  
                                    <table class="tabla_rc7" id="t_rc7">
                                        <tr style="text-align: center; color:gray;">
                                            <th class="trc7_th1">Nro</th>
                                            <th class="trc7_th2">Producto</th>
                                            <th class="trc7_th3">U.M</th>		
                                            <th class="trc7_th4">Cantidad</th>	
                                            <th class="trc7_th5">Precio</th>	
                                            <th class="trc7_th6">Total</th>
                                            <th class="trc7_th7">Acción</th>
                                        </tr>							
                                    </table>

                                </fieldset>						
                                <!--Fin Detalle de Orden de Compras-->

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

    <!------------------------------Inicio -- Modal -- myProducto --------------------------->
    <div id="myprod">

        <div class="modal-header">    
            <div class="txt-title">BUSCAR PRODUCTO</div>
            <a class="modal_close" href="#" title="Cerrar"></a> 
        </div><!-- modal-header -->

        <div class="modal-body"><!--fin modal-body -->

            <form name="form_producto" action="#" method="post" enctype="multipart/form-data">
                Filtro:<input type="text" name="txtDato_producto" id="txtDato_producto">
                <select name="cboCriterio_producto" id="cboCriterio_producto">
                    <option>- Seleccione Criterio -</option>
                    <option value="codigo">Código</option>
                    <option value="nombre">Nombre</option>
                    <option value="descripcion">Descripción</option>
                    <option value="categoria">Categoría</option>
                </select>
                <input type="button" name="button" id="button" onClick="enviarParametrosProducto()" value="Buscar">
            </form>

            <table class="adminlist" cellspacing="1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th><a href="#">Código</a></th>
                        <th><a href="#">Nombre</a></th>
                        <th><a href="#">Descripción</a></th>
                        <th><a href="#">U.M</a></th>
                        <th><a href="#">Stock</a></th>
                        <th><a href="#">Precio Costo</a></th>
                        <th><a href="#">Categoría</a></th>
                    </tr>
                </thead>
                <tbody class="adminlist" id="table_body_producto">		 
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="13">                
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div><!--fin modal-body -->
    </div><!-- Cierra myProducto -->
    <!------------------------------Inicio -- Modal -- myProducto --------------------------->

    <!------------------------------Inicio -- Modal -- myProveedor --------------------------->
    <div id="myprov">
        <div class="modal-header">    
            <div class="txt-title">BUSCAR PROVEEDOR</div>
            <a class="modal_close" href="#" title="Cerrar"></a> 
        </div><!-- modal-header -->

        <div class="modal-body">

            <form name="form_proveedor" action="#" method="post" enctype="multipart/form-data" id="form_proveedor">
                Filtro:<input type="text" name="txtDato_proveedor" id="txtDato_proveedor">
                <select name="cboCriterio_proveedor" id="cboCriterio_proveedor">
                    <option>- Seleccione Criterio -</option>
                    <option value="nombre">Nombre o Razón Social</option>
                    <option value="ruc">RUC</option>
                    <option value="dni">DNI</option>
                </select>
                <input type="button" name="button" id="button" onClick="enviarParametrosProveedor()" value="Buscar">
            </form>

            <table class="adminlist" cellspacing="1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th><a href="#">Nombres y Apellidos / Razon Social</a></th>
                        <th><a href="#">RUC / DNI</a></th>
                        <th><a href="#">Descripción</a></th>
                        <th><a href="#">Dirección</a></th>
                        <th><a href="#">Teléfono</a></th>
                        <th><a href="#">Email</a></th>					
                    </tr>
                </thead>
                <tbody class="adminlist" id="table_body_proveedor">		 
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="13">                
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div><!-- moda-body -->
    </div><!-- Cierra myProv-->
    <!------------------------------Fin -- Modal -- myProveedor --------------------------->
</html>

