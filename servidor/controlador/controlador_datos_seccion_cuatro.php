<?php 

    include  ("../modelo/modelo_datos_seccion_cuatro.php");

    $nombreVocero = $_POST['nombreVocero'];
    $tipoDocumentoVocero = $_POST['tipoDocumentoVocero'];
    $numeroDocumentoVocero = $_POST['numeroDocumentoVocero'];
    //*
    $direccionVocero = $_POST['direccionVocero'];
    $valorUnoDireccionVocero = $_POST['valorUnoDireccionVocero'];
    $letraDireccionVocero = $_POST['letraDireccionVocero'];
    $valorDosDireccionVocero = $_POST['valorDosDireccionVocero'];
    $ubicacionDireccionVocero = $_POST['ubicacionDireccionVocero'];

    $direccionVoceroConcatenada = $direccionVocero." ".$valorUnoDireccionVocero." ".$letraDireccionVocero." # ".$valorDosDireccionVocero." ".$ubicacionDireccionVocero;
    //*
    $departamentoVocero = $_POST['departamentoVocero'];
    $ciudadVocero = $_POST['ciudadVocero'];
    $barrioVocero = $_POST['barrioVocero'];
    $emailVocero = $_POST['emailVocero'];
     $celularVocero = $_POST['celularVocero'];


    $objDatos = new datos();
    $objDatos->getDatos($nombreVocero, $tipoDocumentoVocero,$numeroDocumentoVocero, $direccionVoceroConcatenada, $departamentoVocero ,$ciudadVocero, $barrioVocero, $emailVocero, $celularVocero);


?>