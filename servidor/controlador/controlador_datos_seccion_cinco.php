<?php 

    require ("../modelo/modelo_datos_seccion_cinco.php");

    $formatos = array('.jpg','.png','.jpeg','.JPG','.PNG','.JPEG');

    $nombreMascota = $_POST["nombreMascota"];
    $especieMascota = $_POST["especieMascota"];
    $razaMascota = $_POST["razaMascota"];
    $edad = $_POST["edadMascota"];
    $tipoEdad = $_POST["tipoEdad"];
    $edadMascota = $edad." ".$tipoEdad;
    $peso = $_POST["pesoMascota"];
    $pesoMascota = $peso." Kg";

   // echo $nombreMascota, $especieMascota, $razaMascota, $edadMascota,$pesoMascota
    /*$carneMascota = $_FILES['carneMascota']["name"];
    $carneNombreTemporal = $_FILES['carneMascota']["tmp_name"];
    $extencion = substr($carneMascota, strripos($carneMascota, '.'));*/

    $fotoMascota = $_FILES['fotoMascota']["name"];
    $fotoMascotaTemporal = $_FILES['fotoMascota']["tmp_name"];
    $extencionMascota = substr($fotoMascota, strripos($fotoMascota, '.'));

    $cedulaTitular = $_POST['cedulaTitular'];

    if (in_array($extencionMascota, $formatos)){
        
        //move_uploaded_file($carneNombreTemporal, "../../img/imgCarne/$carneMascota"); 

        move_uploaded_file($fotoMascotaTemporal, "../../img/imgMascota/$fotoMascota");

    }else{
        echo "formato no valido";
    }
    
    $obj = new datos();
    $obj->getDatos($nombreMascota, $especieMascota, $razaMascota, $edadMascota,$pesoMascota, $fotoMascota, $cedulaTitular);

?>