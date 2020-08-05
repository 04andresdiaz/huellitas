<?php 


    include ("conexion_model.php");

    class datos extends DB {

        public function a_fecha_inicio($idContrato){
            
            $fecha_actual = date("Y-m-d");
            $hora_actual = date("h:i:s A");

            try {
                
            $objActualizacion =  $this->conexion()->prepare("UPDATE datos_contrato SET feha_i_contrato = :fechaInicio ,hora_i_contrato = :horaInicio WHERE id_contrato = :idContrato");
            $objActualizacion->execute(["fechaInicio" => $fecha_actual , "horaInicio" => $hora_actual, "idContrato" => $idContrato]);

            if ($objActualizacion == true){

                echo 1;
            }
            } catch (Exception $e) {
                
            }


        }


    }



?>