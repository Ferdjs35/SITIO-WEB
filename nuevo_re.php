<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $id = $_POST["id"];
    $username = $_POST["username"];
    $pass = $_POST["passwordd"];
    
    $consulta = "INSERT INTO usuarios (id,username, passwordd) VALUES ('".$id."', '".$username."', '".$pass."')";
    echo $consulta;
   
    $query = $bd->prepare($consulta);

    $query->execute();

    header("Location:usuarios.php");
?>
    
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