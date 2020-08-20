<?php 

    include ("conexion_model.php");

    class datos extends DB{

        function getDatos($periodicidadPago, $contratoDeligado, $plan){

            try {

                session_start();

                 $idContrato = $_SESSION["id"];
                 $idTitular = $_SESSION["idTabTitular"];
                 $_SESSION['idPlan'] = $plan;
                
                $fecha_actual = date("Y-m-d");

                $objConexion = $this->conexion()->prepare("INSERT INTO periodicidad_de_pago(id_registro , periodicidad, contrato_deligado, id_plan, fecha_registro) VALUES (:idRegistro , :periodicidadPago, :contratoDeligado, :plan, :fecha_registro)");

                $objConexion->execute(['idRegistro' => $idTitular ,'periodicidadPago' => $periodicidadPago, 'contratoDeligado' => $contratoDeligado, 'plan' => $plan, 'fecha_registro' => $fecha_actual ]);
                
                if($objConexion == true){

                    $updateContrato = $this->conexion()->prepare("UPDATE datos_contrato SET id_periodicidad = :idPeriodicidad WHERE id_contrato = :idContrato");

                    $updateContrato->execute(['idPeriodicidad' => $idTitular, 'idContrato' => $idContrato]);

                    if ($updateContrato == true){

                        echo 1;
                    }

                }

            } catch (PDOException $e) {
                 print_r('Error al Insertar: ' . $e->getMessage());

            }

           

        }

    }


?>