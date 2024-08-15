<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $name = $_POST["username"];
    $pass = $_POST["passwordd"];

    //Primer Paso - Generar la consulta
    $consulta = "INSERT INTO usuarios (username,passwordd) VALUES ('".$name."','".$pass."')";

    //Segundo Paso - Prepara la consulta
    $query = $bd->prepare($consulta);

    //Tercer Paso - Ejecutar la consulta
    $query->execute();

    header("Location:usuarios.php");

?>