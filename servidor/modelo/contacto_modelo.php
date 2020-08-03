<?php 

    require_once ("conexion_model.php");

    class insert_contacto extends DB {

        public function get_contacto($nombre_contaco,$celular_contaco,$email_contaco,$mensaje_contaco, $fecha_registro){

            $objInsertar = $this->conexion()->prepare("INSERT INTO contactenos(nombre, email, celular, mensaje, fecha_registro) VALUES (:nombre_contaco, :celular_contaco, :email_contaco, :mensaje_contaco, :fecha_registro)");

            $objInsertar->execute(['nombre_contaco' => $nombre_contaco , 'celular_contaco' => $celular_contaco, 'email_contaco' => $email_contaco , 'mensaje_contaco' => $mensaje_contaco, 'fecha_registro' => $fecha_registro]);

            if ($objInsertar == true){
                echo "!Gracias Por Tus Comentarios! Pronto Te Responderemos"; 
            }else{
                echo "Error En El Envio De Los Datos";
            }

        }

    }

?>