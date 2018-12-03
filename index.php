<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <!-- <link rel="stylesheet" href="css/resetCss.css"/> -->
        <script type="text/javascript" src="bootstrap-3.3.4/js/jquery-1.11.2.js"/></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap-3.3.4/css/bootstrap.min.css"/>
    <!-- Optional theme -->
    <link rel="stylesheet" href="bootstrap-3.3.4/css/bootstrap-theme.min.css"/>
    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="bootstrap-3.3.4/js/bootstrap.min.js"/></script>
<script type="text/javascript" src="js/addRowsCols.js"/></script>
<script src="js/jspdf/jspdf.js"></script>
<script type="text/javascript" src="js/generaPdf.js"/></script>
<title>Formulario Actas</title>
<link rel="stylesheet" href="css/estilo.css"/>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                asdasd
            </div>
            <div class="col-lg-8 text-center">
                <form>
                    <br>
                    <table border="1" width="100%">
                        <th colspan="2">
                            <!-- CORRELATIVO:114536-2 -->
                            <?php
                            echo rand(1000, 0) . '-' . date("d/m/y H:m:s");
                            ?>
                        </th>
                        <tr>
                            <td colspan="2">
                                <h3 >
                                    <select class="text-center">
                                        <option>Seleccione...</option>
                                        <option>ACTA MOVIMIENTO</option>
                                        <option>ACTA REPARACION</option>
                                    </select>
                                </h3>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">DATOS UNIDAD QUE REALIZA LA ENTREGA:    </td>
                        </tr>
                        <tr>
                            <td>UNIDAD QUE ENTREGA:</td>
                            <td><input type="text" name="undEntrega" value="" id="undEntrega"></td>
                        </tr>
                        <tr>
                            <td>NOMBRE RESPONSABLE:</td>
                            <td><input type="text" name="nbResponsable" value="" id="nbResponsable"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">DATOS UNIDAD QUE RECEPCIONA:</td>
                        </tr>
                        <tr>
                            <td>UNIDAD QUE RECEPCIONA:</td>
                            <td><input type="text" name="undRecep" value="" id="undRecep"></td>
                        </tr>
                        <tr>
                            <td>NOMBRE RESPONSABLE:</td>
                            <td><input type="text" name="nbResponsableRecp" value="" id="nbResponsableRecp"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <a href="#" onclick="javascript:addElement('detalle');"> <span class="glyphicon glyphicon-plus"></span></a>&nbsp;Agregar Elemento
                            </td>
                            <td colspan="1">
                                <a href="#" onclick="javascript:delElement('detalle');"> <span class="glyphicon glyphicon-remove"></span></a>&nbsp;Borrar Elemento
                            </td>
                        </tr>

                    </table>
                    <table border="1" width="100%" id="detalle">
                        <tr>
                            <td>CANT.</td><td>DESCRIPCION DEL BIEN</td><td>N° PLACA</td><td>ESTADO</td>
                            <td>OBSERVACIONES <br>FAVOR INDICAR UBICACIÓN</td>
                        </tr>

                    </table>
                    <hr>
                    <table width="100%" border="0">
                        <tr>
                            <td colspan="1">
                                <div class="text-center"></div>
                                <div id="firma"></div>
                                <div class="text-center">
                                    FIRMA, <br>TIMBRE Y FECHA<br>
                                    RESPONSABLE UNIDAD QUE ENTREGA
                                </div>
                            </td>
                            <td colspan="1">
                                <div class="text-center"></div>
                                <div id="firma"></div>
                                <div class="text-center">
                                    FIRMA, <br>TIMBRE Y FECHA<br>
                                    RESPONSABLE UNIDAD QUE RECIBE
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="text-center"></div>
                                <div id="firma"></div>
                                <div class="text-center">
                                    NOMBRE
                                </div>
                            </td>
                            <td>
                                <div class="text-center"></div>
                                <div id="firma"></div>
                                <div class="text-center">
                                    NOMBRE
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="button" value="Generar PDF" name="generaPDF" id="generaPDF" disabled="disabled"/>
                            </td>
                            <td>
                                <input type="button" value="Guardar Acta" name="guardarActa" id="guardarActa"/>
                            </td>
                        </tr>
                    </table>
                    <br>
                </form>

            </div>
            <div class="col-lg-2">
                asdasdasd
            </div> 
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-5">
                acá iremos nosotros
            </div>
        </div>
    </div>
</body>
</html>
