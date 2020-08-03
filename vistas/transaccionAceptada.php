<?php



    include ("../lib/mpdf/autoload.php");
    include ("estructuraPdfContrato.php");

    $mpdf = new \Mpdf\Mpdf();

    $plantilla = plantilla();


    $mpdf->WriteHTML('Hello World');

    $mpdf->Output();

?>