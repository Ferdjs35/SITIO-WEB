<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $Id_arbol = $_POST["id_arbol"];
    $Cantidad = $_POST["Cantidad"];
    $Id_donante = $_POST["Id_donante"];

    $consulta = "UPDATE arboles SET Cantidad = '" . $Cantidad . "'  WHERE id_arbol = " . $Id_arbol;

    //echo $consulta;

    $query = $bd->prepare($consulta);

    $query->execute();

    header("Location:arboles.php");

    
?>