<!DOCTYPE html>
<html>
    <head>
        <title>Dino - Intranet</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/admin.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="../imagen/logo.png">
    </head>
    <body>
        <div class="contenedor">
            <div class="cabeza">
                <section id="grupocabeza">
                    <div class="logotipo">
                    <img src="../imagen/logo.png">
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
                <div class="items">
                    <img class="botonExcel" src="../imagen/iconos/excel.png" alt="Exportar a Excel">
                </div>
                <div class="reporte">
                    <form action="" method="post" id="FormularioExportacion">
                    <table width="100%" cellpadding="10" cellspacing="0" border="1" id="Exportar_a_Excel">
                        <tr>
                            <td colspan="7" class="cabezareporte">MODELO REPORTE</td>
                        </tr>
                        <tr>
                            <td class="seccionnumero">|</td>
                            <td class="seccionreporte"colspan="2">Sección A</td>
                            <td class="seccionreporte">Sección B</td>
                            <td class="seccionreporte">Sección C</td>
                            <td class="seccionreporte">Sección D</td>
                            <td class="seccionreporte">Sección E</td>
                        </tr>
                        <tr>
                            <td class="seccionreportedato">N°</td>
                            <td class="seccionreportedato">Dato 1</td>
                            <td class="seccionreportedato">Dato 2</td>
                            <td class="seccionreportedato">Dato 3</td>
                            <td class="seccionreportedato">Dato 4</td>
                            <td class="seccionreportedato">Dato 5</td>
                            <td class="seccionreportedato">Dato 6</td>
                        </tr>
                        <tr>
                            <td class="seccionreportedato">1</td>
                            <td class="seccionreportedato">Descripción 1</td>
                            <td class="seccionreportedato">Descripción 2</td>
                            <td class="seccionreportedato">Descripción 3</td>
                            <td class="seccionreportedato">Descripción 4</td>
                            <td class="seccionreportedato">Descripción 5</td>
                            <td class="seccionreportedato">Descripción 6</td>
                        </tr> 
                    </table>
                        <input type="hidden" id="datos_a_enviar" name="datos_a_enviar"/>
                    </form>
                </div>
            </div>
            <div class="pie">
                <footer>
                    Copyright © 2017 Distribuidora "Razón Social" SRL. All rights reserved - Atención al Cliente: 0800-1-3466
                </footer>
            </div>
        </div>
        <script type="text/javascript" src="../js/jquery.min2.js"></script>
        <script type="text/javascript" src="../js/menu.js"></script>
        
        <script language="javascript">
            $(document).ready(function() {
                $(".botonExcel").click(function(event) {
		$("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
		$("#FormularioExportacion").submit();
                
            });
        });
            </script>
    </body>
</html>
