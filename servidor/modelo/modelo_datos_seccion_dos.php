<?php 

    include ("conexion_model.php");

    class datos extends DB{

        function getDatos($direccionTrabajoConcatenada,$departamentoTrabajo,$ciudadTrabajo,$barrioTrabajo,$celularTrabajo, $nombreEmpresa,$email){

            try {

                session_start();

               $idContrato = $_SESSION["id"];
               $idTitular = $_SESSION["idTabTitular"];

                $fechaActual = date("Y-m-d");

                $objConexion = $this->conexion()->prepare("INSERT INTO datos_trabajo(id_registro , direccion_trabajo, departamento_trabajo, ciudad_trabajo , barrio_trabajo, telefono_trabajo, nombre_empresa, email_trabajo, fecha_registro) VALUES (:idTitular, :direccionTrabajoConcatenada, :departamentoTrabajo ,:ciudadTrabajo, :barrioTrabajo, :celularTrabajo,  :nombreEmpresa, :email, :fecha_registro)");

                $objConexion->execute(['idTitular' => $idTitular,'direccionTrabajoConcatenada' => $direccionTrabajoConcatenada, 'departamentoTrabajo' => $departamentoTrabajo ,'ciudadTrabajo' => $ciudadTrabajo,'barrioTrabajo' => $barrioTrabajo,'celularTrabajo' => $celularTrabajo,'nombreEmpresa' => $nombreEmpresa,'email' => $email, "fecha_registro" => $fechaActual]);
    
                if ($objConexion == true){
                    
                    $updateContrato = $this->conexion()->prepare("UPDATE datos_contrato SET id_trabajo = :idTrabajo WHERE id_contrato = :idContrato");

                    $updateContrato->execute(['idTrabajo' => $idTitular, 'idContrato' => $idContrato]);

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