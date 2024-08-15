<?php

    include("conexion.php");

    //print_r($_GET);

    $Id_donante = $_GET["id"];

    $consulta = "SELECT * FROM donante WHERE Id_donante = " . $Id_donante;

    $query = $bd->prepare($consulta);
    $query->execute();

    $donante = $query->fetchAll();

//    echo "<pre>";
//    print_r($usuario);
//    echo "</pre>";

    //echo $usuario[0]["nombre"];

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Editar</title>
        <!--  Bootstrap      -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
        
        <style>
             body{
                padding: 20px;
            }
        </style>
        
    </head>
    
    <body>
        
        <h1>Editar donante</h1>
        
        <form action="editar_respuesta.php" method="post">
            <div class="mb-3">Nombre</div>
            <input type="text" name="Nombre" value="<?php echo $donante[0]["Nombre"]; ?>"><br><br>
            
            <div class="mb-3">Apellido</div>
            <input type="text" name="Apellido" value="<?php echo $donante[0]["Apellido"]; ?>"><br><br>
            
            <div class="mb-3">Email</div>
            <input type="text" name="Email" value="<?php echo $donante[0]["Email"]; ?>"><br><br>

            <div class="mb-3">Telefono</div>
            <input type="text" name="Telefono" value="<?php echo $donante[0]["Telefono"]; ?>"><br><br>

            <div class="mb-3">Cantidad de arboles</div>
            <input type="text" name="Cantidad" value="<?php echo $donante[0]["Cantidad"]; ?>"><br><br>

        
            <input type="hidden" name="Id_donante" value="<?php echo $donante[0]["Id_donante"]; ?>">
            
            <button>Modificar Usuario</button>

        </form>
    
    </body>
    
</html>




