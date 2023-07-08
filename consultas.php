<?php
class consultas 
{
    private $bdd;

    function __construct($base)
    {
        $this->bdd = $base;
    }
    public function traerVentas()
    {
        $query = $this->bdd->ejecutarquery("SELECT * FROM ventas");
        
        return ($query);
    }

    public function insertarVenta($nombre,$apellido,$correo,$cantidad,$categoria,$total)
    {
        $query = $this->bdd->ejecutarquery("INSERT INTO ventas (nombre,apellido,correo,cantidad,categoria,total) VALUES ('$nombre','$apellido','$correo',$cantidad,'$categoria',$total)");
        return ($query);
    }
    


    // aparte -----------------------------------------------
    

    public function borrarTablas()
    {
        $datos_conexion = mysqli_connect("localhost", "root", "33420097", "diagnostico");
        $query = "SET FOREIGN_KEY_CHECKS = 0;";
        $query .= "TRUNCATE respuestas_usuarios;";
        $query .= "TRUNCATE pregunta;";
        $query .= "TRUNCATE usuario;";
        $query .= "SET FOREIGN_KEY_CHECKS = 1;";

        mysqli_multi_query($datos_conexion, $query);
    }
}
?>