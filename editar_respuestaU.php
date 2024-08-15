<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $username = $_POST["username"];
    $pass = $_POST["passwordd"];
    $id = $_POST["id"];

    $consulta = "UPDATE usuarios SET username = '" . $username . "', passwordd = '" . $pass . "' WHERE id = " . $id;

    //echo $consulta;

    $query = $bd->prepare($consulta);

    $query->execute();

    header("Location:usuarios.php");

    
?>