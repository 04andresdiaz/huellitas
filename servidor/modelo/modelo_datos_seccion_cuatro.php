<?php 

    include ("modelo_c_tabTitular.php");

    class datos extends DB{

        function getDatos($nombreVocero, $tipoDocumentoVocero,$numeroDocumentoVocero, $direccionVoceroConcatenada, $ciudadVocero, $barrioVocero, $emailVocero, $celularVocero){

            try {
                
                session_start();

                 $idContrato = $_SESSION["id"];
                 $idTitular = $_SESSION["idTabTitular"];

                $fecha_actual = date("Y-m-d");

                $objConexion = $this->conexion()->prepare("INSERT INTO datos_vocero(id_registro ,nombre_vocero, tipo_documento, numero_documento, direccion_residencia, barrio_residencia, ciudad_residencia, email_vocero, celular_vocero, fecha_registro) VALUES (:idRegistro ,:nombreVocero, :tipoDocumentoVocero,:numeroDocumentoVocero,:direccionVoceroConcatenada,:barrioVocero,:ciudadVocero,:emailVocero,:celularVocero, :fecha_registro)");
            
            $objConexion->execute(['idRegistro' => $idTitular,'nombreVocero' => $nombreVocero, 'tipoDocumentoVocero' => $tipoDocumentoVocero,'numeroDocumentoVocero' => $numeroDocumentoVocero,'direccionVoceroConcatenada' => $direccionVoceroConcatenada,'ciudadVocero' => $ciudadVocero,'barrioVocero' => $barrioVocero,'emailVocero' => $emailVocero,'celularVocero' => $celularVocero, "fecha_registro" => $fecha_actual]);

                if ($objConexion == true){
                    
                    $updateContrato = $this->conexion()->prepare("UPDATE datos_contrato SET id_vocero = :idVocero WHERE id_contrato = :idContrato");

                    $updateContrato->execute(['idVocero' => $idTitular, 'idContrato' => $idContrato]);

                    if ($updateContrato == true){

                        echo 1;
                    }

                }else{
                    echo "error";
                }
                
            } catch (PDOException $e) {
                print_r('Error al Insertar: ' . $e->getMessage());

            }
            

        }

    }


?>