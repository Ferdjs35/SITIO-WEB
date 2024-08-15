<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";


    $Nombre = $_POST["Nombre"];
    $Apellido = $_POST["Apellido"];
    $Email = $_POST["Email"];
    $Telefono = $_POST["Telefono"];
    $Cantidad = $_POST["Cantidad"];
    $Id_donante = $_POST["Id_donante"];

    $consulta = "UPDATE donante SET Nombre = '" . $Nombre . "', Apellido = '" . $Apellido. "', Email = '" . $Email . "', Telefono = '" . $Telefono . "', Cantidad = '" . $Cantidad . "'  WHERE Id_donante = " . $Id_donante;

    //echo $consulta;

    $query = $bd->prepare($consulta);

    $query->execute();

    header("Location:datos.php");

    
?>