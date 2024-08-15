<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    $id = $_GET["id"];

    $consulta = "DELETE FROM donante WHERE Id_donante = " . $id;
   
    $query = $bd->prepare($consulta);

    $query->execute();

    header("Location:datos.php");

?>