<?php

class CConexion {
    function conexionBD(){

        $host = "localhost";
        $dbname = "saludintegral";
        $username = "postgres";
        $password = "root";
        try {
            $conn = new PDO ("pgsql:host = $host ; dbname= $dbname", $username, $password);
            echo "se conecto correctamente a la base de datos";
        } catch (PDOException $exp) {
            echo ("no se pudo conectar a la base de datos, $exp "   );
        }

    return $conn;
    }
}

?>
