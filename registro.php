<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="diseño.css">
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="https://ferdjs35.github.io/SITIO-WEB/inicio.html"><img src="logotipo.jpeg" alt="Logo" width="60" height="60" class="d-inline-block align-text-top"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="https://ferdjs35.github.io/SITIO-WEB/inicio.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://ferdjs35.github.io/SITIO-WEB/acerca.de.html">Acerca de...</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://ferdjs35.github.io/SITIO-WEB/organigrama.html">Organigrama</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="https://ferdjs35.github.io/SITIO-WEB/blog.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="https://ferdjs35.github.io/SITIO-WEB/informacion.html">Informacion</a> </li>
                <li><a class="dropdown-item" href="https://ferdjs35.github.io/SITIO-WEB/otros%20sitios.html">otros sitios</a> </li>
              </ul>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="https://ferdjs35.github.io/SITIO-WEB/registro.php">Registro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://ferdjs35.github.io/SITIO-WEB/galeria.html">Galeria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://ferdjs35.github.io/SITIO-WEB/miembros.html">Miembros</a>
            </li>
          </ul>
            <a href="https://ferdjs35.github.io/SITIO-WEB/login.php"><button class="btn btn-outline-success" type="submit">Iniciar sesion</button></a>
          
        </div>
      </div>
      </nav>
    
    <section class="container my-5">
        <h2>Registro</h2>
        <form action="new_respuesta.php" method="post">
            <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="Nombre">
            </div>
            <div class="mb-3">
                <label for="Apellido" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="Apellido">
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="email" class="form-control" name="Email">
            </div>
            <div class="mb-3">
                <label for="Telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" name="Telefono">
            </div>    
            <div class="mb-3">
                <label for="Cantidad" class="form-label">Cantidad de arboles</label>
                <input type="number" class="form-control" name="Cantidad">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </section>
        
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
