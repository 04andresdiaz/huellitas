<?php 

    include ("../modelo/modelo_datos_seccion_uno.php");

    $nombreTitular = $_POST['nombreSeccionUno'];
    $tipoDocumentoTitular = $_POST['tipoDocumentoSeccionUno'];
    $cedulaTitular = $_POST['cedulaSeccionUno'];
    $fechaDeNacimientoTitular = $_POST['fechaDeNacimiento'];
    //--
    $direccionTitular = $_POST['direccionSeccionUno'];
    $valorUnoDireccionTitular = $_POST['valorUnoDireccion'];
    $direccionLetrasTitular = $_POST['direccionLetrasSeccionUno'];
    $valorDosDireccionTitular = $_POST['valorDosDireccion'];
    $ubicacionDireccionTitular = $_POST['ubicacionDireccionSeccionuno'];

    $direccionTitularConcatenada = $direccionTitular." ".$valorUnoDireccionTitular." ".$direccionLetrasTitular." # ".$valorDosDireccionTitular." ".$ubicacionDireccionTitular;
    //--
    $ciudadTitular = $_POST['ciudadSeccionUno'];
    $barrioTitular = $_POST['barrioSeccionUno'];
    $emailTitular = $_POST['emailTitular'];
    $celularTitular = $_POST['celularSeccionUno'];

    $objDatos = new datos();
    
    $objDatos->getDatos($nombreTitular, $tipoDocumentoTitular, $cedulaTitular, $fechaDeNacimientoTitular,$direccionTitularConcatenada, $ciudadTitular, $barrioTitular,$emailTitular,$celularTitular );



    

?>