<?php 

    include ("conexion_model.php");

    class datos_titular extends DB {

        public $idTabTitular;


        function consulta(){

            try {
                
                $objConexion =  $this->conexion()->prepare("SELECT MAX(id_registro) FROM datos_titular");

                $objConexion->execute();
    
                $this->idTabTitular = $objConexion->fetch();

            } catch (PDOException $e) {
                 
                print_r('Error al Insertar: ' . $e->getMessage());

            }
          
        }

    }


?>