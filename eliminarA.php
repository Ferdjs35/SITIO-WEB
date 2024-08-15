<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    $id = $_GET["id"];

    $consulta = "DELETE FROM arboles WHERE id_arbol = " . $id;
   
    $query = $bd->prepare($consulta);

    $query->execute();

    header("Location:arboles.php");

?>