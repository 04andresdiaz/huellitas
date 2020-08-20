<?php
    session_start();

    require ("../servidor/modelo/modelo_c_tabPlanes.php");

    $idContrato = $_SESSION['id'];

    $obj = new datos();
    $obj->consultaContrato($idContrato);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="images/x-icon" href="../img/iconos/favicon.ico">

    <title>Trasaccion Aceptada / Huellitas De Vida</title>
    <link rel="stylesheet" href="../css/estilosPdfContrato.css">
    <link rel="stylesheet" href="../lib/bootstrap/dist/css/bootstrap.min.css">
    <script src="../lib/html2canvas.min.js"></script>
    <script src="../lib/jsPDF/dist/jspdf.debug.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</head>
<body>
    
<div class="centrarr">
    <p>  Gracias por haber contratado Huellitas de vida, a continuación encontrara un botón para realizar la descarga de su contrato en formato PDF, finalmente en unas horas uno de nuestros asesores se comunicara con usted para confirmar detalles de su plan de previsión para mascotas .</p>
</div>
<div class="centrar">
<button type="button" id="pdfDownloader" class="text-center bgVerde texto-blanco active">Descargar</button>
</div>

        <div class="contenedor container" id="contenedor">

        <img src="../img/OSF-LOGO-MASCOTAS-COLOR.png" alt="">
        <div class="">
        <div class="fila row mt-5">
            <div class="celda col-2 border border-dark">
               <b> Contrato N<br>
               <?php echo "CMP00".$idContrato;?></b>
            </div>
            <div class="celda col-5 border-top border-bottom border-right border-dark">
            <b>Fecha Celebracion Contrato</b><br>
                <label class="text-center"><?php echo $obj->fechaCContrato;?></label>
            </div>
            <div class="celda col-5 border-bottom border-top border-right border-dark">
                <b>Fecha y Hora Inicio de Contrato </b><br>
                <label class="text-center"><label><?php echo $obj->fechaIContrato." - ".$obj->horaIContrato;?></label>
            </div>
        </div>

        <h2 class="text-center">
            Datos Contratante
        </h2>
        <div class="fila row">
            <div class="celda col-6 border border-dark">
            <b>Nombres y Apellidos/Razon Social</b><br>
                <label><?php echo $obj->nombreTitularContrato;?></label>
            </div>
            <div class="celda col-3 border-top border-bottom border-right border-dark">
            <b>Documento de identidad</b> <label><?php echo $obj->tipoDocumentoContrato;?></label><br>
                <b>N</b> <label><?php echo $obj->numeroDocumentoContrato;?></label>

            </div>
            <div class="celda col-3 border-bottom border-top border-right border-dark">
            <b>Fecha De nacimiento</b><br>
                <label><?php echo $obj->fechaNacimientoContrato;?></label>
            </div>
        </div>

        <div class="fila row">
            <div class="celda col-3 border-bottom border-left border-right border-dark">
                <b>Direccion Recidencia </b><br>
                <label><?php echo $obj->direccionRecidenciaContrato;?></label>
            </div>
            <div class="celda col-3 border-bottom border-right border-dark">
            <b>Barrio</b> <br>
                <label><?php echo $obj->ciudadContrato;?></label>

            </div>
            <div class="celda col-3  border-bottom border-right border-dark">
            <b>Ciudad</b><br>
                <label><?php echo $obj->barrioContrato;?></label>

            </div>
            <div class="celda col-3 border-bottom border-right border-dark">
            <b>Telefono</b><br>
                <label><?php echo $obj->telefonoContrato;?></label>

            </div>
        </div>

        <div class="fila row">
            <div class="celda col-3 border-bottom border-left border-right border-dark">
            <b>Direccion De Trabajo/Lugar Cobro</b><br>
                <label><?php echo $obj->direccionTContrato;?></label>
            </div>
            <div class="celda col-3 border-bottom border-right border-dark">
            <b>Barrio</b><br>
                <label><?php echo $obj->ciudadTContrato;?></label>
            </div>
            <div class="celda col-3 border-bottom border-right border-dark">
            <b>Ciudad</b><br>
                <label><?php echo $obj->barrioTContrato;?></label>
            </div>
            <div class="celda col-3 border-bottom border-right border-dark">
            <b>Telefono</b><br>
                <label><?php echo $obj->telefonoTContrato;?></label>
            </div>
        </div>

        <div class="fila row">
            <div class="celda col-3 border-bottom border-left border-right border-dark">
            <b>Empresa</b><br>
                <label><?php echo $obj->nombreTContrato;?></label>
            </div>
            <div class="celda col-3 border-bottom border-right border-dark">
            <b>E-mail</b><br>
                <label><?php echo $obj->emailTContrato;?></label>
            </div>
            <div class="celda col-6 border-bottom border-right border-dark">
            <b>Periodicidad de Pago</b><br>
                <label><?php echo $obj->periodicidadContrato;?></label>
            </div>
        </div>

        <div class="fila row">
            <div class="celda col-6 border-bottom border-left border-right border-dark">
            <b>Fecha Limite De Pago</b><br>
                <label><?php echo $obj->fechaLContrato;?></label>
            </div>
            <div class="celda col-6 border-bottom border-right border-dark">
            <b>Lugar De Pago</b><br>
                <label><?php echo $obj->lugarPContrato;?></label>
            </div>
        </div>

        <div class="fila row">
            <div class="celda col-6 border-bottom border-left border-right border-dark">
            <b>Contrato De Ligado</b><br>
                <label><?php echo $obj->contratoDContrato;?></label>
            </div>
            <div class="celda col-6 border-bottom border-right border-dark">
            <b>Tipo De Plan</b><br>
                <label><?php echo $obj->topoPlanContrato;?></label>
            </div>
        </div>

        <h2 class="text-center">
            Datos Vocero Representante Del Contratante
        </h2>
        
        <div class="fila row">
            <div class="celda col-6 border-top border-bottom border-right border-left border-dark">
            <b>Nombres y Apellidos/Razon Social</b><br>
                <label><?php echo $obj->nombreVContrato;?></label>
            </div>
            <div class="celda col-6 border-top border-bottom border-right border-dark">
            <b>Documento de identidad</b> <label><?php echo $obj->tDocumentoVContrato;?></label><br>
                N° <label><?php echo $obj->nDocumentoVContrato;?></label>

            </div>
        </div>
        <div class="fila row">
            <div class="celda col-3 border-bottom border-right border-left border-dark">
            <b>Cun94019 Direccion Recidencia</b><br>
                <label><?php echo $obj->direccionVContrato;?></label>
            </div>
            <div class="celda col-3 border-bottom border-right border-dark">
            <b>Barrio</b><br>
                <label><?php echo $obj->bariioVContrato;?></label>
            </div>
            <div class="celda col-3 border-bottom border-right border-dark">
            <b>Ciudad</b><br>
                <label><?php echo $obj->ciudadVContrato;?></label>
            </div>
            <div class="celda col-3 border-bottom border-right border-dark">
            <b>Telefono</b><br>
                <label><?php echo $obj->telefonoVContrato;?></label>
            </div>
        </div>
        <div class="fila row">
            <div class="celda col-6 border-bottom border-right border-left border-dark">
            <b>E-mail</b><br>
                <label><?php echo $obj->emailVContrato;?></label>
            </div>
        </div>
        <h2 class="text-center">
            Datos De La Mascota
        </h2>
        <div class="fila row">
            <div class="celda col-4 border-bottom border-top border-left border-right border-dark">
                <b>Nombre Mascota</b><br>
                <label><?php echo $obj->nombreMascotaContrato;?></label>
            </div>
            <div class="celda col-4 border-bottom border-top border-right border-dark">
            <b>Especie</b><br>
                <label><?php echo $obj->especieMascotaContrato;?></label>
            </div>
            <div class="celda col-4  border-bottom border-top border-right border-dark">
            <b>Raza</b><br>
                <label><?php echo $obj->razaMacotaContrato;?></label>
            </div>
        </div>
        <div class="fila row">
            <div class="celda col-6 border-bottom border-left border-right border-dark">
            <b>Edad</b><br>
                <label><?php echo $obj->edadMascotaContrato;?></label>
            </div>
            <div class="celda col-6 border-bottom border-right border-dark">
            <b>Peso<b><br>
                <label><?php echo $obj->pesoMascotaContrato;?></label>
            </div>
        </div>
        </div>
        </div>
        </div>
        <script>
    $(document).ready(function(){


    $("#pdfDownloader").click(function(){

    html2canvas(document.getElementById("contenedor"), {
        onrendered: function(canvas) {
            var imgData = canvas.toDataURL('image/png');
            console.log('Report Image URL: '+imgData);
            var doc = new jsPDF('p', 'mm', 'legal'); //210mm wide and 297mm high
            
            doc.addImage(imgData, 'PNG', 10, 1);

            doc.addPage(imgData, 'PNG', 10, 1);
            doc.addImage(imgData, 'PNG', 10, 1);
            doc.save('sample.pdf');
            
            //location.href="../servidor/deleteSession.php";
        }
        
    });

});


})

    </script>
</body>
</html>

