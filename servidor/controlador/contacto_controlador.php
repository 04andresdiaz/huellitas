<?php

    require_once ("../modelo/contacto_modelo.php");

    $nombre_contacto = $_POST['nombre_contacto'];
    $celular_contacto = $_POST['celular_contacto'];
    $email_contacto = $_POST['email_contacto'];
    $mensaje_contacto = $_POST['mensaje_contacto'];
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    $fecha_registro = date("d")." de ".$meses[date("m")-1]." del ".date("Y");

    $objClase = new insert_contacto();
    $objClase->get_contacto($nombre_contacto , $celular_contacto, $email_contacto, $mensaje_contacto, $fecha_registro);
    

?>