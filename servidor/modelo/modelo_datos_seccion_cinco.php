<?php 

    require ("conexion_model.php");

    class datos extends DB{

        function getDatos($nombreMascota, $especieMascota, $razaMascota, $edadMascota,$pesoMascota, $fotoMascota){

            try {

                session_start();

                 $idContrato = $_SESSION["id"];
                 $idTitular = $_SESSION["idTabTitular"];

                $fecha_actual = date("Y-m-d");
                
                $objConexion = $this->conexion()->prepare("INSERT INTO datos_mascota(id_registro, nombre_mascota, especie_mascota, raza_mascota, edad_mascota, peso_mascota, foto_mascota,fecha_registro) VALUES (:idRegistro ,:nombreMascota ,:especieMascota ,:razaMascota ,:edadMascota ,:pesoMascota ,:fotoMascota ,:fecha_registro)");

                $objConexion->execute(["idRegistro" => $idTitular,"nombreMascota" => $nombreMascota, "especieMascota" => $especieMascota, "razaMascota" => $razaMascota, "edadMascota" => $edadMascota, "pesoMascota" => $pesoMascota, "fotoMascota" => $fotoMascota , "fecha_registro" => $fecha_actual]);
    
                if($objConexion == true){
                    
                    $updateContrato = $this->conexion()->prepare("UPDATE datos_contrato SET id_mascota = :idMascota WHERE id_contrato = :idContrato");

                    $updateContrato->execute(['idMascota' => $idTitular, 'idContrato' => $idContrato]);

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