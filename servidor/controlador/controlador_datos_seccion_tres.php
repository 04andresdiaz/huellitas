<?php 

    include ("../modelo/modelo_datos_seccion_tres.php");

    $periodicidadPago = $_POST['periodicidadPago'];
    $contratoDeligado = $_POST['contratoDeligado'];
    $plan = $_POST['plan'];

    // $cedulaTitular = $_POST['cedulaTitular'];

    $objDatos = new datos();
    $objDatos->getDatos($periodicidadPago,$contratoDeligado, $plan);

?>