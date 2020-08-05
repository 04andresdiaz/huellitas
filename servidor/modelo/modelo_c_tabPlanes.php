<?php 

    require ("conexion_model.php");

    class datos extends DB {

        public $nombre_plan;
        public $precio_plan;

        public $nombreTitular;
        public $tipoDocumento;
        public $numeroDocumento;
        public $celularTitular;
        //******************************* */

        public $fechaCContrato;
        public $fechaIContrato;
        public $horaIContrato;

        public $nombreTitularContrato;
        public $tipoDocumentoContrato;
        public $numeroDocumentoContrato;
        public $fechaNacimientoContrato;

        public $direccionRecidenciaContrato;
        public $barrioContrato;
        public $ciudadContrato;
        public $telefonoContrato;

        public $direccionTContrato;
        public $ciudadTContrato;
        public $barrioTContrato;
        public $telefonoTContrato;
        public $nombreTContrato;
        public $emailTContrato;

        public $periodicidadContrato;
        public $fechaLContrato;
        public $lugarPContrato;
        public $contratoDContrato;
        public $topoPlanContrato;
        
        public $nombreVContrato;
        public $tDocumentoVContrato;
        public $nDocumentoVContrato;
        public $direccionVContrato;
        public $bariioVContrato;
        public $ciudadVContrato;
        public $emailVContrato;
        public $telefonoVContrato;

        public $nombreMascotaContrato;
        public $especieMascotaContrato;
        public $razaMacotaContrato;
        public $edadMascotaContrato;
        public $pesoMascotaContrato;


        function consultaMascotas($idPlan){

            try {
                $objConsultaM = $this->conexion()->prepare("SELECT * FROM tipos_planes WHERE id_plan = :id_plan");

                $objConsultaM->execute(["id_plan" => $idPlan]);
    
                while ($res = $objConsultaM->fetch(PDO::FETCH_ASSOC)) {
    
                        $this->nombre_plan = $res["nombre_plan"];
                        $this->precio_plan = $res["precio_plan"];
    
                }
            } catch (Exception $e) {
                

            }

 

        }

        function consultaDatosTitular($idTitular){

            $objDatos = $this->conexion()->prepare("SELECT * FROM datos_titular WHERE id_registro = :idTitular");
            $objDatos->execute(["idTitular" => $idTitular]);
    
            while ($res = $objDatos->fetch(PDO::FETCH_ASSOC)) {
    
                $this->nombreTitular = $res['nombre_titular'];
                $this->tipoDocumento = $res['tipo_documento'];
                $this->numeroDocumento = $res['numero_documento'];
                $this->celularTitular = $res['celular'];

            }
    
        }

        function consultaContrato($idContrato)
        {
        
            try {
             
            $objConsultaContrato = $this->conexion()->prepare("SELECT datos_contrato.*, datos_mascota.*, datos_titular.*, datos_trabajo.*, datos_vocero.*, datos_vocero.*, periodicidad_de_pago.*, tipos_planes.*
            FROM datos_contrato 
                LEFT JOIN datos_mascota ON datos_contrato.id_mascota = datos_mascota.id_registro 
                LEFT JOIN datos_titular ON datos_contrato.id_titular = datos_titular.id_registro 
                LEFT JOIN datos_trabajo ON datos_contrato.id_trabajo = datos_trabajo.id_registro 
                LEFT JOIN datos_vocero ON datos_contrato.id_vocero = datos_vocero.id_registro 
                LEFT JOIN periodicidad_de_pago ON datos_contrato.id_periodicidad = periodicidad_de_pago.id_registro
                LEFT JOIN tipos_planes ON periodicidad_de_pago.id_plan = tipos_planes.id_plan
            WHERE datos_contrato.id_contrato = :idContrato");
            $objConsultaContrato->execute(["idContrato" => $idContrato]);

            while ($n = $objConsultaContrato ->fetch(PDO::FETCH_ASSOC)) {

                    $this->fechaCContrato = $n['fecha_c_contrato'];
                    $this->fechaIContrato = $n['feha_i_contrato'];
                    $this->horaIContrato = $n['hora_i_contrato'];

                    $this->nombreTitularContrato = $n['nombre_titular'];
                    $this->tipoDocumentoContrato = $n['tipo_documento'];
                    $this->numeroDocumentoContrato = $n['numero_documento'];
                    $this->fechaNacimientoContrato = $n['fecha_nacimiento'];

                    $this->direccionRecidenciaContrato = $n['direccion_residencia'];
                    $this->barrioContrato = $n['barrio_residencia'];
                    $this->ciudadContrato = $n['ciudad_residencia'];
                    $this->telefonoContrato = $n['celular'];

                    $this->direccionTContrato = $n['direccion_trabajo'];
                    $this->ciudadTContrato = $n['ciudad_trabajo'];
                    $this->barrioTContrato = $n['barrio_trabajo'];
                    $this->telefonoTContrato = $n['telefono_trabajo'];
                    $this->nombreTContrato = $n['nombre_empresa'];
                    $this->emailTContrato = $n['email_trabajo'];

                    $this->periodicidadContrato = $n['periodicidad'];
                    $this->fechaLContrato = null;
                    $this->lugarPContrato = $n['lugar_cobro'];
                    $this->contratoDContrato = $n['contrato_deligado'];
                    $this->topoPlanContrato = $n['nombre_plan'];

                    $this->nombreVContrato = $n['nombre_vocero'];
                    $this->tDocumentoVContrato = $n['tipo_documento_v'];
                    $this->nDocumentoVContrato = $n['numero_documento_v'];
                    $this->direccionVContrato = $n['direccion_residencia_v'];
                    $this->bariioVContrato = $n['barrio_residencia_v'];
                    $this->ciudadVContrato = $n['ciudad_residencia_v'];
                    $this->emailVContrato = $n['email_vocero'];
                    $this->telefonoVContrato = $n['celular_vocero'];

                    $this->nombreMascotaContrato = $n['nombre_mascota'];
                    $this->especieMascotaContrato = $n['especie_mascota'];
                    $this->razaMacotaContrato = $n['raza_mascota'];
                    $this->edadMascotaContrato = $n['edad_mascota'];
                    $this->pesoMascotaContrato = $n['peso_mascota'];
            }   
                

            } catch (Exception $e) {
                print_r('Error al Insertar: ' . $e->getMessage());
            }

        }

    }

?>