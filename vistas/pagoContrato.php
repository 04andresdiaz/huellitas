<?php 

    require ("../servidor/modelo/modelo_c_tabPlanes.php");

    session_start();
    $idPlan = $_SESSION['idPlan'];
    $idTitular = $_SESSION["idTabTitular"];

    $obj = new datos();
    $obj->consultaMascotas($idPlan);
    $obj->consultaDatosTitular($idTitular);


?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="images/x-icon" href="../img/iconos/favicon.ico">
 
  <!-- Liks Css -->
  
  <link rel="stylesheet" href="../lib/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/animate.css">
  <link rel="stylesheet" href="../css/estilosFormularioContrato.css">
  <link rel="stylesheet" href="../css/estilos.css">
  <script src="../js/lib/jquery.js"></script>
  <script type="text/javascript" src="https://checkout.epayco.co/checkout.js">   </script>
  <title>Realizar Pago Huellitas De Vida</title>

</head>
<body>


    <div class="contenedorPrincipal">
      <div class="fondoLateral"></div>
      <div class="contenedorFormulario">
          <p class="text-center fuentePrimaria texto-verde em3">Realiza El Pago De Tu Plan Para <br> Iniciar El Contrato</p>    
          <div class="formulario">
            <br>
            <p class="text-center texto-azul fuenteSecundaria">Datos Del Plan Que Estas Contratando</p>
            
            <div class="formDatotosContratante">
              <input type="text" readonly id="nombrePlan" class="mt-4 ancho100 text-center" name="nombrePlan" value="<?php echo $obj->nombre_plan; ?>">
              <input type="text" readonly id="precioPlan" class="mt-4 ancho100 text-center" name="precioPlan" value="<?php echo $obj->precio_plan; ?>">
              <br>
              <p class="text-center texto-azul fuenteSecundaria">Datos Del Titular</p>
              <input type="text" readonly id="nombreTitular" class="mt-4 ancho100 text-center" name="nombreTitular" value="<?php echo $obj->nombreTitular; ?>">
              <div id="divDocumento" class="mt-3 ancho100">
              <input type="text" readonly id="tipoDocumento" class="mt-4 ancho100 text-center" name="tipoDocumento" value="<?php echo $obj->tipoDocumento; ?>">.
              <input type="text" readonly id="numeroDocumento" class="mt-4 ancho100 text-center" name="numeroDocumento" value="<?php echo $obj->numeroDocumento; ?>">
            </div>  
              <input type="text" readonly id="numeroCelular" class="mt-4 ancho100 text-center" name="numeroCelular" value="<?php echo $obj->celularTitular; ?>">
            </div>
            <div class="botones mt-4">
                <p class="texto-blanco fuenteSecundaria btn bgAzul active" id="finalizar">Realizar Pago</p>
              </div>
         </div>
        </div>
        <div id="div"></div>
      </div>
    <script src="../js/lib/jquery.js"></script>
    <script src="../lib/bootstrap/js/src/popper.min.js"></script>
    <script src="../lib/bootstrap/dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="https://checkout.epayco.co/checkout.js">   </script>
    <script src="../js/finalizarPago.js"></script>
    <script>
      $(function () {
        $('[data-toggle="popover"]').popover()
      })
    </script>
</body>
</html>