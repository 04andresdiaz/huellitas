<?php 

    require_once ("../modelo/llamame_modelo.php");

    $nombre = $_POST['nombre'];
    $celular = $_POST['celular'];
    $tipo_plan = $_POST['tipo_plan'];
    $mes = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre' );
    $fecha = date('d'). ' de '.$mes[date("m")-1]." del ".date("Y");

    $objClase = new insert_llamame();
    $objClase->get_llamame($nombre, $celular, $fecha, $tipo_plan);


?>