<?php 

    include ("modelo_c_tabTitular.php");


    class datos extends DB{

        function getDatos($nombreTitular, $tipoDocumentoTitular, $cedulaTitular, $fechaDeNacimientoTitular,$direccionTitularConcatenada, $departamentoSeccionUno ,$ciudadTitular, $barrioTitular,$emailTitular,$celularTitular){

            $fechaActual = date("Y-m-d");

            try {
                /*
                *Inserto Los Datos Iniciales Del Titular
                */
                $objConexion = $this->conexion()->prepare("INSERT INTO datos_titular(nombre_titular, tipo_documento, numero_documento, fecha_nacimiento, direccion_residencia, departamento_residencia,barrio_residencia,ciudad_residencia, email, celular, fecha_registro) VALUES 
                (:nombreTitular, :tipoDocumentoTitular,:cedulaTitular,:fechaDeNacimientoTitular,:direccionTitularConcatenada, :departamentoSeccionUno ,:ciudadTitular,:barrioTitular,:email ,:celularTitular, :fecha_registro)");
    
                $objConexion->execute(['nombreTitular' => $nombreTitular, 'tipoDocumentoTitular' => $tipoDocumentoTitular , 'cedulaTitular' => $cedulaTitular , 'fechaDeNacimientoTitular' => $fechaDeNacimientoTitular , 'direccionTitularConcatenada' => $direccionTitularConcatenada , 'departamentoSeccionUno' => $departamentoSeccionUno ,'ciudadTitular' => $ciudadTitular, 'barrioTitular' => $barrioTitular, 'email' => $emailTitular, 'celularTitular' => $celularTitular, "fecha_registro" => $fechaActual]);
    
                if ($objConexion == true){

                    /*
                    *Si Se Ejecuta,
                    *Ejecutamos La Consulta para conocer el id del registro Actual
                    */
                    $obj = new datos_titular();
                    $obj->consulta();
                    $idTitular = $obj->idTabTitular[0];


                    /*
                    *Insertamos y creamos el nuevo contrato junto al 
                    *ID del titular
                    */

                    $insertContrato = $this->conexion()->prepare("INSERT INTO datos_contrato (fecha_c_contrato ,id_titular) VALUES (:fecha_c_contrato ,:idTitular)");
                    $insertContrato->execute(["fecha_c_contrato" => $fechaActual,"idTitular" => $idTitular]);

                    if ($insertContrato == true){
                         
                        /*
                        *Consultamos El ID actual del contrato
                        */
                        $consultaContrato = $this->conexion()->prepare("SELECT MAX(id_contrato) FROM datos_contrato ");
                        $consultaContrato->execute();
                        $idSesion = $consultaContrato->fetch();
                        /**
                         * Asignamos EL ID Del Contrato Actual A una sesión 
                         * para usarla en los diferentes Formularios
                         */
                        session_start();
                         $_SESSION["id"] = $idSesion[0];
                         $_SESSION["idTabTitular"] = $idTitular;

                        echo 1;
                        
                    }
                  
               
                                           
                }
            } catch (PDOException $e) {
                print_r('Error al Insertar: ' . $e->getMessage());
            }

        }

    }

?>