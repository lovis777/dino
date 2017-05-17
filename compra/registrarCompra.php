<!DOCTYPE html>
<html>
    <head>
        <title>Dino - Intranet</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/admin.css" rel="stylesheet" type="text/css">
        <link href="../css/compras2.css" rel="stylesheet" type="text/css">
        <link href="../js/input/jquery-ui.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="../imagen/logo.png">

        <!--inicio css a estudiar -->
        <link href="../css/general.css" rel="stylesheet" type="text/css">
        <link href="../css/style_v.css" rel="stylesheet" type="text/css" />
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

            <!-- 
            Clases en general.css
             - block
             - block_head
             - imagen_head
             - titulo_head
            -->
            <div class="cuerpo"><div class="block">
                    <div class="block_head"> <!--inicio de block_head -->
                        <div class="imagen_head"><img src="../imagen/compra.png"></div>
                        <div class="titulo_head">REGISTRO DE COMPRAS</div>						
                    </div><!--fin de block_head -->
                    <div class="block_content"><!--inicio de block_content -->
                        <div class="compras"><form name="form2" method="post" action="index.php">
                                <fieldset>
                                    <legend>Comprobante de Pago o Documento</legend>  
                                    <table class="tabla_rc1">
                                        <tr>
                                            <td class="oc_c1">N° Registro:</td>
                                            <td class="oc_c2"><input type="text" name="" value="00001" disabled class="inputs_table1"></td>
                                            <td class="oc_c1">Fecha de Emision:</td>
                                            <td class="oc_c2"><input type="date" name="" id="fecha" class="inputs_table1"></td>
                                            <td class="oc_c1">Fecha de Pago:</td>
                                            <td class="oc_c2"><input type="date" name="" id="fecha2" class="inputs_table1"></td>
                                            <td class="oc_c1">Tipo Cambio:</td>
                                            <td class="oc_c2"><input type="text" name="" class="inputs_table1"></td>
                                        </tr>
                                        <tr>
                                            <td class="oc_c1">Tipo (Tabla 10):</td>
                                            <td class="oc_c2">
                                                <select name="" required id="select" class="inputs_table1">
                                                    <option value="" hidden="">Selecccione</option>
                                                    <option value="01">Factura</option>
                                                    <option value="03">Boleta de Venta</option>
                                                    <option value="04">Liquidación de Compra</option>
                                                    <option value="07">Guia de Remision</option>
                                                </select>
                                            </td>
                                            <td class="oc_c1">Número:</td>
                                            <td class="oc_c2"><input type="text" name="" value="00001"  class="inputs_table1"></td>
                                            <td class="oc_c1">
                                                <select name="" required id="select" class="inputs_table1_serie">
                                                    <option value="" hidden="">Selecccione</option>
                                                    <option value="1">Serie</option>
                                                    <option value="2">Dependencia Aduanera</option>
                                                </select>
                                            </td>
                                            <td class="oc_c2"><input type="text" name="" value="00001"  class="inputs_table1"></td>
                                            <td class="oc_c1">Año Emsion DUA:</td>
                                            <td class="oc_c2"><input type="text" name="" value=""  class="inputs_table1"></td>
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

                                            <td class="oc_c1">Cuenta Contable:</td>
                                            <td class="oc_c2"><input type="text" name=""  class="inputs_table1"></td>
                                        </tr>
                                    </table>
                                    <!--<a href="#" name="signup" class="button_p" title="Agregar Comprobante de Pago" style="width:4px; height:4px;"><img src="../imagen/agregar_icono.png"></a>-->
                                </fieldset>

                                <fieldset class="fieldset_rc2">
                                    <legend>Información del Proveedor</legend>  
                                    <table class="tabla_rc2">
                                        <tr>
                                            <td class="oc_c1" colspan="2">Apellidos y Nombres, Denominación o Razon Social:</td>
                                            <td class="oc_c2" colspan="3"><input type="text" name="" class="inputs_table1_razon_social"></td>	

                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="oc_c1">Documento de Identidad:</td>
                                            <td class="oc_c2">
                                                <select name="" required id="select" class="inputs_table1_doc_identidad">
                                                    <option value="" hidden="">Selecccione</option>
                                                    <option value="1">DNI</option>
                                                    <option value="4">RUC</option>
                                                    <option value="6">CARNET DE EXTRANJERIA</option>
                                                    <option value="7">PASAPORTE</option>
                                                    <option value="0">OTROS TIPOS DE DOCUMENTOS</option>
                                                </select>
                                            </td>
                                            <td class="oc_c1">N° Doc. Identidad:</td>
                                            <td class="oc_c2"><input type="text" name=""  class="inputs_table1_num_doc_identidad"></td>	
                                            <!--<td class="oc_c1">Cuenta Contable:</td>
                                            <td class="oc_c2"><input type="text" name=""  class="inputs_table1"></td>-->		
                                        </tr>
                                    </table>
                                    <!--<a href="#" name="signup" class="button_p" title="Agregar Comprobante de Pago" style="width:4px; height:4px;"><img src="../imagen/agregar_icono.png"></a>-->
                                </fieldset>

                                <fieldset class="fieldset_rc3">
                                    <legend>Constancia de Deposito de Detracción</legend>  
                                    <table class="tabla_rc3">
                                        <tr>
                                            <td class="oc_c1">Numero:</td>
                                            <td class="oc_c2"><input type="text" name=""  class="inputs_table1"></td>	

                                        </tr>
                                        <tr>
                                            <td class="oc_c1">Fecha de Emisión:</td>
                                            <td class="oc_c2"><input type="date" name="" id="fecha3" class="inputs_table1"></td>
                                        </tr>
                                    </table>
                                </fieldset>

                                <fieldset class="fieldset_rc4">
                                    <legend>Adquisiciones Gravadas Destinadas a Operaciones Gravadas y/o de Exportación</legend>  
                                    <table class="tabla_rc4">
                                        <tr>
                                                <!--<td class="oc_c1" colspan="4">N° Comprobante de Pago Emitido por Sujeto No Domiciliado:</td>-->
                                            <td class="oc_c1">N° C.P. Emitido por Sujeto No Domiciliado:</td>
                                            <td class="oc_c2"><input type="text" name=""  class="inputs_table1"></td>	
                                            <td class="oc_c1">Base Imponible:</td>
                                            <td class="oc_c2"><input type="text" name=""  class="inputs_table1"></td>										
                                            <td class="oc_c1">IGV:</td>
                                            <td class="oc_c2"><input type="text" name=""  class="inputs_table1"></td>	
                                            <td class="oc_c1">Importe Total:</td>
                                            <td class="oc_c2"><input type="text" name=""  class="inputs_table1"></td>		
                                        </tr>							
                                    </table>
                                    <!--<a href="#" name="signup" class="button_p" title="Agregar Comprobante de Pago" style="width:4px; height:4px;"><img src="../imagen/agregar_icono.png"></a>-->
                                </fieldset>



                                <fieldset class="fieldset_rc5">
                                    <legend>Referencia del Comprobante de Pago o Documento Original que se Modifica</legend>  
                                    <table class="tabla_oc1">
                                        <tr>
                                            <td class="oc_c1" colspan="3">N° Comprobante de Pago o Documento:</td>
                                            <td class="oc_c2"><input type="text" name=""  class="inputs_table1"></td>		
                                        </tr>
                                        <tr>
                                            <td class="oc_c1">Fecha:</td>
                                            <td class="oc_c2"><input type="date" name="" id="fecha4" class="inputs_table1"></td>										
                                            <td class="oc_c1">Tipo (Tabla 10):</td>
                                            <td class="oc_c2">
                                                <select name="" required id="select" class="inputs_table1">
                                                    <option value="" hidden="">Selecccione</option>
                                                    <option value="01">Factura</option>
                                                    <option value="03">Boleta de Venta</option>
                                                    <option value="04">Liquidación de Compra</option>
                                                    <option value="07">Guia de Remision</option>
                                                </select>
                                            </td>	

                                        </tr>
                                        <tr>
                                            <td class="oc_c1">Serie:</td>
                                            <td class="oc_c2"><input type="text" name=""  class="inputs_table1"></td>
                                        </tr>									
                                    </table>
                                    <!--<a href="#" name="signup" class="button_p" title="Agregar Comprobante de Pago" style="width:4px; height:4px;"><img src="../imagen/agregar_icono.png"></a>-->
                                </fieldset>

                                <fieldset class="fieldset_rc6">
                                    <legend>Información del Producto</legend>  
                                    <table class="tabla_rc6">
                                        <tr>										
                                            <td class="oc_c1">Producto:</td>
                                            <td class="oc_c2" colspan="3"><input type="text" id="txt_nomProduct" class="inputs_table1_producto"></td>
                                            <td><a href="#myprod" rel="leanModal" class="btn_rc6">Buscar</a></td>																	
                                        </tr>	
                                        <tr>
                                            <td class="oc_c1">U.M:</td>
                                            <td class="oc_c2"><input type="text" id="txt_umProduct" class="inputs_table1_inf_prod"></td>

                                            <td class="oc_c1">Cantidad:</td>
                                            <td class="oc_c2"><input type="text" id="txt_cantProduct" class="inputs_table1_inf_prod"></td>	

                                            <td class="oc_c1">Precio:</td>
                                            <td class="oc_c2"><input type="text" id="txt_precioProduct" class="inputs_table1"></td>
                                        </tr>									
                                    </table>
                                    <a href="javascript:;" class="bt_add" title="Agregar Producto" style="float:left;">
                                        <img src="../imagen/agregar_icono.png" style="width:70%; height:70%;"></a>
                                </fieldset>

                                <div class="botones"><a href="#verDetalleCompra" rel="leanModal" class="btn_ver_guardar">Ver Detalle</a> <a href="javascript:;" class="btn_ver_guardar">Guardar</a></div>

                                <!--Inicio Detalle de Compra de Productos-->
                                <fieldset class="fieldset_rc7">
                                    <legend>Detalle Registro de Productos</legend>  
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
                                <!--Fin Detalle de Compra de Productos-->
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

        </div><!-- fin contenedor-->
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

    <!------------------------------Inicio -- Modal -- verDetalleCompra --------------------------->
    <div id="verDetalleCompra">

        <div class="modal-header">    
            <div class="txt-title">Listado Detalle de Compra</div>
            <a class="modal_close" href="#" title="Cerrar"></a> 
        </div><!-- modal-header -->

        <div class="modal-body"><!--fin modal-body -->

<!--<table class="adminlist" cellspacing="1">-->
            <table class="adminVerDet" cellspacing="1">
                <thead>
                    <tr>
                        <th class="adminVerDet_th1" rowspan="2"><a href="#">Número Correlativo del Registro o Código Unico de la Operación</a></th>
                        <th class="adminVerDet_th2" rowspan="2"><a href="#">Fecha de Emisión del Comprobante de Pago o Documento</a></th>
                        <th class="adminVerDet_th3" rowspan="2"><a href="#">Fecha de Vencimiento o Fecha de Pago</a></th>	
                        <th class="adminVerDet_th4" colspan="3"><a href="#">Comprobante de Pago o Documento</a></th>
                        <th class="adminVerDet_th8" rowspan="2"><a href="#">N° del Comprobante de Pago.  
                                N° Formulario Físico o Virtual. N° DUA, DSI o Liquidación de Cobranza u Otros Documentos Emitidos por Sunat</a></th>	
                        <th class="adminVerDet_th9" colspan="3"><a href="#">Información del Proveedor</a></th>
                        <th class="adminVerDet_th13" colspan="2"><a href="#">Adquisiciones Gravadas destinadas a Operaciones Gravadas y/o de Exportación</a></th>
                        <th class="adminVerDet_th16" rowspan="2"><a href="#">Total</a></th>
                        <th class="adminVerDet_th17" rowspan="2"><a href="#">N° Comprobante de Pago Emitido por Sujeto No Domiciliado</a></th>

                        <th class="adminVerDet_th18" colspan="2"><a href="#">Constancia de Deposito de Detracción</a></th>

                        <th class="adminVerDet_th21" rowspan="2"><a href="#">Tipo de Cambio</a></th>

                        <th class="adminVerDet_th22" colspan="4"><a href="#">Referencia del Comprobante de Pago o Documento Original que se Modifica</a></th>

                    </tr>
                    <tr>
                        <th class="adminVerDet_th5"><a href="#">Tipo <br>(Tabla 10)</a></th>
                        <th class="adminVerDet_th6"><a href="#">Serie o Codigo de la Dependencia Aduanera<br> (Tabla 11)</a></th>
                        <th class="adminVerDet_th7"><a href="#">Año de Emisión de la DUA o DSI</a></th>


                        <th class="adminVerDet_th10"><a href="#">Documento de Identidad <br> (Tabla 2)</a></th>
                        <th class="adminVerDet_th11"><a href="#">Documento de Identidad <br> Número</a></th>
                        <th class="adminVerDet_th12"><a href="#">Apellidos y Nombres, Denominación o Razon Social</a></th>

                        <th class="adminVerDet_th14"><a href="#">Base Imponible</a></th>
                        <th class="adminVerDet_th15"><a href="#">IGV</a></th>

                        <th class="adminVerDet_th19"><a href="#">Número</a></th>
                        <th class="adminVerDet_th20"><a href="#">Fecha de Emisión</a></th>

                        <th class="adminVerDet_th23"><a href="#">Fecha</a></th>
                        <th class="adminVerDet_th24"><a href="#">Tipo <br>(Tabla 10)</a></th>
                        <th class="adminVerDet_th25"><a href="#">Serie</a></th>
                        <th class="adminVerDet_th26"><a href="#">N° Comprobante de Pago o Documento</a></th>
                    </tr>

                </thead>
                <tbody class="adminlist" id="table_body_producto">		 
                </tbody>
                <tfoot>
                        <!--<tr>
                                <td colspan="21">                
                                </td>
                        </tr>-->
                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tfoot>
            </table>
        </div><!--fin modal-body -->
    </div><!-- Cierra myProducto -->
    <!------------------------------Fin -- Modal -- verDetalleCompra --------------------------->

</html>

