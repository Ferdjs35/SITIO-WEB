<?php

    include("conexion.php");

    //print_r($_GET);

    $id = $_GET["id"];

    $consulta = "SELECT * FROM arboles WHERE id_arbol = " .$id;

    $query = $bd->prepare($consulta);
    $query->execute();

    $arboles = $query->fetchAll();


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
        
        <h1>Editar arboles</h1>
        
        <form action="editar_respuestaA.php" method="post">

            <div class="mb-3">Cantidad de arboles</div>
            <input type="text" name="Cantidad" value="<?php echo $arboles[0]["Cantidad"]; ?>"><br><br>

        
            <input type="hidden" name="Id_donante" value="<?php echo $arboles[0]["Id_donante"]; ?>">
            <input type="hidden" name="id_arbol" value="<?php echo $arboles[0]["id_arbol"]; ?>">

            <button>Modificar Cantidad</button>

        </form>    
    </body>
    
</html>




