<?php 

    include ("modelo_c_tabTitular.php");

    class datos extends DB{

        function getDatos($nombreVocero, $tipoDocumentoVocero,$numeroDocumentoVocero, $direccionVoceroConcatenada, $departamentoVocero ,$ciudadVocero, $barrioVocero, $emailVocero, $celularVocero){

            try {
                
                session_start();

                 $idContrato = $_SESSION["id"];
                 $idTitular = $_SESSION["idTabTitular"];

                $fecha_actual = date("Y-m-d");
                
                $objConexion = $this->conexion()->prepare("INSERT INTO datos_vocero(id_registro ,nombre_vocero, tipo_documento_v, numero_documento_v, direccion_residencia_v, barrio_residencia_V, departamento_residencia_v ,ciudad_residencia_v, email_vocero, celular_vocero, fecha_registro_v) VALUES (:idRegistro ,:nombreVocero, :tipoDocumentoVocero,:numeroDocumentoVocero,:direccionVoceroConcatenada,:barrioVocero, :departamentoVocero ,:ciudadVocero,:emailVocero,:celularVocero, :fecha_registro)");
            
            $objConexion->execute(['idRegistro' => $idTitular,'nombreVocero' => $nombreVocero, 'tipoDocumentoVocero' => $tipoDocumentoVocero,'numeroDocumentoVocero' => $numeroDocumentoVocero,'direccionVoceroConcatenada' => $direccionVoceroConcatenada, 'departamentoVocero' => $departamentoVocero ,'ciudadVocero' => $ciudadVocero,'barrioVocero' => $barrioVocero,'emailVocero' => $emailVocero,'celularVocero' => $celularVocero, "fecha_registro" => $fecha_actual]);

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