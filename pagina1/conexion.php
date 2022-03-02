<?php
        class Conexion{
            public function conectar(){
                $servidor = "localhost";
                $usuario = "root";
                $password = "";
                $bd = "vistas" ;

                $conexion = new mysqli($servidor,$usuario, $password, $bd);

                return $conexion;
            }
        }
        $c = new conexion();
        if($c-> conectar()){
            echo "conectado";
        }else{
            echo "fallo";
        }

    ?>