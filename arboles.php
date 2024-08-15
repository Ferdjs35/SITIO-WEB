<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="diseño.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="file:///C:/Users/ferna/Downloads/SITIO%20WEB/inicio.html"><img src="logotipo.jpeg" alt="Logo" width="60" height="60" class="d-inline-block align-text-top"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://localhost/SITIO%20WEB/inicio.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://localhost/SITIO%20WEB/datos.php">Registros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://localhost/SITIO%20WEB/arboles.php">Arboles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://localhost/SITIO%20WEB/usuarios.php">Usuarios</a>
          </li>
        </ul>
        <a href="http://localhost/SITIO%20WEB/login.php"><button class="btn btn-outline-success" type="submit">Iniciar sesion</button></a>
      </div>
    </div>
    </nav>
    
    <div id="contenido">
        <hr>
        
         <table border="2" class="table table">
            <tr>
                <th>Id_arbol</th>
                <th>Cantidad</th>
                <th>Id_donante</th>
                <th>Editar</th>
                <th>Elimar</th>
            </tr>
            
            <?php
    include("conexion.php");

    //Paso 1.
    $consulta = "SELECT * FROM arboles";

    //Paso 2.
    $query = $bd->prepare($consulta);

    //Paso 3.
    $query->execute();

    //Paso 4. Traer la información de la cosulta
    $arboles = $query->fetchAll();
        
    ?>
    <?php 
                for($x=0; $x < count($arboles); $x++){
            ?>  
                <tr>
                    <td><?php echo $arboles[$x]["id_arbol"]; ?></td>
                    <td><?php echo $arboles[$x]["Cantidad"]; ?></td>
                    <td><?php echo $arboles[$x]["Id_donante"]; ?></td>

                    <td>
                      <img class="icon-edit" width=20px src="edit.png" usid="<?php echo $arboles[$x]["id_arbol"] ?>">
                    </td>
                    <td>
                      <img class="icon-borrar" width=20px src="delete.png" usid="<?php echo $arboles[$x]["id_arbol"] ?>">
                    </td>
                </tr>
            <?php
                }
            ?>
             </table>
            <br>
            <script>
            
            $(".icon-edit").click(function(){
               
                var id = $(this).attr("usid");
                
                window.location = "editarA.php?id=" + id;
                
            });
            
            $(".icon-borrar").click(function(){
                
                var idx = $(this).attr("usid");
                
                if(confirm("Estas seguro qué deseas elimar al arbol?")){ 
                    window.location = "eliminarA.php?id=" + idx; 
                }
            });
        </script>    
          </div>

    
        </div>
        

    <footer>
      <div class="enlaces">
          <a>© 2024 Company, Inc. Todos los derechos reservados.</a>
      </div>
      <div class="social">
          <a ><img src="facebook.svg" alt="Facebook"> @EcoVida.com</a>
          <a ><img src="whatsapp.svg" alt="whatsapp"> 7221078503</a>
          <a ><img src="instagram.svg" alt="instagram"> @Ecovida_2</a>
          <a ><img src="tiktok.svg" alt="TikTok"> @Ecovida_2</a>
      </div>
    </footer>
</body>
</html>