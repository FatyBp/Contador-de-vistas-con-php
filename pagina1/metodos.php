<?php
    class metodos{
        public function insertarDatos($vistas){
            $c=new Conexion();
            $conexion=$c->conectar();
            $sql="INSERT INTO vista(ip) values ('$vistas')";
            return $result=mysqli_query($conexion,$sql);
        }
        public function mostrarDatos($sql){
            $c=new Conexion();
            $conexion=$c->conectar();
            $result=mysqli_query($conexion,$sql);
            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }
    }
?>
