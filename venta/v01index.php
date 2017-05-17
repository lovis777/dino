
<?
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
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
        <link href="../css/box.css" rel="stylesheet" type="text/css">
        <link href="../css/venta.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/style_v.css" /> 
        <style>
            /* Estilo por defecto para validacion */  
            input:required:invalid {  border: 1px solid red;  }  input:required:valid {  border: 1px solid green;  }
        </style>

        <script type="text/javascript" src="js/ajax.js"></script> 
        <script type="text/javascript" src="js/jquery.min.js"></script> 
        <script type="text/javascript" src="js/jquery.leanModal.min.js"></script> 
        <script type="text/javascript">
            $(function () {
                $('a[rel*=leanModal]').leanModal({top: 200, closeButton: ".modal_close"});
            });
        </script> 
        <script>
            function enviar_formulario_directo() {
                var serie_venta = document.datos.txtSerie.value;
                var idtipodoc_venta = document.datos.idtipodocumento.value;
                var idclie_venta = document.datos.txtIdCliente.value;
                window.location.href = "index.php?action=guardar_directo&serie=" + serie_venta + "&idtipodoc=" + idtipodoc_venta + "&idcliente=" + idclie_venta;

            }
            function enviar_formulario() {
                var pago_venta = document.contado.txtPago.value;
                var serie_venta = document.datos.txtSerie.value;
                var idtipodoc_venta = document.datos.idtipodocumento.value;
                var idclie_venta = document.datos.txtIdCliente.value;
                window.location.href = "index.php?action=guardar&pago=" + pago_venta + "&serie=" + serie_venta + "&idtipodoc=" + idtipodoc_venta + "&idcliente=" + idclie_venta;

            }

        </script>  
    </head>
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
            <div class="derecha">
                <center><p><b>Tipo de Cambio</b></p></center>
                <br>
                <p>Compra S/</p><br>
                <input type="text" placeholder="Compra"><br>
                <p>Venta S/</p><br>
                <input type="text" placeholder="Venta"><br>
            </div>
            <div class="izquierda">
                <menu>
                    <nav>
                        <ul>
                            <li><a id="perfil" href="#">
                                    <b>Bienvenido :</b><br> 
                                    <br>
                                    Eduardo Paz<br>
                                    Super Administrador<br>
                                </a>
                            </li>
                            <li><a href="#"><img src="../imagen/iconos/inicio.png"> | Inicio</a></li>
                            <li><a href="#"><img src="../imagen/iconos/nuevo.png"> | Ventas</a>
                                <ul>
                                    <li><a href="#">&checkmark; opcion 1</a></li>
                                    <li><a href="#">&checkmark; opcion 2</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><img src="../imagen/iconos/nuevo.png"> | Compras</a></li>
                            <li><a href="#"><img src="../imagen/iconos/nuevo.png"> | Almacen</a></li>
                            <li><a href="#"><img src="../imagen/iconos/nuevo.png"> | Proveedores</a></li>
                            <li><a href="#"><img src="../imagen/iconos/nuevo.png"> | Reportes</a>
                                <ul>
                                    <li><a href="#">&checkmark; opcion 1</a></li>
                                    <li><a href="#">&checkmark; opcion 2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </menu>
            </div>

            <div class="cuerpo">


                <div class="wrapper">

                    <div class="block">
                        <div class="block_head"> 
                            <div class="imagen_head"><img src="../img/header/venta_h.png" width="48" height="48"></div>
                            <div class="titulo_head">REGISTRO DE VENTAS</div>
                            <div class="toolbar" id="toolbar">
                                <table class="toolbar">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <button type="submit" class="button" onClick="enviar_formulario_directo();">
                                                    <!-- <button type="submit" class="button" onClick="parent:location='Venta.php?action=guardar_directo';">-->
                                                    <span class="GenerarVenta" title="Generar Venta">
                                                    </span>
                                                    Generar venta
                                                </button>
                                            </td>                                 
                                            <td id="toolbar-new">
                                                <a href="#signup" id="go" rel="leanModal" name="signup" class="toolbar">
                                                    <span class="Importe" title="Importe">
                                                    </span>
                                                    Importe
                                                </a>
                                            </td>  

                                            <td id="toolbar-new">
                                                <a href="#" class="toolbar">
                                                    <span class="Ayuda" title="Ayuda">
                                                    </span>
                                                    Ayuda
                                                </a>
                                            </td>   
                                            <td align="50%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            <td align="20%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            <td align="50%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            <td align="20%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

                                        </tr>
                                    </tbody>
                                </table>

                            </div><!--Cierra toolbar-->    
                        </div><!--Cierra block_head-->
                        <div class="block_content">

                            <?php
                            include_once("../clases/clsCarritoVenta.php");
                            include_once("../clases/clsVenta.php");
                            include_once("../clases/clsTipoDocumento.php");
                            include_once("../clases/clsCliente.php");
                            include_once("../clases/clsProducto.php");
                            @session_start();

                            $objVenta = new clsVenta;
                            $num_venta = $objVenta->generarNumVenta();


                            $objTipoDoc = new clsTipoDocumento;
                            $result_td = $objTipoDoc->consultarTipoDocumento();

                            if (isset($_GET['IdCliente'])) {
                                $id_cliente = $_GET["IdCliente"];
                            } else {
                                $id_cliente = 1;
                            }


                            $objCliente = new clsCliente;
                            $result_clie = $objCliente->consultarClientePorParametro('id', $id_cliente, '');

                            while ($row_clie = @mysql_fetch_array($result_clie)) {
                                $idcliente = $row_clie['IdCliente'];
                                $nomcliente = $row_clie['Nombre'];
                            }

//Llenar cesta
//Creamos al objeto carrito vacio
                            $carrito = new Carrito(session_id());

//Recupero el objeto carrito de la sesion en caso exista
                            if (isset($_SESSION['carrito']))
                                $carrito = $_SESSION['carrito'];

                            if (isset($_GET['action'])) {
                                switch ($_GET['action']) {
                                    case 'agregar':
                                        $idprod = $_GET['idProducto'];
                                        if ($idprod != "") {
                                            $productoDAO = new clsVenta;
                                            $producto = $productoDAO->consultarProductoPorCodigo($idprod);
                                            $carrito->agregarProducto($producto);
                                        }
                                        break;

                                    case 'vacear':
                                        $carrito = new Carrito(session_id());
                                        break;

                                    case 'eliminar':
                                        $carrito->eliminarProducto($_GET['idProducto']);
                                        break;

                                    case 'actualizar':
                                        foreach ($_GET as $codigo => $cantidad) {
                                            if ($codigo > 0 && (int) $cantidad > 0) {
                                                //Actualizamos la cantidad para un mismo producto
                                                $carrito->actualizarCantidadIngresada($codigo, $cantidad);
                                            }
                                        }
                                        break;
                                    case 'guardar_directo':

                                        if ($carrito->calcularTotalPagar() > 0) {

                                            $id_tipodoc = $_GET['idtipodoc'];
                                            $id_clie = $_GET['idcliente'];
//			$id_emp=$_GET['txtIdEmp'];
                                            $serie_fact = $_GET['serie'];

                                            $id_emp = "1";
                                            $estado = "EMITIDO";

                                            $productoDAO = new clsVenta();
                                            $facnum = $productoDAO->guardarFactura($carrito->productos, $id_tipodoc, $id_clie, $id_emp, $serie_fact, $num_venta, $carrito->calcularValorVenta(), $carrito->calcularIgv(), $carrito->calcularTotalPagar(), $estado);

                                            header("Location: verificar_venta.php?estado=efectuado&total_pago=" . $carrito->calcularTotalPagar() . "&pago=" . $carrito->calcularTotalPagar());
                                        } else {
                                            header('Location: verificar_venta.php?estado=pendiente');
                                        }
                                        exit();
                                        break;
                                    case 'guardar':
                                        $pago = $_GET["pago"];
                                        if ($pago > $carrito->calcularTotalPagar() && $carrito->calcularTotalPagar() > 0) {


                                            $id_tipodoc = $_GET['idtipodoc'];
                                            $id_clie = $_GET['idcliente'];
//                                          $id_emp = $_GET['txtIdEmp'];
                                            $serie_fact = $_GET['serie'];

                                            $id_emp = "1";
                                            $estado = "EMITIDO";

                                            $productoDAO = new clsVenta();
                                            $facnum = $productoDAO->guardarFactura($carrito->productos, $id_tipodoc, $id_clie, $id_emp, $serie_fact, $num_venta, $carrito->calcularValorVenta(), $carrito->calcularIgv(), $carrito->calcularTotalPagar(), $estado);

                                            header("Location: verificar_venta.php?estado=efectuado&total_pago=" . $carrito->calcularTotalPagar() . "&pago=" . $pago);
                                        } else {
                                            header('Location: verificar_venta.php?estado=pendiente');
                                        }
                                        exit();
                                        break;
                                }

//Guardo nuevamente el carrito de la session
                                $_SESSION['carrito'] = $carrito;
                                header('Location: index.php');
                                exit(); //Paramos el script
                            }
                            ?>

                            <?php
                            error_reporting(0);
                            $cod = $_GET["txtCodigo"];
                            $objProducto = new clsVenta;
                            $producto = $objProducto->consultarProductoPorCodigo($cod);

                            $id = $producto->idpro;
                            $cod = $producto->codpro;
                            $nom = $producto->nompro;
                            $stock = $producto->stockpro;
                            $cost = $producto->costpro;
                            $pre = $producto->prepro;


                            if (isset($_POST['Buscar_codigo'])) {
                                $cod = $_POST["txtCodigo"];
                                $objProducto = new clsVenta;
                                $producto = $objProducto->consultarProductoPorCodigo($cod);

                                $id = $producto->idpro;
                                $cod = $producto->codpro;
                                $nom = $producto->nompro;
                                $stock = $producto->stockpro;
                                $cost = $producto->costpro;
                                $pre = $producto->prepro;
                            }
                            ?>


                            <div class="zona_producto">
                                <form name="form2" method="post" action="index.php">
                                    <fieldset class="adminform">
                                        <legend>Datos del Producto</legend>  
                                        <table width="55%" border="0" class="admintable">
                                            <tr>
                                                <td class="key">
                                                    <input type="hidden" name="txtId" value="<?php echo $id ?>">
                                                    Producto:  
                                                </td>
                                                <td align="20%">
                                                    <input name="txtCodigo" type="text" value="<?php echo $cod ?>" size="35">
                                                    <a href="#myprod" rel="leanModal" name="signup" class="button_p" title="Buscar producto" style="paddin-top:10px"><img src="../img/Iconfinder/page_edit.png"></a>
                                                </td>
                                                <td class="key">
                                                    <span class="key">
                                                        <input type="hidden" name="txtId2" value="<?php echo $cost ?>">
                                                        Precio:
                                                    </span>
                                                </td>
                                                <td align="20%">
                                                    <input name="textfield2" type="text"  id="textfield2" value="<?php echo $pre ?>" size="6" style="text-align:center">
                                                </td>
                                                <td align="20%" class="key">Stock:</td>
                                                <td align="20%"><input name="textfield3" type="text" disabled id="textfield3" value="<?php echo $stock ?>" size="6" style="text-align:center"></td>

                                                <td align="20%" class="key">Registro Num:</td>
                                                <td align="20%"><input name="textfield3" type="text" disabled id="textfield3" value="<?php echo $stock ?>" size="6" style="text-align:center"></td>

                                        </table>    
                                        <table width="70%" border="0">        
                                            <tr>

                                                <td align="20%">&nbsp;</td>
                                                <td align="center"><a href="javascript:void(0);" onClick="window.location = 'index.php?action=agregar&idProducto=<?php echo $producto->codpro; ?>';"  class="button_p" id="boton_agregar" ><img src="../img/Iconfinder/agregar_venta.png"></a></td>

                                                <td align="20%">&nbsp;</td>
                                                <td align="20%">&nbsp;</td> 

                                                <td width="32%">
                                                    <div class="total_venta" style="font-size:35px">
                                                        <center><?php echo 'S/. ' . number_format($carrito->calcularTotalPagar(), 2, '.', ''); ?></center>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>        


                                        </table>
                                    </fieldset>  
                                </form>    

                                <form name="form2" method="post" action="index.php"> 
                                    <fieldset class="adminform">
                                        <legend>Detalle de Venta</legend>  
                                        <table width="55%" border="0" class="admintable">  

                                            </tr>



                                            <tr>
                                                <td  class="key">Cliente: </td>
                                                <td align="20%"><input name="textfield" disabled type="text" id="textfield" value="<?php echo $nom ?>" size="26"><a href="#myprod" rel="leanModal" name="signup" class="button_p" title="Buscar Cliente" style="paddin-top:10px"><img src="../img/icon/buscar_detalle.png"></a></td>

                                                <td align="30%" class="key">Tipo de Docum:</td>
                                                <td class="key" size="35"><select name="idtipodocumento">
                                                        <?php while ($row = mysql_fetch_array($result_td)) { ?>
                                                            <option value="<?php echo $row['IdTipoDocumento'] ?>"><?php echo $row['Descripcion'] ?></option>
                                                        <?php } ?>
                                                    </select>  
                                                </td>

                                                <td  class="key">RUC: </td>
                                                <td align="20%"><input name="textfield" type="text" id="textfield" value="<?php echo $nom ?>" size="10"></td>

                                            </tr>           


                                            <tr>
                                                <td align="center"><b>SERIE</b></td>
                                                <td align="center"><b>Nº DE VENTA</b></td>
                                            </tr>
                                            <tr>
                                                <td align="center"><input name="txtSerie" type="text" id="textfield4" value="001" size="10" style="text-align:center"></td>
                                                <td align="center">
                                                    <input name="textfield4" type="text" id="textfield4" value="<?php echo $num_venta ?>" size="30" style="text-align:center">
                                                </td>

                                                <td class="key">
                                                    <span class="key">
                                                        <input type="hidden" name="txtId2" value="<?php echo $cost ?>">
                                                        Forma Pago:
                                                    </span>
                                                </td>
                                                <td align="20%">
                                                    <select name="" required id="select">
                                                        <option value="" hidden="">Seccione</option>
                                                        <option value="1">Crédito</option>
                                                        <option value="2">Contado</option>
                                                    </select>
                                                </td>

                                                <td class="key">
                                                    <span class="key">
                                                        <input type="hidden" name="txtId2" value="<?php echo $cost ?>">
                                                        Dias:
                                                    </span>
                                                </td>
                                                <td align="20%">
                                                    <input name="textfield2" type="text"  id="textfield2" value="<?php echo $pre ?>" size="8" style="text-align:center">
                                                </td>
                                                <td class="key">
                                                    <span class="key">
                                                        <input type="hidden" name="txtId2" value="<?php echo $cost ?>">
                                                        T.C.:
                                                    </span>
                                                </td>
                                                <td align="20%">
                                                    <input name="textfield2" type="text"  id="textfield2" value="<?php echo $pre ?>" size="8" style="text-align:center">
                                                </td>
                                            </tr>



                                            <tr>
                                                <td  class="key">Base Imponible: </td>
                                                <td align="20%"><input name="textfield" type="text"  id="textfield" value="<?php echo $nom ?>" size="35"></td>

                                                <td class="key">
                                                    <span class="key">
                                                        <input type="hidden" name="txtId2" value="<?php echo $cost ?>">
                                                        IGV:
                                                    </span>
                                                </td>
                                                <td align="20%">
                                                    <input name="textfield2" type="text" disabled id="textfield2" value="<?php echo $pre ?>" size="8" style="text-align:center">
                                                </td>

                                            </tr>





                                        </table>

                                        <div class="box_1_1">
                                            <table width="50%" border="0">
                                                <tr>
                                                    <td class="txt_box_bottom">Total a Pagar:</td>
                                                    <td class="txt_box_bottom" align="left"><?php echo "S/. " . $carrito->calcularTotalPagar(); ?></td>

                                                    <td align="20%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                    <td align="20%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </fieldset>
                                </form>

                                <form name="detalle" action="index.php" method="get">

                                    <?php
                                    $total = 0;
                                    if (count($carrito->productos) > 0) {
                                        ?>

                                        <table class="adminlist">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th><a href="#">Cant.</a></th>
                                                    <th><a href="#">C&oacute;digo</a></th>
                                                    <th><a href="#">Nombre</a></th>
                                                    <th><a href="#">Precio unit.</a></th>
                                                    <th><a href="#">Total</a></th>
                                                    <th>&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody class="adminlist">
                                                <?php
                                                $i = 0;
                                                foreach ($carrito->productos as $producto) {
                                                    $i++;
                                                    if ($c == 1) {
                                                        echo "<tr class='row1'>";
                                                        $c = 2;
                                                    } else {
                                                        echo "<tr class='row0'>";
                                                        $c = 1;
                                                    }
                                                    ?>

                                                <td width="10"><?php echo $i ?></td>
                                                <td width="30" align="center"><input type="text" name="<?php echo $producto->codpro; ?>" value="<?php echo $producto->cantidad; ?>" maxlength="3" size="4" style="text-align: center" /></td>
                                                <td align="center"><?php echo $producto->codpro; ?></td>
                                                <td align="left"><?php echo $producto->nompro; ?></td>                  
                                                <td width="25" align="center">S/.<?php echo $producto->prepro; ?></td>
                                                <td width="25"align="center">S/.<?php echo $producto->precioTotal(); ?></td>
                                                <td width="5%" align="center"><a href="javascript:void(0);" onClick="window.location = 'index.php?action=eliminar&idProducto=<?php echo $producto->codpro; ?>';"><img src="../img/icon/eliminar.png" title="Eliminar producto"></a></td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="13">&nbsp;</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <br>
                                        <center>
                                            <input type="button" value="Limpiar Cesta" class="btn_operaciones" style="width:130px;" onClick="parent:location = 'index.php?action=vacear'"/>
                                            <input type="hidden" name="action" value="actualizar"  style="width:130px;"/>
                                            <input type="submit" value="Actualizar" class="btn_operaciones"  style="width:130px;" >
                                        </center>
                                    <!--<input type="button" value="Grabar" class="btn_operaciones" style="width: 130px" onClick="parent:location='Venta.php?action=guardar';">-->
                                        <?php
                                    } else
                                        echo "<div class='box-info'>No tiene ningun producto en la cesta</div>";
                                    ?>

                                </form> <!--Cierra form detalle-->          		
                            </div>


                            <?php
                            $v_cliente = "12345";
                            ?>



                            <!------------------------------Modal -- myContado --------------------------->
                            <div id="signup">


                                <div class="modal-header">    
                                    <div class="txt-title">COBRO AL CONTADO</div>
                                    <a class="modal_close" href="#" title="Cerrar"></a> 
                                </div><!-- modal-header -->

                                <div class="modal-body">
                                    <p align="center" class="txt-info"><strong>Total a Cobrar</strong></p>
                                    <pre style="font-size:30px"><center><?php echo 'S/. ' . number_format($carrito->calcularTotalPagar(), 2, '.', ''); ?></center></pre>
                                    <p align="center" class="txt-info"><strong>Forma de Pago "Contado"</strong></p>
                                    <div align="center">
                                        <p align="center" class="txt-info-1">Dinero Recibido</p>
                                        <form name="contado" action="" onSubmit="enviar_formulario(); return false">
                                            <input type="hidden" name="tpagar" id="tpagar" value="<?php echo $carrito->calcularTotalPagar(); ?>">
                                            <div class="input-prepend input-append">
                                                <span class="add-on"><b>S/.</b></span>
                                                <input type="number" name="txtPago" autocomplete="on" required />
                                            </div>
                                            <input type="hidden" name="action" value="guardar" style="width:130px;"/>
                                            </i>

                                    </div>
                                </div><!-- moda-body -->

                                <div class="modal-footer">
                                    <input type="submit" value="Cobrar dinero recibido" class="btn btn-success"><i class=" icon-shopping-cart">

                                </div><!-- moda-footer -->
                                </form>    
                            </div><!-- signup -->




                            <!------------------------------Modal -- myProducto --------------------------->
                            <div id="myprod">

                                <div class="modal-header">    
                                    <div class="txt-title">BUSCAR PRODUCTO</div>
                                    <a class="modal_close" href="#" title="Cerrar"></a> 
                                </div><!-- modal-header -->

                                <div class="modal-body">

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
                                                <th><a href="#">Stock</a></th>
                                                <th><a href="#">Precio Venta</a></th>
                                                <th><a href="#">Estado</a></th>
                                                <th><a href="#">Categoría</a></th>
                                                <th><a href="#">ID</a></th>

                                            </tr>
                                        </thead>

                                        <tbody class="adminlist" id="table_body_producto">

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="13"></td>
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div><!-- moda-body -->
                            </div><!-- Cierra myProducto -->
                            <!------------------------------Modal -- myCliente --------------------------->
                            <div id="myclie">


                                <div class="modal-header">    
                                    <div class="txt-title">BUSCAR CLIENTE</div>
                                    <a class="modal_close" href="#" title="Cerrar"></a> 
                                </div><!-- modal-header -->

                                <div class="modal-body">

                                    <form name="form_cliente" action="#" method="post" enctype="multipart/form-data" id="form_cliente">
                                        Filtro:<input type="text" name="txtDato_cliente" id="txtDato_cliente">
                                        <select name="cboCriterio_cliente" id="cboCriterio_cliente">
                                            <option>- Seleccione Criterio -</option>
                                            <option value="nombre">Nombre o Razón Social</option>
                                            <option value="ruc">RUC</option>
                                            <option value="dni">DNI</option>
                                        </select>
                                        <input type="button" name="button" id="button" onClick="enviarParametrosCliente()" value="Buscar">

                                    </form>

                                    <table class="adminlist" cellspacing="1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th><a href="#">Nombre</a></th>
                                                <th><a href="#">RUC</a></th>
                                                <th><a href="#">DNI</a></th>
                                                <th><a href="#">Dirección</a></th>
                                                <th><a href="#">Teléfono</a></th>
                                                <th><a href="#">ID</a></th>

                                            </tr>
                                        </thead>

                                        <tbody class="adminlist" id="table_body_cliente">

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="13">                
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>


                                </div><!-- moda-body -->

                            </div><!-- Cierra myCliente -->


                        </div><!--Cierra Block_Content-->
                    </div><!--Cierra Wrapper-->

                </div><!--Cierra Block-->

                <div class="pie">
                    <footer>
                        Copyright © 2017 Distribuidora "Razón Social" SRL. All rights reserved - Atención al Cliente: 0800-1-3466
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>