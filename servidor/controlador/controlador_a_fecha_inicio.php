<?php 

    include ("../modelo/modelo_a_fecha_inicio.php");


    $idContrato = $_POST["idContrato"];

    $obj = new datos ();
    $obj->a_fecha_inicio($idContrato);



?>