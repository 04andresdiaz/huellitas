<?php 

    require ("conexion_model.php");

    class datos extends DB {

        public $nombre_plan;
        public $precio_plan;

        public $nombreTitular;
        public $tipoDocumento;
        public $numeroDocumento;
        public $celularTitular;

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

    }

?>