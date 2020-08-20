<?php 

    include ("../modelo/modelo_datos_seccion_dos.php");

    $direccionTrabajo = $_POST['direccionTrabajo'];
    $valorUnoDireccionTrababjo = $_POST['valorUnoDireccionTrababjo'];
    $letraDireccionTrabajo = $_POST['letraDireccionTrabajo'];
    $valorDosDireccionTrababjo = $_POST['valorDosDireccionTrababjo'];
    $ubicacionDireccionTrabajo =  $_POST['ubicacionDireccionTrabajo'];
    $direccionTrabajoConcatenada = $direccionTrabajo." ".$valorUnoDireccionTrababjo." ".$letraDireccionTrabajo." # ".$valorDosDireccionTrababjo." ".$ubicacionDireccionTrabajo;
    //-----
    $departamentoTrabajo = $_POST['departamentoTrabajo'];
    $ciudadTrabajo = $_POST['ciudadTrabajo'];
    $barrioTrabajo = $_POST['barrioTrabajo'];
    $celularTrabajo = $_POST['celularTrabajo'];
    $nombreEmpresa = $_POST['nombreEmpresa'];
    $email = $_POST['email'];

  //  echo $direccionTrabajoConcatenada,$ciudadTrabajo,$barrioTrabajo, $nombreEmpresa,$email;

  //  $cedulaTitular = $_POST['cedulaTitular'];

    $objDatos = new datos();
    $objDatos->getDatos($direccionTrabajoConcatenada,$departamentoTrabajo,$ciudadTrabajo,$barrioTrabajo,$celularTrabajo, $nombreEmpresa,$email);

?>