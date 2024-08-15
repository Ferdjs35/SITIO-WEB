<?php

    include("conexion.php");

    //print_r($_GET);

    $id = $_GET["id"];

    $consulta = "SELECT * FROM usuarios WHERE id = " . $id;

    $query = $bd->prepare($consulta);
    $query->execute();

    $usuario = $query->fetchAll();

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Editar Usuario</title>
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
        
        <h1>Editar Usuario</h1>
        
        <form action="editar_respuestaU.php" method="post">
            <div>Usuario</div>
            <input type="text" name="username" value="<?php echo $usuario[0]["username"]; ?>"><br><br>
            
            <div>Contraseña</div>
            <input type="text" name="passwordd" value="<?php echo $usuario[0]["passwordd"]; ?>"><br><br>
            
            <input type="hidden" name="id" value="<?php echo $usuario[0]["id"]; ?>">
            
            <button>Modificar Usuario</button>
            
        </form>
    
    </body>
    
</html>