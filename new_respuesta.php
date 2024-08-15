<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $Id_donante = $_POST["Id_donante"];
    $Nombre = $_POST["Nombre"];
    $Apellido = $_POST["Apellido"];
    $Email = $_POST["Email"];
    $Telefono = $_POST["Telefono"];
    $Cantidad = $_POST["Cantidad"];
    $Id_arbol = $_POST["Id_arbol"];
    
    //Primer Paso - Generar la consulta
    $consulta = "INSERT INTO donante (Id_donante, Nombre, Apellido, Email, Telefono, Cantidad) VALUES ('".$Id_donante."', '".$Nombre."', '".$Apellido."', '".$Email."', '".$Telefono."', '".$Cantidad."')";
    
    //Segundo Paso - Prepara la consulta
    $query = $bd->prepare($consulta);
    

    //Tercer Paso - Ejecutar la consulta
    $query->execute();
    
    $consulta2 = "INSERT INTO arboles (Cantidad, Id_donante) SELECT Cantidad, Id_donante FROM donante where not EXISTS (SELECT Id_donante FROM arboles);" ;
    $query2 = $bd->prepare($consulta2);
    $query2->execute();
    
    header("Location:ver.php");

?>