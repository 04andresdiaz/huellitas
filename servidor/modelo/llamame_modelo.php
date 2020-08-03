<?php 

    require_once ("conexion_model.php");

    class insert_llamame extends DB{

        public function get_llamame($nombre, $celular, $fecha, $tipo_plan){

            $objInsertar = $this->conexion()->prepare("INSERT INTO prospecto(nombre_prospecto, celular_prospecto, fecha_registro, id_plan_interes) VALUES (:nombre_prospecto, :celular_prospecto, :fecha_registro, :id_plan_interes) ");

            $objInsertar->execute(['nombre_prospecto' => $nombre, 'celular_prospecto' => $celular, 'fecha_registro' => $fecha, 'id_plan_interes' => $tipo_plan]);

            if ($objInsertar == true){
                echo "¡Gracias! Pronto nos contactaremos Contigo";
            }else{
                echo "Error En El Envio De Los Datos :";
            }

        }
    }

?>